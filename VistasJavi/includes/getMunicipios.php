<?php

require 'database.php';

$idEstado = $mysqli->real_escape_string($_POST['estado']);

$sql = "SELECT municipios.id, municipios.nombre FROM municipios WHERE estado = $idEstado ORDER BY municipios.nombre ASC";

$resultado = $mysqli->query($sql);

$respuesta = "<option value=''>Seleccionar</option>";

while ($row = $resultado->fetch_assoc()) {
    $respuesta .= "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
?>