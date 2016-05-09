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
header('Content-Type: application/json');

// Including pdoFetch class for Fenom parsing chunk.
require_once MODX_CORE_PATH.'components/pdotools/model/pdotools/pdofetch.class.php';
$pdoFetch = new pdoFetch($modx);

$vars_arr = json_decode($_POST['data'], true);

//Запуск сниппета
$prods = $modx->runSnippet('msProducts', array(
    'parents' => $vars_arr['parent'],
    'depth' => 0,
    'tpl' => 'productLinkRuCHNK',
    'sortby' => 'Data.price',
    'includeTVs' => 'meta_name',
    'where' => '{"Vendor.name:=":"'.$vars_arr['manufacturer'].'"}',
    'limit' => '0'
));

$output = $pdoFetch->getChunk('productsLinksOuterCHNK', array(
    'output' => $prods,
    'manufacturer' => $vars_arr['manufacturer']
));

echo json_encode(array('result' => $output));
?>