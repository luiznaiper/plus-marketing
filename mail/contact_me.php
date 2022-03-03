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
   
// Email
$to = 'luiz_naiper@hotmail.com';
$email_subject = "Contacto de la pag web:  $name";
$email_body = "Ha recibido un mensaje.\n\n"."Estos son los detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nTel: $phone\n\nMensaje:\n$message";
$headers = "From: noresponder@plusmarketing.com.mx\n"; 
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>