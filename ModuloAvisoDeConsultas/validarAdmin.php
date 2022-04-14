<?php
include_once('isSessionStarted.php');
$email=$_POST['email'];
$contraseña=$_POST['contrasenia'];

//include_once('destroySession.php');
$_SESSION = array();

include('db.php');

$consulta="SELECT * FROM administradores WHERE email='$email' and contrasenia='$contraseña'";
$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

$fila=mysqli_fetch_array($resultado);


if(mysqli_num_rows($resultado) > 0){
    $_SESSION['email']=$email;
    $_SESSION['legajo']=$fila['legajo'];
    $_SESSION['nombre']=$fila['nombre'];
    $_SESSION['apellido']=$fila['apellido'];
    $_SESSION['esDocente']=true;
    $_SESSION['esAlumno']=true;
    $_SESSION['esAdmin']=true;
    
    header("location:./panelAdmin.php");
    exit();
}else{
    echo '<div class="alert alert-danger" role="alert">
    Error en la autenticación
    </div>';
    include("loginDocente.php");
}

mysqli_free_result($resultado);
mysqli_close($conexion);
exit()

?>
