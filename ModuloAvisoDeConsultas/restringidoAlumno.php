<?php

if (!session_id()) session_start();
if (!$_SESSION['esAlumno']){ 
    echo '<p>Paso por aca</p>';
    header("Location:inicioSesion.php");
    die();
}

?>