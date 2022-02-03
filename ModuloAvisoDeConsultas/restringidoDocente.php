<?php

include_once('isSessionStarted.php');

if ((!isset($_SESSION['esDocente'])) or (!$_SESSION['esDocente'])){ 
    echo '<div class="alert alert-danger" role="alert">
    Solo los Docentes tienen acceso a esta página
    </div>';
    include("inicioSesion.php");
    die();
}

?>