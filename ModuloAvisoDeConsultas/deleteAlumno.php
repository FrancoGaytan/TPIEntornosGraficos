<?php

$legajo = $_GET['legajo'];

include($_SERVER["DOCUMENT_ROOT"] .'/db.php');

$consulta="DELETE FROM alumnos WHERE legajo = $legajo;";
$resultado = mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

if(is_object($resultado))
    mysqli_free_result($resultado);

mysqli_close($conexion);

header("Location: panelAdmin.php?msg=".urlencode("El alumno fue eliminado correctamente"));
exit();

?>
