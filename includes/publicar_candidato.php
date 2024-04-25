<?php
// Conecta a la base de datos
require 'dbh.inc.php';

$id = $_GET['id'];

$sql = "UPDATE candidatos
        SET estado = 1
        WHERE id_3d3 = :candidatoId";

        $stmt4 = $pdo->prepare($sql);
        $datos = array(':candidatoId'=> $id);
        if($stmt4->execute($datos)){
            echo '3 de 3 publicado correctamente';
        }
        else{
            echo 'ERROR AL PUBLICAR 3 de 3';
        }
$pdo = null;