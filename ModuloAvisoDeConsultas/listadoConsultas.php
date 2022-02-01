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
            <h4>Hola <?php echo $_SESSION['email'] ?>!</h4>
        </div>
        <select class="form-select" aria-label="Default select example">
            <option selected>Buscar Materia</option>
            <option value="1">Entornos Graficos</option>
            <option value="2">Analisis Matematico</option>
            <option value="3">Fisica 2</option>
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
                <td><p>Profesor: XX</p><p>Cupos Disponibles: XX</p><p>Día de consulta: XX/XX/XXXX</p></td>
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
    include('templates/footer.php')
?>

</html>
