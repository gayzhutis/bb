<?php
error_reporting(E_ALL | E_STRICT);
set_time_limit(0);

if (!defined('MODX_API_MODE')) {
    define('MODX_API_MODE', false);
}
require_once '/var/www/dima/data/www/bodybuilding.ua/config.core.php';
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

$xlsx = new SimpleXLSX(MODX_BASE_PATH.'user_files/coupons/10000_DM_07.04.16.xlsx');
$catalog = $xlsx->rows();

foreach ($catalog as $item) {
    if (!$res_tovar = $modx->getObject('msdCoupon', array('code' =>$item[0]))) {
        $couponParams = array(
            'group_id' => 5,//id существующей группы - смотреть в базе
            'code' => $item[0],
            'activatedon' => '0000-00-00 00:00:00',
            'active' => 1,
        );
        $newCoupon =  $modx->newObject('msdCoupon',$couponParams );
        $newCoupon->save();
    }
}
?>