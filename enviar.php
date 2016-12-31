<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$empresa = $_POST['mensaje'];

$header = 'From: ' . $mail . "\r\n";
$header = "X-Mailer: PHP/" . phpversion() . "\r\n";
$header = "Mime-Version: 1.0 \r\n";
$header = "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n"; 
$mensaje = "Su email es: " . $mail . ",\r\n"; 
$mensaje = "Asunto " . $asunto . ",\r\n"; 
$mensaje = "Telefono: " . $telefono . ",\r\n"; 
$mensaje = "Mensaje: " . $_POST['mensaje'] . ",\r\n"; 
$mensaje = "Enviando el " . date('d/m/Y', time());

$para = 'luiginspiron@gmail.com'; 
$asunto = 'Mensaje de mi sitio web'; 

if (mail($para, $asunto, utf8_decode($mensaje), $header)) 
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='file:///media/luigi/320A6C7F0A6C41C9/New%20Sweet/index.html#';</script>";

?>




