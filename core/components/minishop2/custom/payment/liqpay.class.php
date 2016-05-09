<?php

if (!class_exists('msPaymentInterface')) {
	require_once dirname(dirname(dirname(__FILE__))) . '/model/minishop2/mspaymenthandler.class.php';
}

class LiqPay extends msPaymentHandler implements msPaymentInterface {
	public $config;
	public $modx;

	function __construct(xPDOObject $object, $config = array()) {
		$this->modx = & $object->xpdo;
		$siteUrl = $this->modx->getOption('site_url');
		$assetsUrl = $this->modx->getOption('minishop2.assets_url', $config, $this->modx->getOption('assets_url').'components/minishop2/');
		$paymentUrl = $siteUrl . substr($assetsUrl, 1) . 'payment/liqpay.php';
		$this->config = array_merge(array(
			'paymentUrl' => $paymentUrl
			,'checkoutUrl' => $this->modx->getOption('ms2_payment_liqpay_url', null, 'https://www.liqpay.com/api/pay', true)
			,'public_key' => $this->modx->getOption('ms2_payment_liqpay_public_key')
			,'private_key' => $this->modx->getOption('ms2_payment_liqpay_private_key')
			,'currency' => $this->modx->getOption('ms2_payment_liqpay_currency', 'USD', true)
			,'culture' => $this->modx->getOption('ms2_payment_liqpay_culture', 'ru', true)
			,'sandbox' => $this->modx->getOption('ms2_payment_liqpay_sandbox')
		), $config);
	}

	/* @inheritdoc} */
	public function send(msOrder $order) {
		$link = $this->getPaymentLink($order);
		return $this->success('', array('redirect' => $link));
	}

	public function getPaymentLink(msOrder $order) {
		$id = $order->get('id');
		$successUrl = $this->config['paymentUrl']."?action=success&order_id=".$id;
		$sum = number_format($order->get('cost'), 2, '.', '');
        $description='Payment #'.$id;
        $signature = base64_encode(sha1($this->config['private_key'].$sum.$this->config['currency'].$this->config['public_key'].$id.'buy'.$description.$successUrl.$this->config['paymentUrl'],1));
		$request = array(
			'url' => $this->config['checkoutUrl']
			,'public_key' => $this->config['public_key']
			,'amount' => $sum
			,'order_id' => $id
			,'type' => 'buy'
			,'language' => $this->config['culture']
			,'sandbox' => $this->config['sandbox']
			,'signature' => $signature
			,'description' => $description
			,'result_url'=> $successUrl
			,'server_url' => $this->config['paymentUrl']
			,'currency' => $this->config['currency']
		);
		$link = $this->config['checkoutUrl'] .'?'. http_build_query($request);
		return $link;
	}

	/* @inheritdoc} */
	public function receive(msOrder $order, $params = array()) {
		$id = $order->get('id');
		$success =
            isset($_POST['amount']) &&
            isset($_POST['currency']) &&
            isset($_POST['public_key']) &&
            isset($_POST['description']) &&
            isset($_POST['order_id']) &&
            isset($_POST['type']) &&
            isset($_POST['status']) &&
            isset($_POST['transaction_id']) &&
            isset($_POST['sender_phone']);
        if (!$success) { die(); }
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $public_key = $_POST['public_key'];
        $description = $_POST['description'];
        $order_id = $_POST['order_id'];
        $type = $_POST['type'];
        $status = $_POST['status'];
        $transaction_id = $_POST['transaction_id'];
        $sender_phone = $_POST['sender_phone'];
        $insig = $_POST['signature'];
        if ($order_id!=$id) { die(); }
        $private_key = $this->config['private_key'];
        $gensig = base64_encode(sha1(join('',compact(
            'private_key',
            'amount',
            'currency',
            'public_key',
            'order_id',
            'type',
            'description',
            'status',
            'transaction_id',
            'sender_phone'
        )),1));
        if ($insig != $gensig) { die(); }
        if ($status == 'sandbox' || $status == 'success') {
        	/* @var miniShop2 $miniShop2 */
			$miniShop2 = $this->modx->getService('miniShop2');
			@$this->modx->context->key = 'mgr';
			$miniShop2->changeOrderStatus($order->get('id'), 2);
			//костыль обновление статуса заказ
			$sql = "UPDATE  `modx_ms2_orders` SET  `status` =  '2' WHERE  `modx_ms2_orders`.`id` = $id";
            $q = $this->modx->prepare($sql);
            $q->execute();
			exit('OK');
        } elseif ($status == 'failure') {
            $this->paymentError('Err: wrong signature.', $params);
        }
	}

	public function paymentError($text, $request = array()) {
		$this->modx->log(modX::LOG_LEVEL_ERROR,'[miniShop2:LiqPay] ' . $text . ', request: '.print_r($request,1));
		header("HTTP/1.0 400 Bad Request");

		die('ERR: ' . $text);
	}
}
