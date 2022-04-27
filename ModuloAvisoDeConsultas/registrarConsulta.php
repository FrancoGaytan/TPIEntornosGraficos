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
$now = date('m-d-Y h:i:s a', time());

if($fechaHora < $now) {
    echo '<div class="alert alert-danger" role="alert">
    La fecha de la consulta debe ser mayor a la fecha actual
    </div>';
    include('./regConsulta.php');
    exit();
}

$fechaString = $fechaHora -> format($formatoOutput);

include('db.php');

$consulta="INSERT INTO consultas (fecha_hora, cupo, id_profesor, id_materia) VALUES ('$fechaString', '$cupoConsulta', '$legajo', '$idMateria')";
$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

if(is_object($resultado))
    mysqli_free_result($resultado);
mysqli_close($conexion);

header("Location: regConsulta.php?msg=".urlencode("La consulta fue agregada correctamente"));
exit();

?>
