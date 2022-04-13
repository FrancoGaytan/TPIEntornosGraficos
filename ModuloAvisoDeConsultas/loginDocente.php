<!doctype html>
<html lang="en">

<?php
    include('templates/header.php')
?>

<div class="contenido margined">
  <form action="./validarDocente.php" method="post" class="formulario">
      <div class="titulo">
          <h2>Inicio de sesión</h2>
      </div>
      
      <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Ingrese su email">
      </div>

      <div class="form-group">
        <label for="inputContrasenia">Contraseña</label>
        <input type="password" name="contrasenia" class="form-control" id="inputContrasenia" placeholder="Ingrese su contraseña">
      </div>

      <button type="submit" class="btn btn-primary margined">Ingresar</button>
    </form>
</div>

<?php
    include('templates/footer.php')
?>

</html>
