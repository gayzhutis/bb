<?php
/**
 * @file
 * 
 * Custom order handler.
 */
 
class customOrderHandler extends msOrderHandler {
	
	/**
	 * Prepares values for filter
	 * Returns array with human-readable parents of resources
	 *
	 * @param array $values
	 *
	 * @return array Prepared values
	 */
	public function validate($key, $value) {
		if ($key != 'comment') {
			$value = preg_replace('/\s+/', ' ', trim($value));
		}

		$response = $this->ms2->invokeEvent('msOnBeforeValidateOrderValue', array(
			'key' => $key,
			'value' => $value
		));
		$value = $response['data']['value'];

		$old_value = isset($this->order[$key]) ? $this->order[$key] : '';
		switch ($key) {
			case 'email':
				$value = preg_match('/^[^@а-яА-Я]+@[^@а-яА-Я]+(?<!\.)\.[^\.а-яА-Я]{2,}$/m', $value)
					? $value
					: false;
				break;
			case 'receiver':
				// Transforms string from "nikolaj -  coster--Waldau jr." to "Nikolaj Coster-Waldau Jr."
				$tmp = preg_replace(array('/[^-a-zа-яёЁ\s\.]/iu', '/\s+/', '/\-+/', '/\.+/'), array('', ' ', '-', '.'), $value);
				$tmp = preg_split('/\s/', $tmp, -1, PREG_SPLIT_NO_EMPTY);
				$tmp = array_map(array($this, 'ucfirst'), $tmp);
				$value = preg_replace('/\s+/', ' ', implode(' ', $tmp));
				if (empty($value)) {
				    $value = false;
				}
				
				break;
			case 'phone':
				$value = substr(preg_replace('/[^-+0-9]/iu', '', $value), 0, 15);
				
				break;
			case 'delivery':
				// @var msDelivery $delivery
				if (
				    !$delivery = $this->modx->getObject(
				        'msDelivery', 
				        array('id' => $value, 'active' => 1)
				    )
				) {
					$value = $old_value;
				}
				elseif (!empty($this->order['payment'])) {
					if (!$this->hasPayment($value, $this->order['payment'])) {
						$this->order['payment'] = $delivery->getFirstPayment();
					}
				}
				
				break;
			case 'payment':
				if (!empty($this->order['delivery'])) {
					$value = $this->hasPayment($this->order['delivery'], $value) ? $value : $old_value;
				}
				
				break;
			case 'index':
			    // substr(preg_replace('/[^-0-9]/iu', '',$value),0,10);
				$value = $value;
				
				break;
		}

		$response = $this->ms2->invokeEvent('msOnValidateOrderValue', array(
			'key' => $key,
			'value' => $value
		));
		$value = $response['data']['value'];

		return $value;
	}
	
