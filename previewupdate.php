<?php
error_reporting(E_ALL | E_STRICT);


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



$sql = "SELECT id FROM
modx_ms2_products ORDER BY id";

$q = $modx->prepare($sql);
$q->execute();
$res = $q->fetchAll(PDO::FETCH_COLUMN);
$length = count($res);


for ($i = $offset; $i < $length; $i++) {
  // return $modx->error->failure($res[$i]);
$modx->runSnippet('generateThumbs',	 array( 'id' => $res[$i]));
// return $modx->error->success($time_limit);
    
}

return $modx->error->success('ok');
?>