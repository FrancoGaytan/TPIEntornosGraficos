<?php
$email=$_POST['email'];
session_start();

include('db.php');

$consulta="SELECT * FROM alumnos WHERE email='$email'";
$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

$fila=mysqli_fetch_array($resultado);

if(mysqli_num_rows($resultado) > 0){
    $_SESSION['email']=$email;
    $_SESSION['esAlumno']=true;
    header("location: listadoConsultas.php");
}else{
    echo '<div class="alert alert-danger" role="alert">
    Error en la autenticación
    </div>';
    include("loginAlumno.php");
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>
