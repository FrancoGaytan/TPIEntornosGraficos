<!doctype html>
<html lang="en">

<?php
    include('templates/header.php')
?>

<div class="container">
    <section class="main row">
        <article class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            <br>
            <img src="img/perfilVacio.jpg" alt="..." class="img-thumbnail">
            <br>
            <br>
            <h3>Nombre y Apellido</h3>
            <h4>Legajo: XXXXX</h4>
            <p>Este es el parrafo de prueba de la pagina de consultas del docente donde estos pueden agregar informacion adicional para su perfil </p>
            <td><button type="button" class="btn btn-outline-secondary">Historial de Consultas</button></td>

        </article>

        <aside class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
        <div class="container">
                <form>
                    <div class="titulo">
                        <h2>Mis Proximas Consultas</h2>
                    </div>
                    <div class="btn-group">
                        <td><button type="button" class="btn btn-outline-secondary">Bloquear</button></td>
                        <td><button type="button" class="btn btn-outline-secondary">Reprogramar</button></td>
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
                        <tr>
                            <th scope="row"></th>
                            <td><button type="button" class="btn btn-outline-secondary">seleccionar</button></td>
                            <td><p>Profesor: XX</p><p>Cupos Disponibles: XX</p><p>Día de consulta: XX/XX/XXXX</p></td>
                            <td>XX:XX hs</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td><button type="button" class="btn btn-outline-secondary">seleccionar</button></td>
                            <td><p>Profesor: XX</p><p>Cupos Disponibles: XX</p><p>Día de consulta: XX/XX/XXXX</p></td>
                            <td>XX:XX hs</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td><button type="button" class="btn btn-outline-secondary">seleccionar</button></td>
                            <td><p>Profesor: XX</p><p>Cupos Disponibles: XX</p><p>Día de consulta: XX/XX/XXXX</p></td>
                            <td>XX:XX hs</td>
                        </tr>
                    </tbody>
                    </table>
                </form>

            </div>
        </aside>
  
    </section>
</div>



<?php
    include('templates/footer.php')
?>

</html>