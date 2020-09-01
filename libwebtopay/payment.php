<?php

	$orderid = trim($_GET['orderid']);
	$mass = trim($_GET['mass']);
	$country = trim($_GET['country']);
	$code = trim($_GET['code']);
	$pack = trim($_GET['pack']);
	$photo = trim($_GET['photo']);

	// Просчет стоимости относительно массы
	$mass = ceil($mass);

	// Тариф KZ
	if($country == 'Казахстан') {
		if($mass <= 5) {
			$totalPrice = ($mass * 7.31) + 3.71;
		} else {
			$price = ($mass * 7.31) + 3.71;
			$mass = $mass - 5;
			$lastMprice = $mass * 0.71;
			$totalPrice = $price + $lastMprice;
		}
	}

	// Тариф RU
	if($country == 'Россия') {
		if($mass <= 5) {
			$totalPrice = ($mass * 7.31) + 2.81;
		} else {
			$price = ($mass * 7.31) + 2.81;
			$mass = $mass - 5;
			$lastMprice = $mass * 0.71;
			$totalPrice = $price + $lastMprice;
		}
	}

	// Плата за упаковку
	switch ($pack) {
		case 1:
			$totalPrice = $totalPrice + 1;
			break;
		case 2:
			$totalPrice = $totalPrice + 2.21;
			break;
		case 3:
			$totalPrice = $totalPrice + 4.31;
			break;
		case 4:
			$totalPrice = $totalPrice + 10;
			break;
	}

	// Плата за фото отчет
	if($photo == 'Фото') {
		$totalPrice = $totalPrice + 1.43;
	}

	// Убераем точку
	$totalPrice = str_replace('.', '', $totalPrice);
	// Умнажаем на 10 чтоб получить сумму в центах
	//$totalPrice = $totalPrice * 10;

	echo '<script>location.href = "redirect.php?totalPrice='.$totalPrice.'&orderid='.$orderid.'&code='.$code.'"</script>';
	