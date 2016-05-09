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
$link = $modx->makeUrl($id);
$sql = "
    SELECT DISTINCT prod.manufacturer AS brand
    FROM modx_site_content AS cont
    LEFT JOIN modx_ms2_products AS prod
    ON cont.id=prod.id
    WHERE cont.parent = $id
    ORDER BY prod.manufacturer ASC
";

$output="<option selected disabled>Выберите бренд</option>";
/*$result = $modx->query($sql);
$data = $result->fetchAll(PDO::FETCH_ASSOC);
//print_r($data);
foreach ($data as $row) {
    $output .= "<option value=\"".$row['brand']."\"/>";
}*/
foreach ($modx->query($sql) as $row) {
    if($row['brand']=='')
    continue;
    $output .= '<option value="'.$row['brand'].'">'.$row['brand'].'</option>';
}
echo json_encode(array('result'=>$output, 'link'=>'http://'.$_SERVER[HTTP_HOST].'/'.$link));//кодируем в json
?>