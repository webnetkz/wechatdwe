<?php
 
require_once('WebToPay.php');
 
try {
        $response = WebToPay::checkResponse($_GET, array(
            'projectid'     => 181100,
            'sign_password' => '2a5dc916ec4f8e1043dffa00c2069325',
        ));
 
        if ($response['test'] !== '0') {
            throw new Exception('Testing, real payment was not made');
        }
        if ($response['type'] !== 'macro') {
            throw new Exception('Only macro payment callbacks are accepted');
        }
 
        $orderId = $response['orderid'];
        $amount = $response['amount'];
        $currency = $response['currency'];
        //@todo: проверьте, подтвержден ли заказ из $orderId (обратный вызов может повторяться несколько раз)
        //@todo: проверьте, что сумма и валюта заказа соответствуют $сумме и $валюте
        //@todo: подтвердите заказ
 
    Проверьте, что сумма и валюта заказа соответствуют сумме в $ и валюте $.
    Подтвердите заказ.
 
        echo 'OK';
} catch (Exception $e) {
        echo get_class($e) . ': ' . $e->getMessage();
}