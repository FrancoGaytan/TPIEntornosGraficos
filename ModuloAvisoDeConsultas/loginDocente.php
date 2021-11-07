<!doctype html>
<html lang="en">

<?php
    include('templates/header.php')
?>


<form action="validarDocente.php" method="post">
    <div class="titulo">
        <h2>Inicio de sesión</h2>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">Alumno</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" checked>
        <label class="form-check-label" for="inlineRadio2">Docente</label>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su email">
    </div>

    <div class="form-group">
      <label for="exampleInputContraseña">Contraseña</label>
      <input type="password" name="contraseña" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
    </div>

    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Confirma que no eres un bot</label>
    </div>

    <button type="submit" class="btn btn-primary">Ingresar</button>
  </form>
  
<?php
    include('templates/footer.php')
?>

</html>
