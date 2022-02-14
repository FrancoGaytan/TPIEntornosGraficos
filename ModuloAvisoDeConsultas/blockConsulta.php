<?php

$id = $_GET['id'];

include('db.php');

$consulta="UPDATE consultas SET estado = 0 WHERE id = $id;";
$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

echo "<div class='alert alert-success' role='alert'>
La consulta fue cancelada correctamente
</div>";
include("./misConsultasDoc.php");

mysqli_free_result($resultado);
mysqli_close($conexion);

?>
