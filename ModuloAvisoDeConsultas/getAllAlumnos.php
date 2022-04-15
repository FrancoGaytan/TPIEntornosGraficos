<?php

include('db.php');

$consulta="SELECT * FROM alumnos";
$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

if ($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        echo "
            <tr>
                <td>
                    <a style='color: red' onClick=\"javascript: return confirm('Estas seguro de eliminar el alumno?');\" href='deleteAlumno.php?legajo=".$row['legajo']."'>Eliminar</a>
                </td>
                <td><p>Profesor: " . $row2["nombre"], ' ', $row2["apellido"]. "</p><p>Legajo: " . $row["legajo"] . "</p></td>
            </tr>
        ";
    }
}
else {
    echo "
        <tr>
            <td></td>
            <td><b>No existen alumnos</b></td>
            <td></td>
        </tr>
    ";
}

exit()
?>