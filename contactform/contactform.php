<?php
// Campos vacíos
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   


// Email contacto@plusmarketing.mx
$to = 'luiz_naiper@hotmail.com';
$email_subject = "Contacto de plus marketing:  $name";
$email_body = "Ha recibido un mensaje.\n\n"."Estos son los detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nTel: $phone\n\nMensaje:\n$message";
$headers = "From: noresponder@plusmarketing.com.mx\n"; 
$headers .= "Reply-To: $email_address";  
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
// $headers .= "Reply-To: The Sender $email_address \r\n"; 
// $headers .= "Return-Path: The Sender $email_address\r\n"; 
// $headers .= "From: $email_address" ."\r\n" .
// $headers .= "Organization: Sender Organization\r\n";
// $headers .= "MIME-Version: 1.0\r\n";
// $headers .= "Content-type: text/html; charset=utf-8\r\n";
// $headers .= "X-Priority: 3\r\n";
// $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
mail($to,$email_subject,$email_body,$headers);
return true;         
?>