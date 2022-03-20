<?php

include_once('isSessionStarted.php');

//var_dump($_SESSION);

if ((!isset($_SESSION['esDocente'])) or (!$_SESSION['esDocente'])){ 
    echo '<div class="alert alert-danger" role="alert">
    Solo los Docentes tienen acceso a esta página
    </div>';
    include("index.php");
    die();
}

?>
