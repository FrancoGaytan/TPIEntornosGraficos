<!doctype html>
<html lang="en">

<?php
    include('templates/header.php')
?>

<h2>Registro Docente</h2>
    
<form>
    <div class="form-group">
        <label for="exampleInputNombre">Nombre</label>
        <input type="text" class="form-control" id="exampleInputNombre" aria-describedby="emailHelp" placeholder="Ingrese su nombre">
      </div>
      <div class="form-group">
        <label for="exampleInputApellido">Apellido</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su apellido">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Legajo</label>
        <input type="number" class="form-control" id="exampleInputLegajo" aria-describedby="emailHelp" placeholder="Ingrese su legajo">
      </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su email">
    </div>
    <div class="form-group">
      <label for="exampleInputContraseña">Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Confirma que no eres un bot</label>
    </div>
    <button type="submit" class="btn btn-primary">Registrarse</button>
  </form>
  
<?php
    include('templates/footer.php')
?>

</html>
