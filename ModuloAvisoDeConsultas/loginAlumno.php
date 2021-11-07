<!doctype html>
<html lang="en">

<?php
    include('templates/header.php')
?>

<link href="css/estilos.css" rel="stylesheet">
    
<form action="" method="post">
    <div class="titulo">
        <h2>Inicio de sesión</h2>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su email">
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
