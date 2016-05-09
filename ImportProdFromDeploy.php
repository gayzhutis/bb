error_reporting(E_ALL | E_STRICT);
set_time_limit(0);
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

function translit($str)
{
    $tr = array(
        "А" => "a", "Б" => "b", "В" => "v", "Г" => "g", "Д" => "d", "Е" => "e",
        "Ж" => "j", "З" => "z", "И" => "i", "Й" => "y", "К" => "k", "Л" => "l",
        "М" => "m", "Н" => "n", "О" => "o", "П" => "p", "Р" => "r", "С" => "s",
        "Т" => "t", "У" => "u", "Ф" => "f", "Х" => "h", "Ц" => "ts", "Ч" => "ch",
        "Ш" => "sh", "Щ" => "sch", "Ъ" => "", "Ы" => "yi", "Ь" => "", "Э" => "e",
        "Ю" => "yu", "Я" => "ya", "а" => "a", "б" => "b", "в" => "v", "г" => "g",
        "д" => "d", "е" => "e", "ж" => "j", "з" => "z", "и" => "i", "й" => "y",
        "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p",
        "р" => "r", "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h",
        "ц" => "ts", "ч" => "ch", "ш" => "sh", "щ" => "sch", "ъ" => "y", "ы" => "yi",
        "ь" => "", "э" => "e", "ю" => "yu", "я" => "ya", " " => "_", "." => "",
        "/" => "_"
    );
    $res = strtr($str, $tr);

    if (preg_match('/[^A-Za-z0-9_\-]/', $res)) {
        $res = preg_replace('/[^A-Za-z0-9_\-]/', '', $res);
    }

    return urlencode(strtolower($res));
}

function seo_data($id_product, $description, $keywords, $seo_pagetitle)
{
    global $modx;
    //keywords
    if ($modx->getObject('modTemplateVarResource', array('contentid' => $id_product, 'tmplvarid' => '3'))) {
        $meta_keywords = $modx->getObject('modTemplateVarResource', array('contentid' => $id_product, 'tmplvarid' => '3'));
    } else {
        $meta_keywords = $modx->newObject('modTemplateVarResource');
        $meta_keywords->set('contentid', $id_product);
        $meta_keywords->set('tmplvarid', '3');
    }
    $meta_keywords->set('value', $keywords);
    $meta_keywords->save();
    //description
    if ($modx->getObject('modTemplateVarResource', array('contentid' => $id_product, 'tmplvarid' => '4'))) {
        $meta_description = $modx->getObject('modTemplateVarResource', array('contentid' => $id_product, 'tmplvarid' => '4'));
    } else {
        $meta_description = $modx->newObject('modTemplateVarResource');
        $meta_description->set('contentid', $id_product);
        $meta_description->set('tmplvarid', '4');
    }
    $meta_description->set('value', $description);
    $meta_description->save();

    //meta_pagetitle
    if ($modx->getObject('modTemplateVarResource', array('contentid' => $id_product, 'tmplvarid' => '5'))) {
        $meta_pagetitle = $modx->getObject('modTemplateVarResource', array('contentid' => $id_product, 'tmplvarid' => '5'));
    } else {
        $meta_pagetitle = $modx->newObject('modTemplateVarResource');
        $meta_pagetitle->set('contentid', $id_product);
        $meta_pagetitle->set('tmplvarid', '5');
    }
    $meta_pagetitle->set('value', $seo_pagetitle);
    $meta_pagetitle->save();
}

//создание категории
function create_category($parent, $name)
{
    global $modx;
    if ($name == '') {
        return $modx->error->failure('Пустое имя категории');
    }
    $alias = translit($name);
    $add_categ = $modx->newObject('msCategory');
    $add_categ->fromArray(array(
        'publishedby' => 1
    , 'hidemenu' => 0
    , 'sourse' => 2
    , 'class_key' => 'msCategory'
    , 'context_key' => 'shop'
    , 'alias' => $alias
    , 'pagetitle' => $name
    , 'published' => 1
    , 'parent' => $parent
    , 'template' => 4
    , 'isfolder' => 1
    ));
    $add_categ->save();
    //id
    return $add_categ->get('id');
}

function main_category_relations($id_product, $main_category_array)
{
    global $modx;
    //удаляем все предыдущие отношения к категории
    $sql = "DELETE  FROM modx_ms2_product_categories WHERE `product_id` = $id_product";
    $q = $modx->prepare($sql);
    $q->execute();
    if (is_array($main_category_array)) {
        foreach ($main_category_array as $categ) {
            $categ = trim($categ);
            if ($categ != '') {
                if ($resource = $modx->getObject('modResource', array(
                    'pagetitle' => $categ))
                ) {
                    $categ_id = $resource->get('id');
                } //создаем новую категорию
                else {
                    $categ_id = create_category(2, $categ);
                }
                //вызываем процессор
                $processorPath = MODX_CORE_PATH . 'components/minishop2/processors/mgr/';
                //вызов процессора
                $data = array('product_id' => $id_product, 'category_id' => $categ_id);
                $response = $modx->runProcessor('product/category', $data, array('processors_path' => $processorPath));
                if ($response->isError()) {
                    return $modx->error->failure($response->getMessage());
                }
            }
        }
    }
}

