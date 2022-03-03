<?php
// Campos vacíos
if(empty($_POST['analisis'])
   !filter_var($_POST['analisis'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['analisis']));
   
// Email
$to = 'luiz_naiper@hotmail.com';
$email_subject = "Contacto del analisis:  $name";
$email_body = "Ha recibido un mensaje.\n\n"."Estos son los detalles:\n\nNombre: $name";
$headers = "From: noresponder@plusmarketing.com.mx\n"; 
$headers .= "Reply-To: $email_address";   
mail($to,$name,$headers);
return true;         
?>