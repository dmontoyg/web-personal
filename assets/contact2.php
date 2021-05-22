<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" De: $name \n Email: $email \n Mensaje: $message";
$recipient = "dmontoyg@gmail.com";
$subject = "Contacto desde el formulario de: www.diegomontoya.co";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Gracias por contactarnos!";
?>