	/**
	 * Custom order submit processing.
	 */
	public function submit($data = array(), $old_cart = array()) {
		$response = $this->ms2->invokeEvent('msOnSubmitOrder', array(
			'data' => $data,
			'order' => $this
		));
		
		if (!$response['success']) {
		    return $this->error($response['message']);
		}
		if (!empty($response['data']['data'])) {
		    $this->set($response['data']['data']);
		}

		$response = $this->getDeliveryRequiresFields();
		if ($this->ms2->config['json_response']) {
			$response = $this->modx->fromJSON($response);
		}
		$requires = $response['data']['requires'];

		$errors = array();
		foreach ($requires as $v) {
			if (!empty($v) && empty($this->order[$v])) {
				$errors[] = $v;
			}
		}
		if (!empty($errors)) {
			return $this->error('ms2_order_err_requires', $errors);
		}

		$user_id = $this->ms2->getCustomerId();
		$cart_status = $this->ms2->cart->status();
		$delivery_cost = $this->getCost(false, true);
		$cart_cost = $this->getCost(true, true) - $delivery_cost;
		$createdon = date('Y-m-d H:i:s');
		// @var msOrder $order
		$order = $this->modx->newObject('msOrder');
		$order->fromArray(array(
			'user_id' => $user_id,
			'createdon' => $createdon,
			'num' => $this->getnum(),
			'delivery' => $this->order['delivery'],
			'payment' => $this->order['payment'],
			'cart_cost' => $cart_cost,
			'weight' => $cart_status['total_weight'],
			'delivery_cost' => $delivery_cost,
			'cost' => $cart_cost + $delivery_cost,
			'status' => 0,
			'context' => $this->ms2->config['ctx']
		));

		// Adding address.
		$address = $this->modx->newObject('msOrderAddress');
		$address->fromArray(array_merge($this->order, array(
			'user_id' => $user_id,
			'createdon' => $createdon
		)));
		$order->addOne($address);

		// Adding products.
		$cart = $this->ms2->cart->get();
		$products = array();
		
		$set_slaves = array();
		// Дописываем проверку и изменение товаров(удаление комплекта и добавление его составляющих) в заказе для комплектов.
		foreach ($cart as $z => $v) {
            $o_cart_prod = $this->modx->getObject('modResource', $v['id']); // Получаем объект ресурса товара в заказе.
            // print_r($o_cart_prod);
            $s_cart_prod_parent = $o_cart_prod->get('parent'); // Получаем родителя товара в заказе.
            if($s_cart_prod_parent == 9400) {
                $s_cart_prod_pagetitle = $o_cart_prod->get('pagetitle'); // Получаем название комплекта в заказе.
                $j_tv = $o_cart_prod->getTVValue('products_in_set_migx'); // Получаем значение твшки с ценами товаров в комплекте.
                if(!empty($j_tv)) {
                    $a_tv_prods = json_decode($j_tv, true);
                }
                
                // Перебираем товары в комплекте из твшки.
                foreach ($a_tv_prods as $product) {
                    // Формируем массив товаров из комплекта для заказа.
                    $set_slaves[$v['id'] . $product['prod_id'] . $product['MIGX_id']] = array(
                        'id' => $product['prod_id'],
                        'price' => (!empty($product['price_in_set'])) ? $product['price_in_set'] : $product['price'], // Проверяем указана ли специальная цена для товара.
                        'weight' => 0,
                        'count' => $v['count'],
                        'options' => array(
                            'set_mgr' => '<a href="http://' . str_replace('shop.', '', $_SERVER['HTTP_HOST']) . '/manager/?a=resource/update&id=' . $v['id'] . '" title="Открыть комплект «' . $s_cart_prod_pagetitle . '»">' . $s_cart_prod_pagetitle . '</a>',
                            'set_web' => $s_cart_prod_pagetitle,
                            'set_id' => $v['id']
                        ),
                        'ctx' => 'shop'
                    );
                }
                // Удаляем сам комплект из заказа.
                unset($cart[$z]);
            }
		}
		// Объединяем товары в заказе с товарами из комплектов (сами комплекты уже удалены).
		$cart = array_merge($cart, $set_slaves); 
		
		foreach ($cart as $v) {
		    $name = '';
			if ($tmp = $this->modx->getObject('msProduct', $v['id'])) {
				$name = $tmp->get('pagetitle');
			}
			
			// @var msOrderProduct $product
			$product = $this->modx->newObject('msOrderProduct');
			$product->fromArray(array_merge($v, array(
				'product_id' => $v['id'],
				'name' => $name,
				'cost' => $v['price'] * $v['count']
			)));
			$products[] = $product;
		}
		
		$order->addMany($products);

		$response = $this->ms2->invokeEvent('msOnBeforeCreateOrder', array(
			'msOrder' => $order,
			'order' => $this
		));
		if (!$response['success']) {
		    return $this->error($response['message']);
		}

		if ($order->save()) {
			$response = $this->ms2->invokeEvent('msOnCreateOrder', array(
				'msOrder' => $order,
				'order' => $this
			));
			if (!$response['success']) {
			    return $this->error($response['message']);
			}

			$this->ms2->cart->clean();
			$this->clean();
			
			// Restore old cart if exist.
			if (!empty($old_cart)) {
			    $this->ms2->cart->set($old_cart);
			}
			
			if (empty($_SESSION['minishop2']['orders'])) {
				$_SESSION['minishop2']['orders'] = array();
			}
			$_SESSION['minishop2']['orders'][] = $order->get('id');

			// Trying to set status "new".
			$response = $this->ms2->changeOrderStatus($order->get('id'), 1);
			
			if ($response !== true) {
				return $this->error($response, array('msorder' => $order->get('id')));
			}
			elseif ($payment = $this->modx->getObject('msPayment', array('id' => $order->get('payment'), 'active' => 1))) {
				$response = $payment->send($order);
				if ($this->config['json_response']) {
					@session_write_close();
					exit(is_array($response) ? $this->modx->toJSON($response) : $response);
				}
				else {
					if (!empty($response['data']['redirect'])) {
						$this->modx->sendRedirect($response['data']['redirect']);
					}
					elseif (!empty($response['data']['msorder'])) {
						$this->modx->sendRedirect($this->modx->makeUrl(3353, 'shop', array(
						    'msorder' => $response['data']['msorder']), 
						    'full'
						));
					}
					else {
						$this->modx->sendRedirect($this->modx->context->makeUrl(3353, 'shop', '', 'full'));
					}
					exit;
				}
			}
			else {
				if ($this->ms2->config['json_response']) {
					return $this->success('', array('msorder' => $order->get('id')));
				}
				else {
					$this->modx->sendRedirect($this->modx->context->makeUrl($this->modx->resource->id, array(
					    'msorder' => $response['data']['msorder']
					)));
				}
				exit;
			}
		}
		
		return $this->error();
	}
    
}