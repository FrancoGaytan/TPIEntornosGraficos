<!doctype html>
<html lang="en">

<?php
    include('templates/header.php')
?>

<link href="css/estilos.css" rel="stylesheet">
<link href="css/formulario.css" rel="stylesheet">

<div class="container">
    <section class="main row" style="background-color:rgba(0, 0, 0, 0);">
        <article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
            <div class="titulo">
                <h2>Contacto</h2>
            </div>  
            <form action="envioFormulario.php" method="post">
                
                <p>
                <label for="nombre" class="colocar_nombre">Nombre
                    <span class="obligatorio">*</span>
                </label>
                    <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                </p>

                <p>
                <label for="email" class="colocar_email">Email
                    <span class="obligatorio">*</span>
                </label>
                    <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email">
                </p>

                <p>
                <label for="telefone" class="colocar_telefono">Teléfono
                </label>
                    <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
                </p>    

                <p>
                <label for="website" class="colocar_website">Sitio web
                </label>
                    <input type="url" name="introducir_website" id="website" placeholder="Escribe la URL de tu web">
                </p>    

                <p>
                <label for="asunto" class="colocar_asunto">Asunto
                    <span class="obligatorio">*</span>
                </label>
                    <input type="text" name="introducir_asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
                </p>    

                <p>
                <label for="mensaje" class="colocar_mensaje">Mensaje
                    <span class="obligatorio">*</span>
                </label>                     
                                    <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                                </p>                    

                <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>

                <p class="aviso">
                <span class="obligatorio"> * </span>los campos son obligatorios.
                </p>  
            </form>
        </article>

        <aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
        <div class="container">
            <div class="ubicacionUTN" style="background-color:rgba(0, 0, 0, 0);">
                <a  href="https://www.google.com/maps/place/Universidad+Tecnol%C3%B3gica+Nacional+%7C+Facultad+Regional+Rosario/@-32.9544347,-60.6437319,15z/data=!4m5!3m4!1s0x0:0x11f1d3d54f950dd0!8m2!3d-32.9544347!4d-60.6437319">
                    <img class="img-responsive" src="img/utnUbicacion.jpg" data-bs-hover-animate="pulse" width="100%" height="2000px">
                </a>
            </div>
        </div>
        </aside>
    </section>
</div>

<?php
    include('templates/footer.php')
?>

</html>