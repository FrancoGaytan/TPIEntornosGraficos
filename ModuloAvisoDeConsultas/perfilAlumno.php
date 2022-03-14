<!doctype html>
<html lang="en">

<?php
    include($_SERVER["DOCUMENT_ROOT"] .'./restringidoAlumno.php')
?>

<?php
    include($_SERVER["DOCUMENT_ROOT"] .'templates/header.php')
?>

<div class="container">
    <section class="main row">
        <article class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            <br>
            <img src="img/perfilVacio.jpg" alt="..." class="img-thumbnail">
            <br>
            <br>
            <h3><?php echo $_SESSION['nombre']; echo ' '; echo $_SESSION['apellido'] ?></h3>
            <h4>Legajo: <?php echo $_SESSION['legajo'] ?></h4>
            <p>Este es el parrafo de prueba de la pagina de consultas del docente donde estos pueden agregar informacion adicional para su perfil </p>
            <td><button type="button" class="btn btn-outline-secondary">Historial de Consultas</button></td>

        </article>

        <aside class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
        <div class="container">

                <div class="titulo">
                    <h2>Mis Proximas Consultas</h2>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Consulta</th>
                        <th scope="col">Horario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include($_SERVER["DOCUMENT_ROOT"] .'getMyConsultasAlumno.php')
                        ?>
                    </tbody>
                </table>

            </div>
        </aside>
  
    </section>
</div>

<?php
    include($_SERVER["DOCUMENT_ROOT"] .'templates/footer.php')
?>

</html>
