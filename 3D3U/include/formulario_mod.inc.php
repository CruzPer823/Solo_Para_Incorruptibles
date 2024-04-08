<?php
declare(strict_types=1);

function get_name(object $pdo, string $name){
    $query = "SELECT nombre FROM users WHERE nombre= :nombre;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":nombre",$name);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;
}
function almacenarInformacion(object $pdo){
    $query = "SELECT nombre FROM users WHERE nombre= :nombre;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":nombre",);
    $stmt->execute();
}