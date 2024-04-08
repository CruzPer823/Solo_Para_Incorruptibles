<?php
// Conecta a la base de datos
$mysqli2 = new mysqli("localhost", "user","12345","SPI2");

// Verifica la conexión
if ($mysqli2->connect_error) {
    die("Error en la conexión: " . $mysqli2->connect_error);
}

// Obtiene el ID del registro a eliminar
$id = $_GET['id'];

// Prepara la consulta para eliminar el registro
$consulta = "DELETE FROM denuncia WHERE id = $id";

// Ejecuta la consulta
if ($mysqli2->query($consulta) === TRUE) {
    // La eliminación se realizó con éxito
    echo "Registro eliminado correctamente";
} else {
    // Si hay algún error, muestra el mensaje de error
    echo "Error al eliminar el registro: " . $mysqli2->error;
}

// Cierra la conexión
$mysqli2->close();
?>
