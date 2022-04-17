<?php

$id = $_GET['id'];

include($_SERVER["DOCUMENT_ROOT"] .'/db.php');

$consulta="DELETE FROM consultas WHERE id = $id;";
$resultado = mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

if(is_object($resultado))
    mysqli_free_result($resultado);

mysqli_close($conexion);

header("Location: misConsultasDoc.php?msg=".urlencode("La consulta fue eliminada correctamente"));
exit();

?>
