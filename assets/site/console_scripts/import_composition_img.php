<?php
/**
 * @file
 * 
 * Import composition images to the products from excel file *.xlsx.
 * Xlsx file and path to images folder setting on 101 string.
 * 
 * @author Vladyslav Gayzhutis <gayzhutis@gmail.com>
 */ 

// error_reporting(E_ALL | E_STRICT);
// ini_set('display_errors', 'On');

// Setting script time limit.
set_time_limit(150);

// Setting api mode as true.
define('MODX_API_MODE', true);

// Including config.inc.php and initialize modX object, context mgr.
$site_root = dirname(dirname(dirname(dirname(__FILE__))));
require "$site_root/core/config/config.inc.php";
require_once(MODX_CORE_PATH . 'model/modx/modx.class.php');
$modx = new modX();
$modx->initialize('mgr');

// Enable error log.
$modx->getService('error','error.modError');
$modx->setLogLevel(modX::LOG_LEVEL_FATAL);
$modx->setLogTarget(XPDO_CLI_MODE ? 'ECHO' : 'HTML');
$modx->error->message = null;
// $modx->log(modX::LOG_LEVEL_ERROR, $response->getMessage());

// Including minishop2 service.
$miniShop2 = $modx->getService(
    'minishop2',
    'miniShop2',
    $modx->getOption('minishop2.core_path', null, $modx->getOption('core_path') . 'components/minishop2/') . 'model/minishop2/'
);

if (!($miniShop2 instanceof miniShop2))
    return "miniShop2 class are not included.\n";

/**
 * Returning only file type.
 * 
 * @param string $filename Filename.
 * 
 * @return string File type.
 * 
 * @author Vladyslav Gazhutis <gayzhutis@gmail.com>
 * 
 */
function getFileType($filename) {
    return end(explode(".", $filename));
}

/**
 * Find image (from assigned server path).
 * Return tag <img/> construction for text redactor.
 * 
 * @param integer $id_product   Product id
 * @param integer $img          Image name with extension
 * @param object $modx          Modx object
 * @param integer $way          Path to img from user_files directory
 * @param integer $user_files   Full path to img
 * 
 * @return string               Image tag construction.
 * 
 * @author Vladyslav Gazhutis <gayzhutis@gmail.com>
 * 
 */
function import_image($id_product, $img, $modx, $way, $user_files) {
    $processorPath = MODX_CORE_PATH . 'components/minishop2/convert/ms1/processors/';
    // $processorPath = MODX_CORE_PATH . 'components/minishop2/processors/mgr/';
    
    // File extension.
    $file_ext = getFileType($img);
    // File name without extension.
    $file_name = basename($img, '.'.$file_ext);
    
    // Choosing right file extension. Shifting of main image extension: jpg, jpeg, png, gif.
    if(!file_exists($way.$img)) {
        if(file_exists($way.$file_name.'.jpg'))
            $file_ext = 'jpg';
        else if(file_exists($way.$file_name.'.jpeg'))
            $file_ext = 'jpeg';
        else if(file_exists($way.$file_name.'.png'))
            $file_ext = 'png';
        else if(file_exists($way.$file_name.'.gif'))
            $file_ext = 'gif';
        else
            exit('. File "'.$way.$file_name.'.'.$file_ext.'" was not found on server. Please check filename or upload correct file.'."\n");
    }
    
    $img_tag = '<img src="'.$user_files.$file_name.'.'.$file_ext.'"/>';
    return $img_tag;
}

$brand = 'nutrition';

$user_files = "user_files/composition/$brand/";
// Path to folder with images.
$way = MODX_BASE_PATH . "user_files/composition/$brand/";
// Xlsx import file path.
$file = MODX_BASE_PATH . 'user_files/composition/' . "import_$brand.xlsx";
// Including xlsx php library.
require MODX_CORE_PATH . 'components/relations/processors/mgr/item/simplexlsx.class.php';
// Setting inner encoding.
mb_internal_encoding("UTF-8");

// File processing.
if ($tmp = fopen($file, "r")) {
    $xlsx = new SimpleXLSX($file);
    $catalog = $xlsx->rows();
    $i = 0;
    $all = count($catalog) - 1;
    foreach ($catalog as $item) {
        $current = $i + 1;
        $article = $item[0];
        
        // $images_array = array();
        // if (strpos(trim($item[2]), '||') !== false)
        //     $images_array = explode("||", trim($item[2]));
        $one_image = trim($item[1]);
        
        // Ignore header xlsx file string.
        if (mb_strtolower($article, 'utf-8')=='артикул') {
            continue;
        }
        
        // Setting composition image to the product.
        if ($res_tovar = $modx->getObject('msProductData', array('article' => $article))) {
            $id_product = $res_tovar->get('id');
            $res_tovar->set(
                'composition',
                import_image($id_product, $one_image, $modx, $way, $user_files)
            );
            $res_tovar->save();
            
            echo "($current of $all) ID: $id_product | Article: $article. Composition image import success.\n";
        }
        else
            exit('Product with Article = '.$article.' was not found in database. Please check your import file "'.$file."\"\n");
        $i++;
    }
    echo "Import successfully completed.\n";
}
else
    echo "File $file was not found on server. Please, check the path in import_true_img.php script.\n";