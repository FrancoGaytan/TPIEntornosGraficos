<?php

include('db.php');

$legajoAlu = $_SESSION['legajo'];
$consultasAlumno="SELECT * FROM alumno_consulta WHERE legajo_alumno = {$legajoAlu} and cancelada = 0;";
$resultado=mysqli_query($conexion,$consultasAlumno) or die (mysqli_error($conexion));

if ($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {

        $idConsulta = $row["id_consulta"];
        $consulta2="SELECT * FROM consultas WHERE estado = 1 and fecha_hora > curdate() and id = {$idConsulta};";
        $resultado2=mysqli_query($conexion,$consulta2) or die (mysqli_error($conexion));
        while ($row2 = $resultado2->fetch_assoc()){

            $formatoInput = 'Y-m-d H:i:s';
            $fechaHora = DateTime::createFromFormat($formatoInput, $row2["fecha_hora"]);
            $hora = $fechaHora -> format('H:i');
            $fecha = $fechaHora -> format('d-m-Y');

            $legProf = $row2["id_profesor"];
            $consulta3="SELECT nombre, apellido FROM profesores WHERE legajo = {$legProf};";
            $resultado3=mysqli_query($conexion,$consulta3) or die (mysqli_error($conexion));
            while($row3 = $resultado3->fetch_assoc()) {
                
                $idMateria =  $row2["id_materia"];
                $consulta4="SELECT nombre_materia FROM materias WHERE id = {$idMateria};";
                $resultado4=mysqli_query($conexion,$consulta4) or die (mysqli_error($conexion));
                while($row4 = $resultado4->fetch_assoc()) {
                    echo "
                        <tr>
                            <th scope='row'></th>
                            <td>
                                <a style='color: red' onClick=\"javascript: return confirm('Estas seguro de eliminar la consulta ". $row2['id'] . "?');\" href='blockConsulta.php?id=".$row2['id']."'>Bloquear</a>
                                <form action='./reprogramarConsulta.php' method='post'>
                                    <input type='hidden' name='id' value='" . $row2["id"] . "'/><br>
                                    <input type='submit' value='Reprogramar' />
                                </form>
                            </td>
                            <td><p><b>Nombre Materia: " . $row4["nombre_materia"]. "</b> <p>Profesor: " . $row3["nombre"], ' ', $row3["apellido"]. "</p><p>Cupos Disponibles: " . $row2["cupo"] . "</p>Día de consulta: " . $fecha . "</td>
                            <td><b>" . $hora . "</b></td>
                        </tr>
                    ";
                }
            }
        }
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