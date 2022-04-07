<?php
 
//librerias
use PHPMailer\PHPMailer\PHPMailer;

require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];
 
//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->IsSMTP();
 
//Configuracion servidor mail
$mail->From = "consultas.utn.entornos@gmail.com"; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username ='consultas.utn.entornos@gmail.com'; //nombre usuario
$mail->Password = 'consultas123'; //contraseña
 
//Agregar destinatario
$mail->AddAddress("fedenavos@gmail.com");
$mail->AddAddress("gaytanfranco@gmail.com");
$mail->Subject = "Mensaje en Consultas UTN";
$mensaje = "
Llego una consulta en su sitio web con los siguientes datos: \n
Nombre: $nombre \n
Email: $email \n
Telefono: $telefono \n
Asunto: $asunto \n
Mensaje: $mensaje 
";
$mail->Body = $mensaje;
 
//Avisar si fue enviado o no y dirigir al index
if ($mail->Send()) {
    echo'<script type="text/javascript">
           alert("Enviado Correctamente");
        </script>';
} else {
    echo'<script type="text/javascript">
           alert("NO ENVIADO, intentar de nuevo");
        </script>';
}
