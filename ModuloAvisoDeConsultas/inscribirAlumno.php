<?php

include_once('isSessionStarted.php');

$idConsulta=$_GET['id'];
$legajo=$_SESSION['legajo'];

include('db.php');

mysqli_init();
$consulta="INSERT INTO alumno_consulta (legajo_alumno, id_consulta) VALUES ('$legajo', '$idConsulta')";
$resultado=mysqli_query($conexion,$consulta);

if (mysqli_errno($conexion) == 1062) {
    echo "<div class='alert alert-danger' role='alert'>
    Ya estas registrado a esta consulta.
    </div>";
    include("./listadoConsultas.php");
    exit();
}

$consulta2="UPDATE consultas SET cupo = cupo - 1 WHERE id = $idConsulta and cupo > 0;";
$resultado2=mysqli_query($conexion,$consulta2) or die (mysqli_error($conexion));

echo "<div class='alert alert-success' role='alert'>
La inscripción fue registrada correctamente.
</div>";
include("./listadoConsultas.php");

mysqli_free_result($resultado);
mysqli_free_result($resultado2);
mysqli_close($conexion);

?>
