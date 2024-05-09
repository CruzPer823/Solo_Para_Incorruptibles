<?php
// Conecta a la base de datos
require_once '../includes/dbh.inc.php';

// Obtiene el ID del registro a eliminar
$id = $_GET['id'];

// Prepara la consulta para eliminar el registro
$consulta = "DELETE FROM candidatos WHERE id = :id";
$stmt = $pdo->prepare($consulta);
$id_def = array(':id'=> $id);
if ($stmt->execute($id_def) === TRUE) {
    // La eliminación se realizó con éxito
    echo "Registro eliminado correctamente";
} else {
    // Si hay algún error, muestra el mensaje de error
    echo "Error al eliminar el registro: ";
}

