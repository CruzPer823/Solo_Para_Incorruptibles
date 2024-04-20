<?php

require "dbh.inc.php";

$idEstado = $_POST["estado"];


$query = "SELECT municipios.id, municipios.nombre FROM municipios WHERE estado = :idEstado ORDER BY municipios.nombre ASC;";
$stmt = $pdo->prepare($query);
$stmt->bindParam(":idEstado", $idEstado);
$stmt->execute();



$respuesta = "<option value=''>Seleccionar</option>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $respuesta .= "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);