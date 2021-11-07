<?php
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['email']=$email;

include('db.php');

$consulta="SELECT * FROM profesores WHERE email='$email' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado==0);

if($filas){
    header("location: listadoConsultas.php");
}else{
    ?>
    <?php
    include("loginDocente.php");
    ?>
    <h1 class="bad">Error en la autenticacion</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);