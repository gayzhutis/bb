<?php
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
header('Content-Type: application/json');

//message_chunk
$paramArr = json_decode($_POST['data'], true);
$api_key = $modx->getOption('np_api_key');

$data_string = $paramArr['curr_field'] == 'city' ? '{
                                                        "apiKey": "'.$api_key.'",
                                                        "modelName": "Address",
                                                        "calledMethod": "getCities"
                                                    }'
                                                :
                                                    '{
                                                        "apiKey": "'.$api_key.'",
                                                        "modelName": "Address",
                                                        "calledMethod": "getWarehouses",
                                                        "methodProperties": {
                                                            "CityRef": "'.$paramArr['ref'].'"
                                                        }
                                                    }';
$method = $paramArr['curr_field'] == 'city' ? 'getCities' : 'getWarehouses';
$ref = $paramArr['ref'];


$result = $modx->runSnippet('getNPList',array(
   'data_string' => $data_string,
   'method' => $method,
   'ref' => $ref
));

echo json_encode($result, JSON_UNESCAPED_UNICODE);

?>