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
      header("Location: panelAdminAlumnos.php?alert=".urlencode("Ya existe un alumno con legajo $legajoAlumno"));
}
else {
      if ($cantAlumnosEmail ['cantidad']!=0) {
            header("Location: panelAdminAlumnos.php?alert=".urlencode("Ya existe un alumno con ese email"));
      }
      else {
            $consulta = "INSERT INTO alumnos (legajo, nombre, apellido, email) 
                  VALUES ('$legajoAlumno', '$nombreAlumno', '$apellidoAlumno', '$emailAlumno')";
            $resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
            header("Location: panelAdminAlumnos.php?msg=".urlencode("El alumno $nombreAlumno $apellidoAlumno fue agregado correctamente"));
      }
}

// Liberar conjunto de resultados
mysqli_free_result($resultado);
mysqli_close($conexion);
exit();

?>
