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

function set_user(object $pdo ,string $name,string $email, string $pass){
    $query = "INSERT INTO users(nombre, email, psw) VALUES (:nombre,:email,:psw);";
    $stmt = $pdo->prepare($query);
    $options=[
        'cost' => 12
    ];
    $hashedPwd = password_hash($pass, PASSWORD_BCRYPT,$options);
    $stmt->bindParam(":nombre",$name);
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":psw",$hashedPwd);
    $stmt->execute();
}