function vendor_id($vendor)
{
    if ($vendor != '') {
        global $modx;
        if ($vendor_object = $modx->getObject('msVendor', array(
            'name' => $vendor))
        ) {
            return $vendor_object->get('id');
        } else {
            $processorPath = MODX_CORE_PATH . 'components/minishop2/processors/mgr/settings/';
            $data = array('name' => $vendor);
            $response = $modx->runProcessor('vendor/create', $data, array('processors_path' => $processorPath));
            if ($response->isError()) {
                return $modx->error->failure($response->getMessage());
            } else {
                $object = $response->getObject();
                return $object['id'];
            }
        }
    }
}

function product_option($value, $product_id, $key)
{
    global $modx;

    $sql = "SELECT * FROM `modx_ms2_product_options` WHERE `key` = '$key' AND  `product_id` = $product_id";
    $q = $modx->prepare($sql);
    $q->execute();
    $result = $q->fetchAll(PDO::FETCH_COLUMN);
    if (count($result) > 0) {
        $sql = "DELETE FROM modx_ms2_product_options WHERE `product_id` = $product_id AND `key` = '$key'";
        $q = $modx->prepare($sql);
        $q->execute();
    }
    if ($value != '') {
        if (strpos($value, ',') !== false) {
            $value_array = explode(',', $value);
            $value_main_table = '[';
            foreach ($value_array as $simple_value) {
                $simple_value = ucfirst(trim($simple_value));
                if ($simple_value != '') {
                    $sql = "INSERT INTO modx_ms2_product_options (`product_id`,`key`,`value`) VALUES ('$product_id','$key','$simple_value') ;";
                    $modx->exec($sql);
                    $value_main_table .= '"' . $simple_value . '",';
                }
            }
            $value_main_table = substr($value_main_table, 0, strlen($value_main_table) - 1);
            $value_main_table .= ']';
        } else {
            $simple_value = ucfirst(trim($value));
            $sql = "INSERT INTO modx_ms2_product_options (`product_id`,`key`,`value`) VALUES ('$product_id','$key','$value');";
            //  $modx->exec($sql);
            $stmt = $modx->prepare($sql);
            return $stmt->execute();
            $value_main_table = '["' . $simple_value . '"]';
        }

        if ($key == 'color') {
            $params_array = array(
                'сolor' => $value_main_table
            );
            $edit_tovar = $modx->getObject('msProduct', $product_id);
            $edit_tovar->fromArray($params_array);
            $edit_tovar->save();
        }

    }
}


$miniShop2 = $modx->getService('minishop2', 'miniShop2', $modx->getOption('minishop2.core_path', null, $modx->getOption('core_path') . 'components/minishop2/') . 'model/minishop2/');

if (!($miniShop2 instanceof miniShop2))
    return '';

