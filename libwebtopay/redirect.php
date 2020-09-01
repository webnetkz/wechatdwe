<?php

	require_once('WebToPay.php');

	$orderid = trim($_GET['orderid']);
	$totalPrice = trim($_GET['totalPrice']);
	$code = trim($_GET['code']);

	function get_self_url() {
		$s = substr(strtolower($_SERVER['SERVER_PROTOCOL']), 0,
				strpos($_SERVER['SERVER_PROTOCOL'], '/'));

		if (!empty($_SERVER["HTTPS"])) {
		$s .= ($_SERVER["HTTPS"] == "on") ? "s" : "";
		}

		$s .= '://'.$_SERVER['HTTP_HOST'];

		if (!empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != '80') {
		$s .= ':'.$_SERVER['SERVER_PORT'];
		}

		$s .= dirname($_SERVER['SCRIPT_NAME']);

		return $s;
	}

	try {
		$self_url = get_self_url();

		$request = WebToPay::redirectToPayment(array(
		'projectid'     => 181100,
		'sign_password' => '2a5dc916ec4f8e1043dffa00c2069325',
		'orderid'       => $orderid,
		'amount'        => $totalPrice,
		'currency'      => 'USD',
		'country'       => '',
		'accepturl'     => $self_url.'/accept.php?code='.$code,
		'cancelurl'     => $self_url.'/cancel.php',
		'callbackurl'   => $self_url.'/callback.php',
		'test'          => 1,
		'p_email'		=> 'dbqqbq@gmail.com',

		));
	} catch (WebToPayException $e) {
		// handle exception
	} 