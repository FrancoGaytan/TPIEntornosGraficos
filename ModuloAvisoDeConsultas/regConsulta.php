<?php
    include('utils/restringidoDocente.php')
?>

<!doctype html>
<html lang="en">

<?php
    include('templates/header.php')
?>

<link href="css/estilos.css" rel="stylesheet">



<div class="contenido">
  <form action="utils/registrarConsulta.php" method="post" class="formulario">
      <div class="titulo">
          <h2>Registro de Nueva Consulta</h2>
      </div>

      <select name="idMateria" class="form-select" aria-label="Default select example">
          <option selected>Materia</option>
          <option value="11">Fisica II</option>
          <option value="18">Diseño de Sistemas</option>
          <option value="19">Comunicaciones</option>
          <option value="25">Redes</option>
          <option value="27">Investigacion Operativa</option>
          <option value="28">Simulacion</option>
          <option value="44">Entornos Graficos</option>
      </select>

      <div class="form-group">
        <label for="exampleInputHorarios1">Dia de Consulta</label>
        <input name="fechaConsulta" type="date" class="form-control" id="diaConsulta" aria-describedby="emailHelp" placeholder="Ingrese el horario de consulta">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Horario de Consulta</label>
        <input name="horaConsulta" type="time" class="form-control" id="horarioConsulta" aria-describedby="emailHelp" placeholder="Ingrese el horario de consulta">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Cupo maximo de consulta</label>
        <input name="cupoConsulta" type="number" class="form-control" id="cupoConsulta" aria-describedby="emailHelp" placeholder="Ingrese el cupo de la consulta">
      </div>

      <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>
</div>

?>

<?php
    include('templates/footer.php')
?>

</html>

</html>
