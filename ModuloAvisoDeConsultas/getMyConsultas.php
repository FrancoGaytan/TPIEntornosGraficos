<?php

include('db.php');

$legajoDoc = $_SESSION['legajo'];
$consulta="SELECT * FROM consultas WHERE estado = 1 and fecha_hora > curdate() and id_profesor = {$legajoDoc};";
$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

if ($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $formatoInput = 'Y-m-d H:i:s';
        $fechaHora = DateTime::createFromFormat($formatoInput, $row["fecha_hora"]);
        $hora = $fechaHora -> format('H:i');
        $fecha = $fechaHora -> format('d-m-Y');


        $legProf = $row["id_profesor"];
        $consulta2="SELECT nombre, apellido FROM profesores WHERE legajo = {$legProf};";
        $resultado2=mysqli_query($conexion,$consulta2) or die (mysqli_error($conexion));
        $row2 = $resultado2->fetch_assoc();

        echo "
            <tr>
                <th scope='row'></th>
                <td>
                    <a style='color: red' onClick=\"javascript: return confirm('Estas seguro de eliminar la consulta?');\" href='blockConsulta.php?id=".$row['id']."'>Bloquear</a>
                    <form action='./reprogramarConsulta.php' method='post'>
                        <input type='hidden' name='id' value='" . $row["id"] . "'/><br>
                        <input type='submit' value='Reprogramar' />
                    </form>
                </td>
                <td><p>Profesor: " . $row2["nombre"], ' ', $row2["apellido"]. "</p><p>Cupos Disponibles: " . $row["cupo"] . "</p><b>Día de consulta: " . $fecha . "</b></td>
                <td><b>" . $hora . "</b></td>
            </tr>
        ";
    }
}
else {
    echo "
        <tr>
            <th scope='row'></th>
            <td></td>
            <td><b>No tiene consultas</b></td>
            <td></td>
        </tr>
    ";
}

?>
