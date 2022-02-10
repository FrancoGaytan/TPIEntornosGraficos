<?php

include_once('isSessionStarted.php');

$idMateria=$_POST['idMateria'];
$fechaConsulta=$_POST['fechaConsulta'];
$horaConsulta=$_POST['horaConsulta'];
$cupoConsulta=$_POST['cupoConsulta'];
$legajo=$_SESSION['legajo'];

$formatoInput = 'Y-m-d H:i';
$formatoOutput = 'Y-m-d H:i:s';
$fechaHora = DateTime::createFromFormat($formatoInput, "$fechaConsulta $horaConsulta");
$fechaString = $fechaHora -> format($formatoOutput);

include('db.php');

$consulta="INSERT INTO consultas (fecha_hora, cupo, id_profesor, id_materia) VALUES ('$fechaString', '$cupoConsulta', '$legajo', '$idMateria')";
$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

echo "<div class='alert alert-success' role='alert'>
La consulta fue agregada correctamente
</div>";
include("./regConsulta.php");

mysqli_free_result($resultado);
mysqli_close($conexion);

?>