<?php
if (!defined('MODX_API_MODE')) {
    define('MODX_API_MODE', false);
}
require_once '../config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CORE_PATH.'model/modx/filters/modoutputfilter.class.php';
require_once MODX_CORE_PATH.'model/modx/modx.class.php';
$modx = new modX();
$modx->initialize('shop');
$modx->getService('error','error.modError', '', '');
$modx->getRequest();
$modx->getParser();

$id = $_POST['id'];
//Запуск сниппета
$product = $modx->getObject('msProduct', $id);
$composition = $product->get('composition');
if ($composition!='')
echo $composition;
else echo "";
return;
?>