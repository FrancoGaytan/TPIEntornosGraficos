<?php

$id = $_POST['id'];
$fecha = $_POST['fechaConsulta'];
$hora = $_POST['horaConsulta'];

echo $fecha;
echo $hora;

$formatoInput = 'Y-m-d H:i';
$fechaHora = DateTime::createFromFormat($formatoInput, $fecha . ' ' . $hora);
$formatoOutput = 'Y-m-d H:i:s';
$fechaString = $fechaHora -> format($formatoOutput);

include('db.php');

$consulta="UPDATE consultas SET fecha_hora = '$fechaString' WHERE id = $id;";
$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

echo "<div class='alert alert-success' role='alert'>
La consulta fue modificada correctamente
</div>";
include("./misConsultasDoc.php");

mysqli_free_result($resultado);
mysqli_close($conexion);

?>