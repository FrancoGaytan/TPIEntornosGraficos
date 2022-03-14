<!doctype html>
<html lang="en">

<?php
    include($_SERVER["DOCUMENT_ROOT"] .'templates/header.php')
?>

<div class="contenido">
  <form action= "./registrarDocente.php" method="post" class="formulario">
      
      <div class="titulo">
          <h2>Registro Docente</h2>
      </div>

      <div class="form-group">
          <label for="exampleInputNombre">Nombre</label>
          <input name="nombreDocente" type="text" class="form-control" id="nombreDocente" aria-describedby="emailHelp" placeholder="Ingrese su nombre">
          <small id="nombreHelp" class="form-text text-muted">No compartiremos su nombre con nadie más.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputApellido">Apellido</label>
          <input name="apellidoDocente" type="text" class="form-control" id="apellidoDocente" aria-describedby="emailHelp" placeholder="Ingrese su apellido">
          <small id="apellidoHelp" class="form-text text-muted">No compartiremos su apellido con nadie más.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Legajo</label>
          <input name="legajoDocente" type="number" class="form-control" id="legajoDocente" aria-describedby="emailHelp" placeholder="Ingrese su legajo">
          <small id="legajoHelp" class="form-text text-muted">No compartiremos su id con nadie más.</small>
        </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input name="emailDocente" type="email" class="form-control" id="emailDocente" aria-describedby="emailHelp" placeholder="Ingrese su email">
        <small id="emailHelp" class="form-text text-muted">No compartiremos su email con nadie más.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputContraseña">Contraseña</label>
        <input name="contraseñaDocente" type="password" class="form-control" id="contraseñaDocente" placeholder="Ingrese su contraseña">
      </div>
      <button type="submit" class="btn btn-primary margined">Registrarse</button>
    </form>
</div>
<?php
    include($_SERVER["DOCUMENT_ROOT"] .'templates/footer.php')
?>

</html>
