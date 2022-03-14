<!doctype html>
<html lang="en">

<?php
    include($_SERVER["DOCUMENT_ROOT"] .'templates/header.php')
?>

<link href="css/estilos.css" rel="stylesheet">
<link href="css/formulario.css" rel="stylesheet">

<div class="container">
    <section class="main row" style="background-color:rgba(0, 0, 0, 0);">
        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-6">
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
        </div>

        <aside class="col-xs-12 col-sm-4 col-md-3 col-lg-6">
        <div class="container">
            <div class="ubicacionUTN" style="background-color:rgba(0, 0, 0, 0);">
                <br><br><br>
                <div class="mapouter"><div class="gmap_canvas"><iframe width="450" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=zeballos%201341%20Rosario&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2piratebay.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">copy google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
            </div>
        </div>
        </aside>
    </section>
</div>

<?php
    include($_SERVER["DOCUMENT_ROOT"] .'templates/footer.php')
?>

</html>
