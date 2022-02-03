<!doctype html>
<html lang="en">

<?php
    include('templates/header.php')
?>

<div class="contenido">
  <form action="./validarDocente.php" method="post" class="formulario">
      <div class="titulo">
          <h2>Inicio de sesión</h2>
      </div>
      
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su email">
      </div>

      <div class="form-group">
        <label for="exampleInputContraseña">Contraseña</label>
        <input type="password" name="contrasenia" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
      </div>

      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Confirma que no eres un bot</label>
      </div>

      <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</div>

<?php
    include('templates/footer.php')
?>

</html>
