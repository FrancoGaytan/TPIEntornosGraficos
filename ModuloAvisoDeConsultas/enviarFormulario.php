<?php 
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

$to = "fedenavos@gmail.com,gaytanfranco@gmail.com";
$subject = "Mensaje de Consultas UTN";
$message = "
Llego una consulta en su sitio web con los siguientes datos: \n
Nombre: $nombre \n
Email: $email \n
Telefono: $telefono \n
Asunto: $asunto \n
Mensaje: $mensaje 
";
 
mail($to, $subject, $message);

echo 'Email enviado';
?>