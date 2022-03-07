<!doctype html>
<html lang="en">

<?php
    include('templates/header.php')
?>

<link href="css/estilos.css" rel="stylesheet">
    
<div class="contenido margined">
  <form action="./validarAlumno.php" method="post" class="formulario">
      <div class="titulo">
          <h2>Ingreso alumno</h2>
      </div>
  
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su email">
      </div>
  
      <button type="submit" class="btn btn-primary margined">Ingresar</button>
    </form>
</div>
  
<?php
    include('templates/footer.php')
?>

</html>
