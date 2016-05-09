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

echo $modx->runSnippet('msCart_custom', array(
    'tplOuter' => 'miniCartOuterCHNK',
    'tplRowProd' => 'miniCartRowProductCHNK',
    'tplRowSet' => 'miniCartRowSetCHNK',
    'includeThumbs' => '65x60',
    'includeTVs' => 'meta_name,products_in_set_migx',
    'processTVs' => 'products_in_set_migx'
    ));

?>