<?php
if (!defined('MODX_API_MODE')) {
    define('MODX_API_MODE', false);
}
require_once '../config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CORE_PATH.'model/modx/filters/modoutputfilter.class.php';
require_once MODX_CORE_PATH.'model/modx/modx.class.php';
$modx = new modX();
$modx->getService('error','error.modError', '', '');
$modx->initialize('shop');

$modx->getRequest();
$modx->getParser();

$id = $_POST['id'];
$brand = $_POST['brand'];
$goal = $_POST['goal'];
$link = 'http://'.$_SERVER[HTTP_HOST].'/'.$modx->makeUrl($id).'?ms|manufacturer='.$brand.'&msoption|goal='.$goal;
echo json_encode(array('result'=>$output, 'link'=>$link));//кодируем в json
?>