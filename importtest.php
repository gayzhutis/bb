<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');
if (!defined('MODX_API_MODE')) {
    define('MODX_API_MODE', false);
}
require_once 'config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CORE_PATH.'model/modx/filters/modoutputfilter.class.php';
require_once MODX_CORE_PATH.'model/modx/modx.class.php';
$modx = new modX();
$modx->initialize('web');
$modx->getService('error','error.modError', '', '');
$modx->getRequest();
$modx->getParser();
$miniShop2 = $modx->getService('minishop2', 'miniShop2', $modx->getOption('minishop2.core_path', null, $modx->getOption('core_path') . 'components/minishop2/') . 'model/minishop2/');

if (!($miniShop2 instanceof miniShop2))
    return '';


$output = $modx->runSnippet('msOptions',array(
   'name' => 'color',
'tplOuter' => 'tastesOuterRuTPL',
'product' => '3191'
));
echo $output; // prints 'Welcome John!'
echo "ku";
$output = $modx->runSnippet('msOptionsCustom',array(
   'name' => 'color',
'tplOuter' => 'tastesOuterRuTPL',
'id' => '3191'
));
echo $output; // prints 'Welcome John!'




?>