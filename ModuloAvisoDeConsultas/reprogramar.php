<?php

$id = $_POST['id'];
$fecha = $_POST['fechaConsulta'];
$hora = $_POST['horaConsulta'];

$formatoInput = 'Y-m-d H:i';
$fechaHora = DateTime::createFromFormat($formatoInput, $fecha . ' ' . $hora);
$formatoOutput = 'Y-m-d H:i:s';
$fechaString = $fechaHora -> format($formatoOutput);

include('db.php');

$consulta="UPDATE consultas SET fecha_hora = '$fechaString' WHERE id = $id;";
$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

if(is_object($resultado))
    mysqli_free_result($resultado);

mysqli_close($conexion);

header("Location: misConsultasDoc.php?msg=".urlencode("La consulta fue modificada correctamente"));
exit();

?>
