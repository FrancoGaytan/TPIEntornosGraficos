<!doctype html>
<html lang="en">

<?php
    include_once('utils/isSessionStarted.php');

    include('utils/restringidoAlumno.php');

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
            <option selected>Buscar Materia</option>
            <option value="1">Fisica II</option>
            <option value="2">Diseño de Sistemas</option>
            <option value="3">Comunicaciones</option>
            <option value="4">Redes</option>
            <option value="5">Investigacion Operativa</option>
            <option value="6">Simulacion</option>
            <option value="7">Entornos Graficos</option>
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
            <tr>
                <th scope="row"></th>
                <td><button type="button" class="btn btn-outline-secondary">Inscribirse</button></td>
                <td><p>Profesor: XX</p><p>Cupos Disponibles: XX</p><p>Día de consulta: XX/XX/XXXX <?php/* echo $fila["fecha_consulta"]*/?></p></td>
                <td>XX:XX hs</td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td><button type="button" class="btn btn-outline-secondary">Inscribirse</button></td>
                <td><p>Profesor: XX</p><p>Cupos Disponibles: XX</p><p>Día de consulta: XX/XX/XXXX</p></td>
                <td>XX:XX hs</td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td><button type="button" class="btn btn-outline-secondary">Inscribirse</button></td>
                <td><p>Profesor: XX</p><p>Cupos Disponibles: XX</p><p>Día de consulta: XX/XX/XXXX</p></td>
                <td>XX:XX hs</td>
            </tr>
        </tbody>
        </table>
    </form>
          
</div>

<?php
/*}}*/
    include('templates/footer.php')
?>

</html>
