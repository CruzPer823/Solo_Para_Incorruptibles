<?php
// Conexión a la base de datos
require 'database.php';

// Comenzar la transacción
$mysqli->begin_transaction();

try {
    // Imprimir los datos recibidos para depuración

    // Obtener los datos del formulario
    $codigo_postal = $_POST['CP'];
    $seccion_electoral = $_POST['seccion_electoral'];
    $sexo = $_POST['sexo'];
    $ocupacion = $_POST['ocupacion'];
    $escolaridad = $_POST['escolaridad'];
    $explicacion = $_POST['explicacion'];
    $estados = $_POST['estados'];
    $ubicacion = $_POST['municipios'];
    $nombre = $_POST['nombre'];
    $institucion = $_POST['institucion'];
    $rol = $_POST['rol'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $conducta = 1;
    $direccion = 'Boulevard';
    echo $codigo_postal ;

    // Preparar y ejecutar la consulta
    $stmt1 = $mysqli->prepare("INSERT INTO denuncia (id,cp, seccionElectoral, sexo, ocupacion, escolaridad, descripcion, ubicacion, direccion, nombreSosp, instSosp, rolSosp, fecha, hora) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt1->bind_param("ssssssssssssss", $conducta,$codigo_postal, $seccion_electoral, $sexo, $ocupacion, $escolaridad, $explicacion, $ubicacion, $direccion, $nombre, $institucion, $rol, $fecha, $hora);
    $stmt1->execute();

     // Verificar si hubo algún error en la primera consulta
     if ($stmt1->errno) {
        throw new Exception("Error al insertar en denuncias: " . $stmt1->error);
    }


    // Confirmar la transacción
    $mysqli->commit();

    echo "¡Transacción completada con éxito!";
} catch (Exception $e) {
    // Revertir la transacción en caso de error
    $mysqli->rollback();
    echo "Error en la transacción: " . $e->getMessage();
}

// Cerrar la conexión
$mysqli->close();
?>
