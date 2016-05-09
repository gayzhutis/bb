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

require MODX_BASE_PATH . 'core/components/relations/processors/mgr/item/simplexlsx.class.php';

/*
$sql = "SELECT id FROM
modx_ms2_products";

$q = $modx->prepare($sql);
$q->execute();
$res = $q->fetchAll(PDO::FETCH_COLUMN);
$length = count($res);
for ($i = 0; $i < $length; $i++) {

    if ($product = $modx->getObject('msProduct', $res[$i])) {
        $product->set('published', 0);
        $product->save();
    }
}

$y=0;
$xlsx = new SimpleXLSX('/home/bodybu07/bodybuilding.ua/www/user_files/SUPIRPRAJS_1_1.xlsx');
$catalog = $xlsx->rows();

foreach ($catalog as $item){
     if ($res_tovar = $modx->getObject('msProductData', array('article' =>$item[8]))) {
          $id_product = $res_tovar->get('id');
          $product = $modx->getObject('msProduct', $id_product);
          $product->set('published', 1);
          $product->save();
          }
}
*/

$sql = "SELECT  prod.id FROM
modx_ms2_products AS prod LEFT JOIN modx_site_content AS cont 
ON prod.id = cont.id
WHERE 
class_key = 'msProduct' AND prod.article IS NULL ";

$q = $modx->prepare($sql);
$q->execute();
$res = $q->fetchAll(PDO::FETCH_COLUMN);
$length = count($res);
echo $length;

for ($i = 0; $i < $length; $i++) {

    if ($product = $modx->getObject('msProduct', $res[$i])) {
        $product->remove();
    }
}

//echo $y;
?>