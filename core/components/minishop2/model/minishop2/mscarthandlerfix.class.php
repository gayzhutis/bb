<?php

interface msCartInterface {

	/**
	 * Initializes cart to context
	 * Here you can load custom javascript or styles
	 *
	 * @param string $ctx Context for initialization
	 *
	 * @return boolean
	 */
	public function initialize($ctx = 'web');


	/**
	 * Adds product to cart
	 *
	 * @param integer $id Id of MODX resource. It must be an msProduct descendant
	 * @param integer $count.A number of product exemplars
	 * @param array $options Additional options of the product: color, size etc.
	 *
	 * @return array|string $response
	 */
	public function add($id, $count = 1, $options = array());


	/**
	 * Removes product from cart
	 *
	 * @param string $key The unique key of cart item
	 *
	 * @return array|string $response
	 */
	public function remove($key);


	/**
	 * Changes products count in cart
	 *
	 * @param string $key The unique key of cart item
	 * @param integer $count.A number of product exemplars
	 *
	 * @return array|string $response
	 */
	public function change($key, $count);


	/**
	 * Cleans the cart
	 *
	 * @return array|string $response
	 */
	public function clean();


	/**
	 * Returns the cart status: number of items, weight, price.
	 *
	 * @param array $data Additional data to return with status
	 *
	 * @return array $status
	 */
	public function status($data = array());


	/**
	 * Returns the cart items
	 *
	 * @return array $cart
	 */
	public function get();


	/**
	 * Set all the cart items by one array
	 *
	 * @param array $cart
	 *
	 * @return void
	 */
	public function set($cart = array());

}


class msCartHandlerFix implements msCartInterface {
	/* @var modX $modx */
	public $modx;
	/* @var array $cart */
	protected $cart;

	/* @inheritdoc} */
	function __construct(miniShop2 & $ms2, array $config = array()) {
		$this->ms2 = & $ms2;
		$this->modx = & $ms2->modx;

		$this->config = array_merge(array(
			'cart' => & $_SESSION['minishop2']['cart']
			,'max_count' => $this->modx->getOption('ms2_cart_max_count', null, 1000, true)
			,'allow_deleted' => false
			,'allow_unpublished' => false
		),$config);

		$this->cart = & $this->config['cart'];
		$this->modx->lexicon->load('minishop2:cart');

		if (empty($this->cart) || !is_array($this->cart)) {
			$this->cart = array();
		}
	}


	/* @inheritdoc} */
	public function initialize($ctx = 'web') {
		return true;
	}


	/* @inheritdoc} */
	public function add($id, $count = 1, $options = array()) {
		if (empty($id) || !is_numeric($id)) {
			return $this->error('ms2_cart_add_err_id');
		}
		$count = intval($count);

		$filter = array('id' => $id);
		if (!$this->config['allow_deleted']) {$filter['deleted'] = 0;}
		if (!$this->config['allow_unpublished']) {$filter['published'] = 1;}
		/* @var msProduct $product */
		if ($product = $this->modx->getObject('modResource', $filter)) {
			if (!($product instanceof msProduct)) {
				return $this->error('ms2_cart_add_err_product', $this->status());
			}
			if ($count > $this->config['max_count'] || $count <= 0) {
				return $this->error('ms2_cart_add_err_count', $this->status(), array('count' => $count));
			}

			/* You can prevent add of product to cart by adding some text to $modx->event->_output
			  <?php
			  		if ($modx->event->name = 'msOnBeforeAddToCart') {
			 			$modx->event->output('Error');
					}

			 * Also you can modify $count and $options variables by add values to $this->modx->event->returnedValues
				<?php
			  		if ($modx->event->name = 'msOnBeforeAddToCart') {
						$values = & $modx->event->returnedValues;
						$values['count'] = $count + 10;
						$values['options'] = array('size' => '99');
					}
			 *
			 * */

			$response = $this->ms2->invokeEvent('msOnBeforeAddToCart', array(
				'product' => $product,
				'count' => $count,
				'options' => $options,
				'cart' => $this
			));
			if (!($response['success'])) {
				return $this->error($response['message']);
			}
			$price = $product->getPrice(); // We can modify price by snippet specified in system setting "ms2_price_snippet"
			$weight = $product->getWeight(); // And weight by "ms2_weight_snippet"
			$count = $response['data']['count'];
			$options = $response['data']['options'];

			$key = md5($id.$price.$weight.($this->modx->toJSON($options)));
			if (array_key_exists($key, $this->cart)) {
				return $this->change($key, $this->cart[$key]['count'] + $count);
			}
			else {
				$this->cart[$key] = array(
					'id' => $id
					,'price' => $price
					,'weight' => $weight
					,'count' => $count
					,'options' => $options
					,'ctx' => 'shop'
				);
				$response = $this->ms2->invokeEvent('msOnAddToCart', array('key' => $key, 'cart' => $this));
				if (!$response['success']) {return $this->error($response['message']);}
				return $this->success('ms2_cart_add_success', $this->status(array('key' => $key)), array('count' => $count));
			}
		}

		return $this->error('ms2_cart_add_err_nf', $this->status());
	}


