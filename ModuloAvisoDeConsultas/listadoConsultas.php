<!doctype html>
<html lang="en">

<?php
    include_once('./isSessionStarted.php');

    include('./restringidoAlumno.php');

    echo session_status();

    echo "<h3> PHP List All Session Variables</h3>";
    foreach ($_SESSION as $key=>$val)
    echo $key." ".$val."<br/>";

?>

<?php
    include('templates/header.php')
?>

<div class="container">
    <form>
        <div class="titulo">
            <h2>Listado de Consultas</h2>
        </div>
        <div class="titulo">
            <h4>Bienvenido <?php echo $_SESSION['nombre']; echo ' '; echo $_SESSION['apellido'] ?>!</h4>
        </div>
       
        <?php

        /*$fecha_consulta=$_POST['fecha_consulta'];

        $query= "SELECT * FROM consultas WHERE fecha_consulta >= current_date()";
        $result = mysqli_query($conexion, $query);

        if (mysqli_num_rows($result) > 0) {
            while($fila = mysqli_fetch_assoc($result)){
            */
        ?>

        <select class="form-select" aria-label="Default select example">
            <option disabled selected>Selecciona la materia</option>
            <?php
            include('getAllMaterias.php')
            ?>
        </select>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col">Consulta</th>
            <th scope="col">Horario</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('getAllConsultas.php')
            ?>
        </tbody>
        </table>
    </form>
          
</div>

<?php
/*}}*/
    include('templates/footer.php')
?>

</html>
