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
$link = 'http://'.$_SERVER[HTTP_HOST].'/'.$modx->makeUrl($id).'?ms|manufacturer='.$brand;
$sql = "
    SELECT DISTINCT opt.value AS goal
    FROM modx_site_content AS cont
    LEFT JOIN modx_ms2_products AS prod
    ON cont.id=prod.id
    LEFT JOIN modx_ms2_product_options AS opt
    ON cont.id=opt.product_id
    WHERE (cont.parent = $id) AND (prod.manufacturer='$brand') AND (opt.key='goal')
    ORDER BY opt.value ASC
";

$output="<option selected disabled>Ваша цель</option>";
foreach ($modx->query($sql) as $row) {
    if($row['goal']=='')
    continue;
    $output .= '<option value="'.$row['goal'].'">'.$row['goal'].'</option>';
}
echo json_encode(array('result'=>$output, 'link'=>$link));//кодируем в json
?>