	/* @inheritdoc} */
	public function remove($key) {
		if (array_key_exists($key, $this->cart)) {
			$response = $this->ms2->invokeEvent('msOnBeforeRemoveFromCart', array('key' => $key, 'cart' => $this));
			if (!$response['success']) {return $this->error($response['message']);}
			unset($this->cart[$key]);

			$response = $this->ms2->invokeEvent('msOnRemoveFromCart', array('key' => $key, 'cart' => $this));
			if (!$response['success']) {return $this->error($response['message']);}

			return $this->success('ms2_cart_remove_success', $this->status());
		}
		else {
			return $this->error('ms2_cart_remove_error');
		}
	}


	/* @inheritdoc} */
	public function change($key, $count) {
		if (array_key_exists($key, $this->cart)) {
			if ($count <= 0) {
				return $this->remove($key);
			}
			else if ($count > $this->config['max_count']) {
				return $this->error('ms2_cart_add_err_count', $this->status(), array('count' => $count));
			}
			else {
				$response = $this->ms2->invokeEvent('msOnBeforeChangeInCart', array('key' => $key, 'count' => $count, 'cart' => $this));
				if (!$response['success']) {return $this->error($response['message']);}

				$count = $response['data']['count'];
				$this->cart[$key]['count'] = $count;
				$response = $this->ms2->invokeEvent('msOnChangeInCart', array('key' => $key, 'count' => $count, 'cart' => $this));
				if (!$response['success']) {return $this->error($response['message']);}
			}
			return $this->success('ms2_cart_change_success', $this->status(array('key' => $key)), array('count' => $count));
		}
		else {
			return $this->error('ms2_cart_change_error', $this->status(array()));
		}
	}


	/* @inheritdoc} */
	public function clean() {
		$response = $this->ms2->invokeEvent('msOnBeforeEmptyCart', array('cart' => $this));
		if (!$response['success']) {return $this->error($response['message']);}

		foreach ($this->cart as $key => $item) {			
		    unset($this->cart[$key]);
		}

		$response = $this->ms2->invokeEvent('msOnEmptyCart', array('cart' => $this));
		if (!$response['success']) {return $this->error($response['message']);}

		return $this->success('ms2_cart_clean_success', $this->status());
	}


	/* @inheritdoc} */
	public function status($data = array()) {
		$status = array(
			'total_count' => 0
			,'total_cost' => 0
			,'total_weight' => 0
		);
		foreach ($this->cart as $item) {
			if (empty($item['ctx']) || $item['ctx'] == 'shop' || $item['ctx'] == 'web'){//if (empty($item['ctx']) || $item['ctx'] == $this->modx->context->key){
				$status['total_count'] += $item['count'];
				$status['total_cost'] += $item['price'] * $item['count'];
				$status['total_weight'] += $item['weight'] * $item['count'];
			}
		}
		return array_merge($data, $status);
	}

	/* @inheritdoc} */
	public function get() {
		$cart = array();
		print_r($this->cart);
		foreach ($this->cart as $key => $item) {
			if (empty($item['ctx']) || $item['ctx'] == 'shop' || $item['ctx'] == 'web') {//if (empty($item['ctx']) || $item['ctx'] == $this->modx->context->key) {
				$cart[$key] = $item;
			}
		}
		return $cart;
	}


	/* @inheritdoc} */
	public function set($cart = array()) {
		$this->cart = $cart;
	}


	/**
	 * Shorthand for MS2 error method
	 *
	 * @param string $message
	 * @param array $data
	 * @param array $placeholders
	 *
	 * @return array|string
	 */
	public function error($message = '', $data = array(), $placeholders = array()) {
		return $this->ms2->error($message, $data, $placeholders);
	}


	/**
	 * Shorthand for MS2 success method
	 *
	 * @param string $message
	 * @param array $data
	 * @param array $placeholders
	 *
	 * @return array|string
	 */
	public function success($message = '', $data = array(), $placeholders = array()) {
		return $this->ms2->success($message, $data, $placeholders);
	}

}