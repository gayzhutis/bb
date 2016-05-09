<?php
include(dirname(__FILE__) . '/sxlsx/sxlsx.php');
ini_set('memory_limit', '256M');
function available_value ($value){
    if ($value=='0')
        $value='+';
    else $value='-';
    return $value;
}
function change_checkbox_output ($value) {
    if ($value==='1')
        $value='+';
    else $value='-';
    return $value;
}

 $sql = "
            SELECT
                prod.id,
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
                prod.free_shaker,
                prod.free_shipping,
                prod.custom,
                prod.popular,
                prod.currency_price,
                prod.currency_skidka_price,
                prod.currency,
                cont.content,
                prod.composition,
                prod.recommendations,
                cont.introtext
            FROM modx_ms2_products AS prod 
            LEFT JOIN modx_site_content AS cont 
            ON prod.id = cont.id
            WHERE  class_key = 'msProduct' 
            ORDER BY manufacturer";

            $q = $modx->prepare($sql);
            $q->execute();
            $result = $q->fetchAll(PDO::FETCH_ASSOC);

           // return $modx->error->failure(count($result));
            $productCount = count($result);
            $file = MODX_BASE_PATH . 'user_files/export/CurrentPrice.xlsx';
            
            $sxlsx = new sxlsx($file);
            $sxlsx = $sxlsx->addSheet(1, 'страница 1');
            $sxlsx->addData('a1', 'Производитель');
            $sxlsx->addData('b1', 'Наименование');
            $sxlsx->addData('c1', 'Полное название');            
            $sxlsx->addData('d1', 'Категория (основная)');
            $sxlsx->addData('e1', 'Подкатегория');
            $sxlsx->addData('f1', 'Вес позиции');
            $sxlsx->addData('g1', 'Упаковка');
            $sxlsx->addData('h1', 'Вкус');
            $sxlsx->addData('i1', 'Штрихкод');
            $sxlsx->addData('j1', 'Артикул');
            $sxlsx->addData('k1', 'Ингредиенты');
            $sxlsx->addData('l1', 'Количество порций');
            $sxlsx->addData('m1', 'Поставленная цель');
            $sxlsx->addData('n1', 'Наличие');
            $sxlsx->addData('o1', 'Шейкер в подарок');
            $sxlsx->addData('p1', 'Бесплатная доставка');
            $sxlsx->addData('q1', 'Под заказ');
            $sxlsx->addData('r1', 'Популярный');
            $sxlsx->addData('s1', 'Цена в валюте');
            $sxlsx->addData('t1', 'Цена со скидкой в валюте');
            $sxlsx->addData('u1', 'Валюта (USD,UAH)');
           // $sxlsx->addData('v1', 'Внешний код');
            $i = 2;
            foreach ($result as &$fields) {

                $fields['not_available'] = available_value($fields['not_available']);
                $fields['free_shaker'] = change_checkbox_output ($fields['free_shaker']);
                $fields['free_shipping'] = change_checkbox_output ($fields['free_shipping']);
                $fields['custom'] = change_checkbox_output ($fields['custom']);
                $fields['popular'] = change_checkbox_output ($fields['popular']);

                $sxlsx->addData('a' . $i, $fields['manufacturer']);
                $sxlsx->addData('b' . $i, $fields['pagetitle']);
                $sxlsx->addData('c' . $i, $fields['longtitle']);
                $sxlsx->addData('d' . $i, $fields['category']);
                $sxlsx->addData('e' . $i, $fields['subcategs']);
                $sxlsx->addData('f' . $i, $fields['packing']);
                $sxlsx->addData('g' . $i, $fields['packing_unit']);
                $sxlsx->addData('h' . $i, $fields['taste']);
                $sxlsx->addData('i' . $i, $fields['barcode']);
                $sxlsx->addData('j' . $i, $fields['article']);
                $sxlsx->addData('k' . $i, $fields['ingredients']);
                $sxlsx->addData('l' . $i, $fields['number_of_servings']);
                $sxlsx->addData('m' . $i, $fields['goal']);
                $sxlsx->addData('n' . $i, $fields['not_available']);
                $sxlsx->addData('o' . $i, $fields['free_shaker']);
                $sxlsx->addData('p' . $i, $fields['free_shipping']);
                $sxlsx->addData('q' . $i, $fields['custom']);
                $sxlsx->addData('r' . $i, $fields['popular']);
                $sxlsx->addData('s' . $i, $fields['currency_price']);
                $sxlsx->addData('t' . $i, $fields['currency_skidka_price']);
                $sxlsx->addData('u' . $i, $fields['currency']);
            //    $sxlsx->addData('v' . $i, $fields['id']);
                $i++;
            }
           $sxlsx->generate();
             return $modx->error->success('ok');

            
?>