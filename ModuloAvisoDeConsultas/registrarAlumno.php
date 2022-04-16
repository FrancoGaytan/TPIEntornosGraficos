<?php
$nombreAlumno=$_POST['nombreAlumno'];
$apellidoAlumno=$_POST['apellidoAlumno'];
$legajoAlumno=(int) $_POST['legajoAlumno'];
$emailAlumno=$_POST['emailAlumno'];

include('db.php');

// Busco por legajo
$consulta = "SELECT Count(legajo) as cantidad FROM alumnos WHERE legajo='$legajoAlumno'";
$resultado = mysqli_query($conexion, $consulta) or die (mysqli_error($conexion));
$cantAlumnosLegajo = mysqli_fetch_assoc($resultado);

// Busco por email
$consulta = "SELECT Count(legajo) as cantidad FROM alumnos WHERE email='$emailAlumno'";
$resultado = mysqli_query($conexion, $consulta) or die (mysqli_error($conexion));
$cantAlumnosEmail = mysqli_fetch_assoc($resultado);

if ($cantAlumnosLegajo ['cantidad']!=0){
      echo '<div class="alert alert-danger" role="alert">
      Ya existe un alumno con ese legajo
      </div>';
      include('./regAlumno.php');
}
else {
      if ($cantAlumnosEmail ['cantidad']!=0) {
            echo '<div class="alert alert-danger" role="alert">
            Ya existe un alumno con ese email
            </div>';
            include('./regAlumno.php');
      }
      else {
            $consulta = "INSERT INTO alumnos (legajo, nombre, apellido, email) 
                  VALUES ('$legajoAlumno', '$nombreAlumno', '$apellidoAlumno', '$emailAlumno')";
            $resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
            echo "<div class='alert alert-success' role='alert'>
            El Alumno $nombreAlumno $apellidoAlumno fue agregado correctamente
            </div>";
            include("./panelAdminAlumnos.php");
      }
}

// Liberar conjunto de resultados
mysqli_free_result($resultado);
mysqli_close($conexion);

?>
