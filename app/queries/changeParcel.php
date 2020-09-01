<?php
 ini_set('error_reporting', E_ALL);
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
	if(!empty($_POST)) {
		require_once '../db/cs.php';
		
		$key = key($_POST);
		$value = $_POST[$key];
		
		$sql = 'UPDATE dispatch SET '.$key.' = "'.$value.'" WHERE qr_name = "'.$_GET['track'].'"';
		$pdo->query($sql);

		header('Location: ../../changeParcels.php?track='.$_GET['track']);
	}