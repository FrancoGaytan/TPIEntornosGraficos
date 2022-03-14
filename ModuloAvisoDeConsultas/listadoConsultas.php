<!doctype html>
<html lang="en">

<?php
    include_once($_SERVER["DOCUMENT_ROOT"] .'./isSessionStarted.php');

    include($_SERVER["DOCUMENT_ROOT"] .'./restringidoAlumno.php');
?>

<?php
    include($_SERVER["DOCUMENT_ROOT"] .'templates/header.php')
?>

<div class="container">
    <div class="titulo">
        <h2>Listado de Consultas</h2>
    </div>

    <div class="titulo">
        <h4>Bienvenido <?php echo $_SESSION['nombre']; echo ' '; echo $_SESSION['apellido'] ?>!</h4>
    </div>

    <form class="margined" action="listadoConsultas.php" method="post">
        
        <select class="form-select" name="idMateria" id="idMateria" aria-label="Materias">
            <option selected value=''>Cualquier materia</option>
            <?php
            include($_SERVER["DOCUMENT_ROOT"] .'getAllMaterias.php')
            ?>
        </select>
        <br>
        <button class="btn btn-primary" type="submit" name="filtrar">Buscar</button>
    
    </form>
    
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
        include($_SERVER["DOCUMENT_ROOT"] .'getAllConsultas.php')
        ?>
    </tbody>
    </table>
          
</div>

<?php
    include($_SERVER["DOCUMENT_ROOT"] .'templates/footer.php')
?>

</html>