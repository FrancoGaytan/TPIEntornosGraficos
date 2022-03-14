<?php
    include($_SERVER["DOCUMENT_ROOT"] .'./restringidoDocente.php')
?>

<!doctype html>
<html lang="en">

<?php
    include($_SERVER["DOCUMENT_ROOT"] .'templates/header.php')
?>

<link href="css/estilos.css" rel="stylesheet">

<div class="contenido">
  <form action="./reprogramar.php" method="post" class="formulario">
      <div class="titulo">
          <h2>Ingrese la nueva fecha para la consulta</h2>
      </div>

      <div class="form-group">
        <label for="fechaConsulta">Dia de Consulta</label>
        <input name="fechaConsulta" type="date" class="form-control" id="diaConsulta" aria-describedby="emailHelp" placeholder="Ingrese el día de consulta">
      </div>

      <div class="form-group">
        <label for="horaConsulta">Horario de Consulta</label>
        <input name="horaConsulta" type="time" class="form-control" id="horaConsulta" aria-describedby="emailHelp" placeholder="Ingrese el horario de consulta">
      </div>

      <input type='hidden' name='id' value='<?php echo $_POST['id'] ?>'/><br>

      <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>
</div>

?>

<?php
    include($_SERVER["DOCUMENT_ROOT"] .'templates/footer.php')
?>

</html>

</html>
