<?php
$nombreDocente=$_POST['nombreDocente'];
$apellidoDocente=$_POST['apellidoDocente'];
$legajoDocente=$_POST['legajoDocente'];
$emailDocente=$_POST['emailDocente'];
$contraseñaDocente=$_POST['contraseñaDocente'];

//session_destroy();

include('db.php');

$consulta="INSERT INTO profesores (legajo, nombre, apellido, email, contrasenia) VALUES ('$legajoDocente', '$nombreDocente', '$apellidoDocente', '$emailDocente', '$contraseñaDocente')";
$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

//aca falta hacer el if por si la conexion falla o no se registra correctamente

//if(mysqli_num_rows($resultado) > 0){
    
header("location:../regConsulta.php");

     session_start();
     $_SESSION['email']=$emailDocente;
     $_SESSION['legajo']=$legajoDocente;
     $_SESSION['nombre']=$nombreDocente;
     $_SESSION['apellido']=$apellidoDocente;
     $_SESSION['esDocente']=true;
      //$_SESSION['esAlumno']=false; Agrego esto?


//     header("location:../regConsulta.php");
// }else{
//     echo '<div class="alert alert-danger" role="alert">
//     Error en la autenticación
//     </div>';
//     include("loginDocente.php");
// }

// mysqli_free_result($resultado);
mysqli_close($conexion);

?>