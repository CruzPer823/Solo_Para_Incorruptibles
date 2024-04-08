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

function get_email(object $pdo, string $email){
    $query = "SELECT email FROM users WHERE email= :email;;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email",$email);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    return $results;
}
