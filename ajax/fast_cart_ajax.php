<?php
if (!defined('MODX_API_MODE')) {
    define('MODX_API_MODE', false);
}
require_once 'config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CORE_PATH.'model/modx/filters/modoutputfilter.class.php';
require_once MODX_CORE_PATH.'model/modx/modx.class.php';
$modx = new modX();
$modx->initialize('shop');
$modx->getService('error','error.modError', '', '');
$modx->getRequest();
$modx->getParser();


$key = $_POST['key'];
//print_r($_SESSION['minishop2']['cart']);
$result = $modx->runSnippet('msCart_custom', array(
    'tplOuter' => 'fastCartOuterCHNK',
    'tplRowProd' => 'fastCartRowProductCHNK',
    'tplRowSet' => 'fastCartRowSetCHNK',
    'includeThumbs' => '190x150',
    'includeTVs' => 'meta_name,products_in_set_migx',
    'processTVs' => 'products_in_set_migx'
));
echo json_encode(array(
    'result' => $result,
    'link' => $modx->makeUrl($_SESSION['minishop2']['cart'][$key]['id'],'shop','','full')
));
?>