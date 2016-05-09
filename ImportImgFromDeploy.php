error_reporting(E_ALL | E_STRICT);
set_time_limit(0);
ini_set('memory_limit', '256M');

if (!defined('MODX_API_MODE')) {
    define('MODX_API_MODE', false);
}
require_once '/home/bodybu07/moohii.dp.ua/www/config.core.php';
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

$way = MODX_ASSETS_PATH . 'images/products/';

$sql = "
            SELECT prod.id,prod.article
FROM modx_ms2_products AS prod
LEFT JOIN modx_ms2_product_files AS file
 ON prod.id = file.product_id
WHERE file.product_id IS NULL
            ";

$q = $modx->prepare($sql);
$q->execute();
$none_img_array = $q->fetchAll(PDO::FETCH_ASSOC);

foreach ($none_img_array as $product) {
    $article = $product['article'];
    //основной товар
    if ($res_tovar = $modx->getObject('msProductData', array('article' => $article))) {

        $id_product = $res_tovar->get('id');
        //переносим
        $sql = "
            SELECT file.file,file.path,file.name
FROM deploy_ms2_products AS prod
LEFT JOIN deploy_ms2_product_files AS file
 ON prod.id = file.product_id
WHERE prod.article = '$article'
AND file.parent = 0
            ";

        $q = $modx->prepare($sql);
        $q->execute();
        $img_array = $q->fetchAll(PDO::FETCH_ASSOC);
        echo $article . "<br/>";
        foreach ($img_array as $img) {
            // $processorPath = MODX_CORE_PATH . 'components/minishop2/convert/ms1/processors/';
            $processorPath = MODX_CORE_PATH . 'components/minishop2/processors/mgr/';
            $file = array(
                'id' => $id_product,
                'name' => $img['name'],
                'file' => $way . $img['path'] . $img['file']
            );
            $response = $modx->runProcessor('gallery/upload', $file, array('processors_path' => $processorPath));
            if ($response->isError()) {
                echo $response->getMessage();
            }
        }
    }


}

echo "vse";


