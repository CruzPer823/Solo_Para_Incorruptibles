<?php
declare(strict_types=1);

function get_id(object $pdo, string $id){
    $consulta = "SELECT id FROM denuncia WHERE id = :id";
    $stmt = $pdo->prepare($consulta);
    $stmt->bindParam(":id",$id);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;
}