<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$location = $_POST['location'];

$to = 'ike@emmanuelohanwe.com';
$subject = 'Enquiries Form';

$message = '<strong>Name : </strong>'. $name .'<br/><br/>';
$message .= '<strong>Email : </strong>'.$email.'<br/><br/>';
$message .= '<strong>Location : </strong>'.$location.'<br/><br/>';
$message .= '<strong>Phone : </strong>'.$phone.'<br/><br/>';
if($phone != ''):
    $message .= '<strong>Phone : </strong>'.$phone.'<br/><br/>';
endif;

$message .= '<br/>'.$msg.'<br/>';


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";

mail($to,$subject,$message,$headers);
require_once "Enquiries.php";
exit();