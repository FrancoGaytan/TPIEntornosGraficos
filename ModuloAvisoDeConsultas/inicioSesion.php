<!doctype html>
<html lang="en">

<?php
    include($_SERVER["DOCUMENT_ROOT"] .'templates/header.php')
?>

<table>
    <tr>
        <td>

        </td>
    </tr>
</table>
<div class="margined" align="center">
    
        <button class="btn btn-dark" role="button" onclick="window.location.href = 'loginAlumno.php'">
        Soy alumno
        </button>
        <button class="btn btn-secondary" role="button" onclick="window.location.href = 'loginDocente.php'">
        Soy docente
        </button>
    
</div>

<?php
    include($_SERVER["DOCUMENT_ROOT"] .'templates/footer.php')
?>

</html>