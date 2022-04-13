<?php

include_once('isSessionStarted.php');

//var_dump($_SESSION);

if ((!isset($_SESSION['esAdmin'])) or (!$_SESSION['esAdmin'])){ 
    echo '<div class="alert alert-danger" role="alert">
    Solo los Administradores tienen acceso a esta página
    </div>';
    include("index.php");
    die();
}

?>
