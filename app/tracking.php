<?php
//header('Location: ../maps/almaty.php');
// Если кнопка запроса нажата
if( !empty($_GET['sendTracking']) ) {
    // Если значение трек номера заполнено
    if( !empty($_GET['numberTracking'])) {
        $tracking = htmlspecialchars($_GET['numberTracking']);
        $tracking = trim($tracking);
    }
}
// Настройка запроса на сервер
$url = curl_init('https://home.courierexe.ru/api/');
curl_setopt($url, CURLOPT_POST, 1);
curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);

// Генерация XML запроса на сервер
$request = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<tracking>
  <extra>290</extra>
  <orderno>$tracking</orderno>
</tracking>
XML;

// Настройка заголовков и отправка сообщения
curl_setopt($url, CURLOPT_HTTPHEADER, 
        array('Content-Type: text/xml; charset=utf-8', 
              'Content-Length: '.strlen($request)));

curl_setopt($url, CURLOPT_POSTFIELDS, $request);

// Получение ответа в виде XML
$response = curl_exec($url);

$xml = simplexml_load_string($response);
//echo '<pre>';
//var_dump($xml);
if(!empty($xml->order)) {
    $tracking = (string)$xml->order['orderno'];
    $datefrom = (string)$xml->order->sender->date;
    $townfrom = (string)$xml->order->sender->town;
    $townto = (string)$xml->order->receiver->town;
    $mass = (string)$xml->order->weight;
    $mest = (string)$xml->order->quantity;
    $status = (string)$xml->order->status;
} else {
    $msg = 'Трек номер не найден';
}



// Завершения соединения через CURL
curl_close($url);

