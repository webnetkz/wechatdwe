<?php

	session_start();
	require_once '../app/db/cs.php';

	$sql = "UPDATE `dispatch` SET `dispatch`.`payment`=1 WHERE `dispatch`.`qr_name`= '".$_GET['code']."'";
	$pdo->query($sql);

	$sql = "UPDATE `dispatch` SET `dispatch`.`status`='Отправление готово к отправке' WHERE `dispatch`.`qr_name`= '".$_GET['code']."'";
	$pdo->query($sql);

	header('Location: ../statusParcels.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
</head>
<body>
        Спсибо за оплату посылки
</body>
</html>