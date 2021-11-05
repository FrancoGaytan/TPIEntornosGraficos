<!doctype html>
<html lang="en">

<?php
    include('templates/header.php')
?>

<link href="css/estilos.css" rel="stylesheet">

<form>
    <div class="titulo">
        <h2>Registro de Nueva Consulta</h2>
    </div>

    <select class="form-select" aria-label="Default select example">
        <option selected>Materia</option>
        <option value="1">One</option>
         <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    
    <select class="form-select" aria-label="Default select example">
        <option selected>Dia de consulta</option>
        <option value="1">One</option>
         <option value="2">Two</option>
        <option value="3">Three</option>
    </select>



    <div class="form-group">
      <label for="exampleInputEmail1">Horario de Consulta</label>
      <input type="time" class="form-control" id="horarioConsulta" aria-describedby="emailHelp" placeholder="Ingrese el horario de consulta">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Cupo maximo de consulta</label>
      <input type="number" class="form-control" id="cupoConsulta" aria-describedby="emailHelp" placeholder="Ingrese el cupo de la consulta">
    </div>

    <button type="submit" class="btn btn-primary">Confirmar</button>
  </form>
  
<?php
    include('templates/footer.php')
?>

</html>