<!doctype html>
<html lang="en">

<?php
    include_once('./isSessionStarted.php');

    include('./restringidoAlumno.php');
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

        <select class="form-select" aria-label="Default select example">
            <option selected value=''>Cualquier materia</option>
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
