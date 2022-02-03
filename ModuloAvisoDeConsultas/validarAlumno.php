
<?php
$email=$_POST['email'];

include_once('destroySession.php');
include_once('isSessionStarted.php');

include('db.php');

$consulta="SELECT * FROM alumnos WHERE email='$email'";
$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

$fila=mysqli_fetch_array($resultado);

if(mysqli_num_rows($resultado) > 0){
    $_SESSION['email']=$email;
    $_SESSION['legajo']=$fila['legajo'];
    $_SESSION['nombre']=$fila['nombre'];
    $_SESSION['apellido']=$fila['apellido'];
    $_SESSION['esAlumno']=true;
    $_SESSION['esDocente']=false;
    header("location: ./listadoConsultas.php");
}else{
    echo '<div class="alert alert-danger" role="alert">
    Error en la autenticación
    </div>';
    include("./loginAlumno.php");
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>
