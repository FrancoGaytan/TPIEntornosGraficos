<?php

$id = $_POST['id'];
$legAlumno = $_POST['legAlumno'];

include($_SERVER["DOCUMENT_ROOT"] .'db.php');

$consulta="DELETE FROM alumno_consulta WHERE id_consulta={$id} and legajo_alumno={$legAlumno};";
$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

$consulta2="UPDATE consultas SET cupo = cupo + 1 WHERE id = {$id};";
$resultado2=mysqli_query($conexion,$consulta2) or die (mysqli_error($conexion));

echo "<div class='alert alert-success' role='alert'>
La consulta fue cancelada correctamente
</div>";
include($_SERVER["DOCUMENT_ROOT"] ."./perfilAlumno.php");

mysqli_free_result($resultado);
mysqli_close($conexion);

?>