<?php

include_once('isSessionStarted.php');

if ((!isset($_SESSION['esAlumno'])) or (!$_SESSION['esAlumno'])){ 
    echo '<div class="alert alert-danger" role="alert">
    Solo los Alumnos tienen acceso a esta página
    </div>';
    include("inicioSesion.php");
    die();
}

?>