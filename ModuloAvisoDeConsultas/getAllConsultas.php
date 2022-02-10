<?php

include('db.php');

$consulta="SELECT * FROM consultas WHERE estado = 1";
$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

if ($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $formatoInput = 'Y-m-d H:i:s';
        $fechaHora = DateTime::createFromFormat($formatoInput, $row["fecha_hora"]);
        $hora = $fechaHora -> format('H:i');
        $fecha = $fechaHora -> format('d-m-Y');
        echo "
            <tr>
                <th scope='row'></th>
                <td><button type='button' class='btn btn-outline-secondary'>Inscribirse</button></td>
                <td><p>Profesor: " . $row["id_profesor"]. "</p><p>Cupos Disponibles: " . $row["cupo"]. "</p><b>Día de consulta: " . $fecha . "</b></td>
                <td><b>" . $hora . "</b></td>
            </tr>
        ";
    }
}
else {
    echo "<option disabled value=''>No existen materias cargadas</option>";
}

?>