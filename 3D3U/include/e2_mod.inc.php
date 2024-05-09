<?php
declare(strict_types=1);

function get_name(object $pdo, string $nombre){
    $query = "SELECT nombre FROM candidatos WHERE nombre= :name;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":name",$nombre);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;
}

function get_email(object $pdo, string $email){
    $query = "SELECT correo FROM candidatos WHERE correo= :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email",$email);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;
}
