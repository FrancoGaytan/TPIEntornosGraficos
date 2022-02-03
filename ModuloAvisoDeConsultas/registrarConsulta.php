<?php
$idMateria=$_POST['idMateria'];
$fechaConsulta=$_POST['fechaConsulta'];
$horaConsulta=$_POST['horaConsulta'];
$cupoConsulta=$_POST['cupoConsulta'];

$_SESSION['legajo']=$legajoDocente;

include('db.php');

$consulta="INSERT INTO consultas (fecha_consulta, hora_consulta, cupo, id_profesor, id_materia) VALUES ('$fechaConsulta', '$horaConsulta', '$cupoConsulta', '$legajoDocente', '$idMateria')";
$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

//aca falta hacer el if por si la conexion falla o no se registra correctamente
    
header("location:./misConsultasDoc.php");

mysqli_close($conexion);

?>