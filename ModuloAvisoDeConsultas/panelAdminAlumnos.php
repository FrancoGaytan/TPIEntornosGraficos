<?php
    include('./restringidoAdmin.php')
?>

<!doctype html>
<html lang="en">

<?php
    include('templates/header.php')
?>

<style>
    .div_before_table {
        overflow:hidden;
        overflow-y: scroll;
        height: 500px;
    }
</style>

<div class="container">
    <?php   
        if(isset($_GET["msg"])) {
            echo "
            <div class='alert alert-success margined' role='alert'>
            " . $_GET["msg"] . "
            </div>
            ";
        }
    ?>
    <section class="main row">
        <article class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            <br>
            <img src="img/perfilVacio.jpg" alt="..." class="img-thumbnail">
            <br>
            <br>
            <h3><?php echo $_SESSION['nombre']; echo ' '; echo $_SESSION['apellido'] ?></h3>
            <h4>Legajo: <?php echo $_SESSION['legajo'] ?></h4>
            <td><button type="button" class="btn btn-outline-secondary" onclick="window.location.href = 'regAlumno.php'">Registrar Nuevo Alumno </button></td>

        </article>

        <aside class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
        <div class="container">

                <div class="titulo">
                    <h2>Alumnos</h2>
                </div>

                <div class="div_before_table">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('getAllAlumnos.php')
                            ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </aside>
  
    </section>
</div>

<?php
    include('templates/footer.php')
?>

</html>
