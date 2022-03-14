<?php

include($_SERVER["DOCUMENT_ROOT"] .'db.php');

$consulta="SELECT * FROM materias";
$resultado=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

if ($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        echo "<option value='" . $row["id"]. "'>" . $row["nombre_materia"] . " - COM:" . $row["comision"] . "</option>";
    }
}
else {
    echo "<option disabled value=''>No existen materias cargadas</option>";
}

?>