<?php
error_reporting(E_ALL | E_STRICT);
set_time_limit(0);

if (!defined('MODX_API_MODE')) {
    define('MODX_API_MODE', false);
}
require_once 'config.core.php';
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

$sql = "SELECT product_id
FROM  `modx_msklad_products`
";

$q = $modx->prepare($sql);
$q->execute();
$res_list = $q->fetchAll(PDO::FETCH_COLUMN);
print_r($res);
$length = count($res);
foreach ($res_list as $product) {
    $msklad_product_id = $product;
    if ($product = $modx->getObject('msProduct', $msklad_product_id)) {
        $article = $product->get('article');
            $sql = "SELECT cont.id
            FROM  `modx_site_content` AS cont
            LEFT JOIN `modx_ms2_products` AS ms
            ON cont.id = ms.id
            WHERE 
            cont.class_key =  'msProduct'
            AND ms.article = '$article'
            AND template = 3
            ";
            
            $q = $modx->prepare($sql);
            $q->execute();
            $res = $q->fetchColumn();
            
            $sql = "UPDATE `modx_msklad_products` SET  `product_id` =  '$res' WHERE  `modx_msklad_products`.`product_id` = $msklad_product_id;";
            $q = $modx->prepare($sql);
            $q->execute();
            
             echo $msklad_product_id.'-'.$res;
        
    }
   
}
?>