<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');
$miniShop2 = $modx->getService('minishop2', 'miniShop2', $modx->getOption('minishop2.core_path', null, $modx->getOption('core_path') . 'components/minishop2/') . 'model/minishop2/');

if (!($miniShop2 instanceof miniShop2))
    return '';

require MODX_BASE_PATH . 'core/components/relations/processors/mgr/item/simplexlsx.class.php';
$offset = intval($scriptProperties['offset']);

function translit($str) {
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

function seo_data($id_product, $description, $keywords, $seo_pagetitle) {
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
function create_category($parent, $name) {
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

function main_category_relations($id_product, $main_category_array) {
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
                    'pagetitle' => $categ))) {
                    $categ_id = $resource->get('id');
                }
                //создаем новую категорию
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

function change_checkbox_input($value) {
    if ($value==='+')
        $value='1';
    else $value='0';
    return $value;
}

function change_checkbox_input_opposite($value) {
    if ($value==='+')
        $value='0';
    else $value='1';
    return $value;
}
/*
  function sub_category_relations($id_product, $sub_category, $main_categ_id) {
  global $modx;
  $sql = "DELETE  FROM modx_ms2_product_categories WHERE `product_id` = $id_product";
  $q = $modx->prepare($sql);
  $q->execute();
  if (strpos($sub_category, ',') !== false) {
  $sub_category_array = explode(',', $sub_category);

  foreach ($sub_category_array as $categ) {
  $categ = trim($categ);
  if ($categ != '') {
  if ($resource = $modx->getObject('modResource', array(
  'pagetitle' => $categ,
  'class_key' => 'msCategory'
  ))) {
  $category_parent = $resource->get('id');
  }
  //создаем новую категорию
  else {
  $category_parent = create_category($main_categ_id, $categ);
  }
 */

//вызываем процессор
/*
  $processorPath = MODX_CORE_PATH . 'components/minishop2/processors/mgr/';
  //вызов процессора
  $data = array('product_id' => $id_product, 'category_id' => $category_parent);
  $response = $modx->runProcessor('product/category', $data, array('processors_path' => $processorPath));
  if ($response->isError()) {
  echo  $response->getMessage();
  }
 */
/*
  $sql = "INSERT INTO modx_ms2_product_categories (`product_id`,`category_id`)
  VALUES ('$id_product','$category_parent') ;";
  $modx->exec($sql);

  }
  }
  } else {
  if ($sub_category != '') {
  if ($resource = $modx->getObject('modResource', array(
  'pagetitle' => $sub_category,
  'class_key' => 'msCategory'))) {
  $category_parent = $resource->get('id');
  } else {
  $category_parent = create_category($main_categ_id, $sub_category);
  }
  //вызываем процессор
  $processorPath = MODX_CORE_PATH . 'components/minishop2/processors/mgr/';
  //вызов процессора
  $data = array('product_id' => $id_product, 'category_id' => $category_parent);
  $response = $modx->runProcessor('product/category', $data, array('processors_path' => $processorPath));
  if ($response->isError()) {
  return $modx->error->failure($response->getMessage());
  }
  }
  }
  }
 */
function vendor_id($vendor) {
    if ($vendor != '') {
        global $modx;
        if ($vendor_object = $modx->getObject('msVendor', array(
            'name' => $vendor))) {
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

function product_option($value, $product_id, $key) {
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
                    $value_main_table .='"' . $simple_value . '",';
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
        /*
          $params_array = array(
          '$key' => $value
          );
          //   return $modx->error->failure( $params_array['id']);
          $edit_tovar = $modx->getObject('msProduct', $product_id);
          $edit_tovar->fromArray($params_array);
          $edit_tovar->save();
         */
    }
}

function check_dupclicate_articles($catalog) {
    $articles_array;
    foreach ($catalog as $key => $catalog) {
        $articles_array [] = trim($catalog[9]);
    }
    $articles_count_array = array_count_values($articles_array);
    $duplicate_articles = '';
    $duplicate_articles_array = '';
    foreach ($articles_count_array as $key => $value) {
        if ($value > 1)
            $duplicate_articles_array[] = $key;
    }
    if ($duplicate_articles_array!=''){
    $duplicate_articles = implode($duplicate_articles_array, ',');
    }
    return $duplicate_articles;
}

//имя файла
$file = MODX_BASE_PATH . 'user_files/' . $scriptProperties['file'];
//текущее время
$time = time();

//лимит на выполнение
$time_limit = ini_get('max_execution_time') - 20;


$tovar_template = 3;       //ID шаблона товара
$type = 'msProduct';       //Тип документа (не менять)
$save = 1;
$context_key = 'shop';

if ($tmp = fopen($file, "r")) {

    $xlsx = new SimpleXLSX($file);
    $catalog = $xlsx->rows();
    $i = 0;
    if ($offset == 0) {
        $duplicate = check_dupclicate_articles($catalog);
        if ( $duplicate != '')
            return $modx->error->failure('Найдены дубликаты артикулов: ' . $duplicate);
    }
    foreach ($catalog as $item) {
        if ($offset > 0 && $i < $offset) {
            $i++;
            continue;
        }

        //currency check
        $currency = trim($item[20]);
        if (stripos($currency,'UAH')===false && stripos($currency,'USD')===false)
        //if (count($item) != 17)
        return $modx->error->failure('Неправильный файл. Количество строк - ' . count($item));

        $sub_category = '';
        $main_category = '';
        $category_parent = '';
        $main_category_array = '';
        $alias = '';
        //product params
        $manufacturer = trim($item[0]);
        $naimenovanie = trim($item[1]);
        $longtitle = trim($item[2]);
        $main_category = trim($item[3]);
        $sub_category = trim($item[4]);
        $weight = str_replace(',', ".", trim($item[5]));
        $packing_unit = trim($item[6]);
        $taste = trim($item[7]);
        $barcode = trim($item[8]);
        $article = trim($item[9]);
        $ingredients = trim($item[10]);
        $number_of_servings = trim($item[11]);
        $goal = trim($item[12]);
        $not_available = trim($item[13]);
        $free_shaker = change_checkbox_input (trim($item[14]));
        $free_shipping = change_checkbox_input (trim($item[15]));
        $custom = change_checkbox_input (trim($item[16]));
        $popular = change_checkbox_input (trim($item[17]));
        $price = str_replace(',', ".", trim($item[18]));
        $skidka_price = str_replace(',', ".", trim($item[19]));
        $vendor = vendor_id($manufacturer);

        //наличие
        if ($not_available == '+')
            $not_available = 0;
        else
            $not_available = 1;

        if (($article == "Артикул") || ($article == "артикул") || ($article == "")) {
            $i++;
            continue;
        }

        //артикул добавит если нет штрихкода
        /*
          if ($barcode!='')
          $unique = translit($barcode);
          else
         */
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
                    'pagetitle' => $category))) {
                    $category_parent = $resource->get('id');
                } else {
                    $category_parent = create_category(2, $category);
                }
            }
        } else {
            if ($resource = $modx->getObject('modResource', array(
                'pagetitle' => $main_category))) {
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
            , 'free_shaker' => $free_shaker
            , 'free_shipping' => $free_shipping
            , 'custom' => $custom
            , 'popular' => $popular
            , 'category' => $main_category
            , 'subcategs' => $sub_category
            , 'currency_price' => $price
            , 'currency_skidka_price' => $skidka_price
            , 'currency' => $currency
            , 'vendor' => $vendor
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
        //seo_data($id_product, $description, $keywords, $seo_pagetitle);
        $i++;
        if ((time() - $time) >= $time_limit) {
            return $modx->error->success($i);
        }
    }
    //скрываем категории в которых нет товаров
    $modx->runSnippet('UnpublishNoneChildCateg');
    return $modx->error->success('ok');
}