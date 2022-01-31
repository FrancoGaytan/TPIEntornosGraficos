<?php

if (!session_id()) session_start();
if (!$_SESSION['esDocente']){ 
    echo '<p>Paso por aca</p>';
    header("Location:inicioSesion.php");
    die();
}

?>