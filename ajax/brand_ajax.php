<?php
/**
 * @file
 * 
 * Processing ajax breadcrumbs.
 */
 
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

$brand = $_GET['brand']; 
$output = array();
$id = $modx->findResource($_GET['url']);
$res = $modx->getObject('modResource', $id);

if ($brand != '') {
    $brands_multi = $res->getTVValue(70);
    $output = $modx->runSnippet('brandMigxParser', array(
        'multi_json' => $brands_multi, 
        'categ_name' => $res->get('pagetitle'), 
        'curr_brand' => $brand, 
        'return' => 1
    ));
}
if (empty($output)) {
    $output['brand'] = $brand;
    $output['meta_description'] = $res->getTVValue(4);
    $output['meta_h1'] = $res->get('pagetitle');
    $output['meta_keywords'] = $res->getTVValue(3);
    $output['meta_title'] = $res->getTVValue(5);
    $output['text'] = $brand == 'default-content-return' ? $res->get('content') : '';
}

$output['crumbs'] = $modx->runSnippet('BreadCrumbCustom', array(
  'containerTpl' => 'breadCrumbContainerCHNK',
  'homeCrumbTpl' => 'breadCrumbHomeCHNK',
  'linkCrumbTpl' => 'breadCrumbLinkCHNK',
  'currentCrumbTpl' => 'breadCrumbCurrentCHNK'
));

echo json_encode($output);