<?php

session_start();

// Если кнопка запроса нажата
if( !empty($_POST['sendZakaz']) ) {

        // From data inputs
        $fromFIO = htmlspecialchars($_POST['fromFIO']);
        $fromFIO = trim($fromFIO);
	
	    $pack = htmlspecialchars($_POST['pack']);
        $pack = trim($pack);
	
	    $photo = htmlspecialchars($_POST['photo']);
        $photo = trim($photo);

        $fromPhone = htmlspecialchars($_POST['fromPhone']);
        $fromPhone = trim($fromPhone);

        $fromQID = htmlspecialchars($_POST['fromQID']);
        $fromQID = trim($fromQID);
	
	    //$obl = htmlspecialchars($_POST['obl']);
        //$obl = trim($obl);


        $toFIO = htmlspecialchars($_POST['toFIO']);
        $toFIO = trim($toFIO);

        $toCity = htmlspecialchars($_POST['toCity']);
        $toCity = trim($toCity);

        $toAdres = htmlspecialchars($_POST['toAdres']);
        $toAdres = trim($toAdres);

        $toPhone = htmlspecialchars($_POST['toPhone']);
        $toPhone = trim($toPhone);
	
	    $prim = htmlspecialchars($_POST['prim']);
        $prim = trim($prim);


        $toMass = htmlspecialchars($_POST['toMass']);
        $toMass = trim($toMass);

        $toPrice = htmlspecialchars($_POST['toPrice']);
        $toPrice = trim($toPrice);

        $toToItems = htmlspecialchars($_POST['toToItems']);
        $toToItems = trim($toToItems);
}

// Настройка запроса на сервер
$url = curl_init('https://home.courierexe.ru/api/');
curl_setopt($url, CURLOPT_POST, 1);
curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);

// Генерация XML запроса на сервер

$request = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<neworder newfolder="YES">
 <auth extra="290" login="wechat" pass="we123chat"></auth>
 <order orderno="0">
   <barcode></barcode>
   <sender>
     <company></company>
     <person>$fromFIO</person>
     <phone>$fromPhone</phone>
     <town></town>
     <address></address>
     <date></date>
     <time_min></time_min>
     <time_max></time_max>
   </sender>
   <receiver>
     <company></company>
     <person>$toFIO</person>
     <phone>$toPhone</phone>
     <zipcode></zipcode>
     <town regioncode="" country="">$toCity</town>
     <address>$toAdres</address>
     <pvz></pvz>
     <inn></inn>
     <date></date>
     <time_min></time_min>
     <time_max></time_max>
     <coords lat="" lon=""></coords>
   </receiver>
   <return>NO</return>
   <weight>$toMass</weight>
   <return_weight></return_weight>
   <quantity></quantity>
   <paytype>CASH</paytype>
   <service>2</service>
   <return_service>1</return_service>
   <type>3</type>
   <return_type>3</return_type>
   <courier></courier>
   <price></price>
   <deliveryprice></deliveryprice>
   <inshprice>$toPrice</inshprice>
   <receiverpays>NO</receiverpays>
   <enclosure>$toToItems</enclosure>
   <instruction>Barcode: $fromQID | OBL: $obl | FIO: $fromFIO | Phone: $fromPhone | Prim: $prim | Pack: $pack | Photo: $photo</instruction>
   <department>Отдел</department>
   <pickup>NO</pickup>
   <acceptpartially>NO</acceptpartially>
   <costcode></costcode>

 </order>
</neworder>
XML;


// Настройка заголовков и отправка сообщения
curl_setopt($url, CURLOPT_HTTPHEADER, 
        array('Content-Type: text/xml; charset=utf-8', 
              'Content-Length: '.strlen($request)));

curl_setopt($url, CURLOPT_POSTFIELDS, $request);

// Получение ответа в виде XML
$response = curl_exec($url);

$xml = simplexml_load_string($response);

		// From data inputs
        $_SESSION['fromFIO'] = $fromFIO;
        $_SESSION['pack'] = $pack;
        $_SESSION['photo'] = $photo;
        $_SESSION['fromPhone'] = $fromPhone;
        $_SESSION['fromQID'] = $fromQID;
        $_SESSION['toFIO'] = $toFIO;
        $_SESSION['toCity'] = $toCity;
        $_SESSION['toAdres'] = $toAdres;
        $_SESSION['toPhone'] = $toPhone;
        $_SESSION['prim'] = $prim;
        $_SESSION['mass'] = $toMass;
        $_SESSION['price'] = $toPrice;
        $_SESSION['items'] = $toToItems;


header('Location: ../success.php');
// Завершения соединения через CURL
curl_close($url);

