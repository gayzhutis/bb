<?php

ini_set('display_errors', 1);
ini_set("error_reporting", E_ALL);

function my_round($arg, $base){
    //arg - округляемое число, $base - "округлитель"
    $ost = $arg%$base; //вычисляем остаток от деления
    $chast = floor($arg/$base); //находим количество целых округлителей в аргументе
    if($ost >= $base/2)    $rez = ($chast+1) * $base; //выбираем направление округления
    else $rez = $chast * $base;
    return $rez;
}

$miniShop2 = $modx->getService('minishop2', 'miniShop2', $modx->getOption('minishop2.core_path', null, $modx->getOption('core_path') . 'components/minishop2/') . 'model/minishop2/');
set_time_limit(30);
if (!($miniShop2 instanceof miniShop2))
    return '';

$res = $modx->getObject('modResource', array('id' => '3'));
$evr = $res->getTVValue(8);
$dol = $res->getTVValue(7);
 
//////////////////////////////////

$offset = intval($scriptProperties['offset']);
//текущее время
$time = time();

//лимит на выполнение
$time_limit = ini_get('max_execution_time') - 5;
// return $modx->error->success($time_limit);
$sql = "SELECT id FROM
modx_ms2_products ORDER BY id";
$q = $modx->prepare($sql);
$q->execute();
$resources = $q->fetchAll(PDO::FETCH_COLUMN);
$length = count($resources);

 
//////////////////////////////////
//  return $modx->error->failure($length);
for ($i = $offset; $i < $length; $i++) {  
   
    if ($resource = $modx->getObject('msProduct', $resources[$i])) {
        
        if ($offset > 0 && $i < $offset) {
            $i++;
            continue;
        }
        $val = $resource->get('currency_price');
        $cur = $resource->get('currency');
        $skidka_val = $resource->get('currency_skidka_price');
        
        if(empty($val) && empty($skidka_val)) {//пропускаем, если не указана цена в валюте или в валюте со скидкой (а указана сразу конечная цена)
            $i++;
            continue;
        }
       
        if ($cur == 'USD') {
            $price = $val * $dol;
        }
        if ($cur == 'EUR') {
            $price = $val * $evr;
        }
        if ($cur == 'UAH') {
            $price = $val;
        }
        //current_price
       //  return $modx->error->failure($price);

        $resource->set('price',  round($price, 0));


        //skidka
        
        if ($skidka_val > 0) {
            if ($cur == 'USD') {
                $skidka_price = $skidka_val * $dol;
            }
            if ($cur == 'EUR') {
                $skidka_price = $skidka_val * $evr;
            }
            if ($cur == 'UAH') {
                $skidka_price = $skidka_val;
            }

            $resource->set('old_price',round($price, 0));
            $resource->set('price', round($skidka_price, 0));
        }
         if ($skidka_val == 0) {
            $resource->set('old_price', 0);
        }
        if (!$resource->save()){
        return $modx->error->failure("ошибка сохранения ресурса -  ".$resources[$i]);
        }

        if ((time() - $time) >= $time_limit) {
            return $modx->error->success($i);
        }
    }
    else  return $modx->error->failure("не найден ресурс с айди -  ".$resources[$i]);
}
//return $modx->error->failure('ok');
$modx->cacheManager->refresh();
return $modx->error->success('ok');
