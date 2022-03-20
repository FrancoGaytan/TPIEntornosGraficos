<?php
    include_once('./isSessionStarted.php');
    include('./restringidoDocente.php')
?>

<!doctype html>
<html lang="en">

<?php
    include('templates/header.php')
?>

<link href="css/estilos.css" rel="stylesheet">

<?php
    if(isset($_GET["msg"])) {
        echo "
        <div class='alert alert-success margined' role='alert'>
        " . $_GET["msg"] . "
        </div>
        ";
    }
?>

<div class="contenido">
    
  <form action="./registrarConsulta.php" method="post" class="formulario form-group">
      <div class="titulo">
          <h2>Registro de Nueva Consulta</h2>
      </div>

      <select name="idMateria" class="form-select" aria-label="Default select example" required>
        <option disabled selected>Selecciona la materia</option>
        <?php
          include('getAllMaterias.php')
        ?>
      </select>

      <div class="form-group">
        <label for="fechaConsulta">Dia de Consulta</label>
        <input name="fechaConsulta" type="date" class="form-control" id="diaConsulta" aria-describedby="emailHelp" placeholder="Ingrese el día de consulta" required>
      </div>

      <div class="form-group">
        <label for="horaConsulta">Horario de Consulta</label>
        <input name="horaConsulta" type="time" class="form-control" id="horaConsulta" aria-describedby="emailHelp" placeholder="Ingrese el horario de consulta" required>
      </div>

      <div class="form-group">
        <label for="cupoConsulta">Cupo maximo de consulta</label>
        <input name="cupoConsulta" type="number" class="form-control" id="cupoConsulta" aria-describedby="emailHelp" placeholder="Ingrese el cupo de la consulta" required>
      </div>

      <button type="submit" class="btn btn-primary margined">Confirmar</button>
    </form>
</div>

<?php
    include('templates/footer.php')
?>

</html>

</html>
