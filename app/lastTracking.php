<?php
 
 require_once 'pdo.php';

	$selectLastTracking = 'SELECT track FROM `dispatch_kaz` ORDER BY track DESC LIMIT 1 ';
	$tmpTracking = $pdo->query($selectLastTracking);
	$resTracking = $tmpTracking->fetch(PDO::FETCH_ASSOC);

	$lastTrack = intval($resTracking['track']);
	$_SESSION['track'] = ++$lastTrack;
	$newTrack = $_SESSION['track'];
