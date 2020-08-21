<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
// $sub = $_POST['subject'];
$subject = $_POST['subject'];
$msg = $_POST['message'];

$to = 'hello@emmanuelohanwe.com';
$subject = 'Enquiries Form';

$message = '<strong>Name : </strong>'. $name .'<br/><br/>';
$message .= '<strong>Email : </strong>'.$email.'<br/><br/>';
$message .= '<strong>Subject : </strong>'.$subject.'<br/><br/>';
$message .= '<strong>Address : </strong>'.$address.'<br/><br/>';
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