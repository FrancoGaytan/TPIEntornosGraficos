<?php
$email=$_POST['email'];
$contraseña=$_POST['contrasenia'];

include_once($_SERVER["DOCUMENT_ROOT"] .'destroySession.php');
include_once($_SERVER["DOCUMENT_ROOT"] .'isSessionStarted.php');

include($_SERVER["DOCUMENT_ROOT"] .'db.php');

$consulta="SELECT * FROM profesores WHERE email='$email' and contrasenia='$contraseña'";
$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

$fila=mysqli_fetch_array($resultado);

if(mysqli_num_rows($resultado) > 0){
    $_SESSION['email']=$email;
    $_SESSION['legajo']=$fila['legajo'];
    $_SESSION['nombre']=$fila['nombre'];
    $_SESSION['apellido']=$fila['apellido'];
    $_SESSION['esDocente']=true;
    $_SESSION['esAlumno']=false;
    header("location:./regConsulta.php");
}else{
    echo '<div class="alert alert-danger" role="alert">
    Error en la autenticación
    </div>';
    include($_SERVER["DOCUMENT_ROOT"] ."loginDocente.php");
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>
