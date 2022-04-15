<?php

$legajo = $_GET['legajo'];

include($_SERVER["DOCUMENT_ROOT"] .'/db.php');

$consulta="DELETE FROM profesores WHERE legajo = $legajo;";
$resultado = mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

if(is_object($resultado))
    mysqli_free_result($resultado);

mysqli_close($conexion);

header("Location: panelAdminDocentes.php?msg=".urlencode("El docente fue eliminado correctamente"));
exit();

?>
