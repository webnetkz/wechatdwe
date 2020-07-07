<?php
	/*
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	*/
	$date = date('d.m.Y');	 
	$status = 'Новая';
	$fromCity = 'Yiwu';
	$fromCountry = 'Китай';
	

	if($_GET['val'] == 'Россия') {
		$toCountry = 'Россия';
	} else {
		$toCountry = 'Казахстан';
	}


// Если кнопка запроса нажата
if( !empty($_POST['sendZakaz']) ) {

        // From data inputs
		$pack = htmlspecialchars($_POST['pack']);
        $pack = trim($pack);
	
	    $photo = htmlspecialchars($_POST['photo']);
        $photo = trim($photo);
	
	 	$kuaidi = htmlspecialchars($_POST['fromQID']);
        $kuaidi = trim($kuaidi);
	
        $fromContacts = htmlspecialchars($_POST['fromFIO']);
        $fromContacts = trim($fromContacts);
	
        $fromPhone = htmlspecialchars($_POST['fromPhone']);
        $fromPhone = trim($fromPhone);
	
        $toContacts = htmlspecialchars($_POST['toFIO']);
        $toContacts = trim($toContacts);

        $toCity = htmlspecialchars($_POST['toCity']);
        $toCity = trim($toCity);

        $toAdres = htmlspecialchars($_POST['toAdres']);
        $toAdres = trim($toAdres);

        $toPhone = htmlspecialchars($_POST['toPhone']);
        $toPhone = trim($toPhone);
	
	    $prim = htmlspecialchars($_POST['prim']);
        $prim = trim($prim);

        $mass = htmlspecialchars($_POST['toMass']);
        $mass = trim($mass);

        $price = htmlspecialchars($_POST['toPrice']);
        $price = trim($price);

        $description = htmlspecialchars($_POST['toToItems']);
        $description = trim($description);
	
	    $obl = htmlspecialchars($_POST['obl']);
        $obl = trim($obl);
}


header('Location: https://biu.kz/app/wechat/order.php?fromDate='.$date.'&fromCountrie=Китай&fromCity=Китай&fromContacts='.$fromContacts.'&fromPhone='.$fromPhone.'&toCountrie='.$toCountry.'&toCity='.$toCity.'&toAdres='.$toAdres.'&toContacts='.$toContacts.'&toPhone='.$toPhone.'&prim='.$prim.'&description='.$description.'&price='.$price.'&pack='.$pack.'&photo='.$photo.'&kuaidi='.$kuaidi.'&status='.$status.'&mass='.$mass.'&obl='.$obl.'');
