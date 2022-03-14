<?php

include_once($_SERVER["DOCUMENT_ROOT"] .'isSessionStarted.php');

if ((!isset($_SESSION['esDocente'])) or (!$_SESSION['esDocente'])){ 
    echo '<div class="alert alert-danger" role="alert">
    Solo los Docentes tienen acceso a esta página
    </div>';
    include($_SERVER["DOCUMENT_ROOT"] ."inicioSesion.php");
    die();
}

?>