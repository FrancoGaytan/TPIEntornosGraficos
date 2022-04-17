<?php
    include('./restringidoAdmin.php')
?>

<!doctype html>
<html lang="en">

<?php
    include('templates/header.php')
?>

<div class="contenido">
  <form action= "./registrarAlumno.php" method="post" class="formulario">
      
      <div class="titulo">
          <h2>Registro Alumno</h2>
      </div>

      <div class="form-group">
          <label for="exampleInputNombre">Nombre</label>
          <input name="nombreAlumno" type="text" class="form-control" id="nombreAlumno" aria-describedby="emailHelp" placeholder="Ingrese su nombre" required>
        </div>
        <div class="form-group">
          <label for="exampleInputApellido">Apellido</label>
          <input name="apellidoAlumno" type="text" class="form-control" id="apellidoAlumno" aria-describedby="emailHelp" placeholder="Ingrese su apellido" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Legajo</label>
          <input name="legajoAlumno" type="text" class="form-control" title="Ingrese solo números" pattern="[0-9]*" id="legajoAlumno" maxlength="6" aria-describedby="emailHelp" placeholder="Ingrese su legajo" required>
        </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input name="emailAlumno" type="email" class="form-control" id="emailAlumno" aria-describedby="emailHelp" placeholder="Ingrese su email" required>
      </div>
      <button type="submit" class="btn btn-primary margined">Registrarse</button>
    </form>
</div>
<?php
    include('templates/footer.php')
?>

</html>
