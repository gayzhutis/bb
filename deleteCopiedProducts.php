<?php
error_reporting(E_ALL | E_STRICT);
set_time_limit(0);

if (!defined('MODX_API_MODE')) {
    define('MODX_API_MODE', false);
}
require_once '/home/bodybu07/bodybuilding.ua/www/config.core.php';
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
require_once MODX_CORE_PATH . 'model/modx/filters/modoutputfilter.class.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';

$modx = new modX();
$modx->initialize('web');
$modx->getService('error', 'error.modError', '', '');
$modx->getRequest();
$modx->getParser();

$miniShop2 = $modx->getService('minishop2', 'miniShop2', $modx->getOption('minishop2.core_path', null, $modx->getOption('core_path') . 'components/minishop2/') . 'model/minishop2/');

if (!($miniShop2 instanceof miniShop2))
    return '';


$sql = "SELECT id
FROM  `modx_site_content` 
WHERE published = 0
AND  `class_key` =  'msProduct'
";

$q = $modx->prepare($sql);
$q->execute();
$res = $q->fetchAll(PDO::FETCH_COLUMN);
$length = count($res);
echo $length;
$delete_count = 0;

for ($i = 0; $i < $length; $i++) {

    if ($product = $modx->getObject('msProduct', $res[$i])) {
        $article = $product->get('article');
        echo $article."<br/>";
                    $sql = "SELECT id
            FROM  `modx_site_content` 
            WHERE published =0
            AND  `class_key` =  'msProduct'
            ";
            
            $q = $modx->prepare($sql);
            $q->execute();
            $res = $q->fetchAll(PDO::FETCH_COLUMN);
            $length = count($res);
        if ($length > 1){
            $delete_count ++;
             $product->remove();
        }
    }
   
}

 echo  ' '.$delete_count;
//echo $y;
?>