$begin = 1100;
while ($begin != 1250) {
    echo $begin.'\r\n';
    $sql = "
            SELECT
                prod.manufacturer,
                cont.pagetitle,
                cont.longtitle,
                prod.category,
                prod.subcategs,
                prod.packing,
                prod.packing_unit,
                prod.taste,
                prod.barcode,
                prod.article,
                prod.ingredients,
                prod.number_of_servings,
                prod.goal,
                prod.not_available,
                prod.currency_price,
                prod.currency_skidka_price,
                prod.currency,
                cont.content,
                prod.composition,
                prod.recommendations,
                cont.introtext
            FROM deploy_ms2_products AS prod
            LEFT JOIN deploy_site_content AS cont
            ON prod.id = cont.id
            WHERE  class_key = 'msProduct'
            ORDER BY manufacturer
            LIMIT   $begin, 50";

    $q = $modx->prepare($sql);
    $q->execute();
    $result = $q->fetchAll(PDO::FETCH_ASSOC);
    $tovar_template = 3;       //ID шаблона товара
    $type = 'msProduct';       //Тип документа (не менять)
    $save = 1;
    $context_key = 'shop';
    foreach ($result as $product_data) {
//product params
        $manufacturer = trim($product_data['manufacturer']);
        $naimenovanie = trim($product_data['pagetitle']);
        $longtitle = trim($product_data['longtitle']);
        $main_category = trim($product_data['category']);
        $sub_category = trim($product_data['subcategs']);
        $weight = str_replace(',', ".", trim($product_data['packing']));
        $packing_unit = trim($product_data['packing_unit']);
        $taste = trim($product_data['taste']);
        $barcode = trim($product_data['barcode']);
        $article = trim($product_data['article']);
        $ingredients = trim($product_data['ingredients']);
        $number_of_servings = trim($product_data['number_of_servings']);
        $goal = trim($product_data['goal']);
        $not_available = trim($product_data['not_available']);
        $price = str_replace(',', ".", trim($product_data['currency_price']));
        $skidka_price = str_replace(',', ".", trim($product_data['currency_skidka_price']));
        $currency = trim($product_data['currency']);
        $vendor = vendor_id($manufacturer);
        $content = $product_data['content'];
        $composition = $product_data['composition'];
        $recommendations = $product_data['recommendations'];
        $introtext = $product_data['introtext'];


        $unique = translit($article);
        $alias = translit($manufacturer) . '-' . translit($naimenovanie) . '-' . $unique;


        //seo
        $description = '';
        $keywords = $manufacturer . ',' . $naimenovanie . ',' . $main_category . ',' . $ingredients . ',' . $barcode;
        $seo_pagetitle = $longtitle . ' купить, Украина – отзывы и цена';


        if (strpos($main_category, ',') !== false) {
            $main_category_array = explode(',', $main_category);

            if (is_array($main_category_array)) {
                //получаем парент первой категории и делаем её родительской
                $category = array_shift($main_category_array);
                if ($resource = $modx->getObject('modResource', array(
                    'pagetitle' => $category))
                ) {
                    $category_parent = $resource->get('id');
                } else {
                    $category_parent = create_category(2, $category);
                }
            }
        } else {
            if ($resource = $modx->getObject('modResource', array(
                'pagetitle' => $main_category))
            ) {
                $category_parent = $resource->get('id');
            } else {
                $category_parent = create_category(2, $main_category);
            }
        }

        $params_array = array(
            'publishedby' => 1
        , 'hidemenu' => 0
        , 'sourse' => 2
        , 'show_in_tree' => 0
        , 'class_key' => $type
        , 'context_key' => $context_key
        , 'pagetitle' => $naimenovanie
        , 'longtitle' => $longtitle
        , 'parent' => $category_parent
        , 'template' => $tovar_template
        , 'isfolder' => 0
        , 'alias' => $alias
            //product fields
        , 'article' => $article
        , 'manufacturer' => $manufacturer
        , 'packing' => $weight
        , 'packing_unit' => $packing_unit
        , 'taste' => $taste
        , 'barcode' => $barcode
        , 'article' => $article
        , 'ingredients' => $ingredients
        , 'number_of_servings' => $number_of_servings
        , 'goal' => $goal
        , 'not_available' => $not_available
        , 'category' => $main_category
        , 'subcategs' => $sub_category
        , 'currency_price' => $price
        , 'currency_skidka_price' => $skidka_price
        , 'currency' => $currency
        , 'vendor' => $vendor
        , 'content' => $content
        , 'composition' => $composition
        , 'recommendations' => $recommendations
        , 'introtext' => $introtext
        );

        if ($res_tovar = $modx->getObject('msProductData', array('article' => $article))) {
            $id_product = $res_tovar->get('id');
            $edit_tovar = $modx->getObject('msProduct', $id_product);
            $edit_tovar->fromArray($params_array);
            $edit_tovar->save();
            $params_array['id'] = $id_product;

            $response = $modx->runProcessor('resource/update', $params_array);

            if ($response->isError()) {
                /*
                  if (is_array($response->getMessage())){
                  //$msq = array_shift ($response->getMessage());
                  $msq = $response->getMessage();
                  return  $modx->error->failure("Ошибка обновления товара. $article");
                  }
                 */
                print_r($response->getMessage());
                return $modx->error->failure("Ошибка обновления товара. $article" . $response->getMessage());
            }
        } else {

            //return $modx->error->failure($article);

            $add_tovar = $modx->newObject('msProduct');
            $add_tovar->fromArray($params_array);
            $add_tovar->save();
            $id_product = $add_tovar->get('id');
            $params_array['published'] = 1;
            $params_array['id'] = $id_product;
            $response = $modx->runProcessor('resource/update', $params_array);

            if ($response->isError()) {
                return $modx->error->failure(" Ошибка обновления товара. Строка $i : $article" . $response->getMessage());
            }
            $res_array = $response->getObject();
            $id_product = $res_array['id'];
            $sql = "UPDATE  `modx_ms2_products` SET  `source` =  '2' WHERE  `modx_ms2_products`.`id` = $id_product";
            $q = $modx->prepare($sql);
            $q->execute();
        }
        if (is_array($main_category_array)) {
            main_category_relations($id_product, $main_category_array);
        }
        seo_data($id_product, $description, $keywords, $seo_pagetitle);
    }
    $modx->cacheManager->refresh();
    $begin += 50;
}