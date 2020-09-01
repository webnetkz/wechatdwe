<?php

$to      = 'dbqqbq@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: info@webnetads.kz' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$res = mail($to, $subject, $message, $headers);

if($res) {
	echo 'good';
}
