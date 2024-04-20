<?php
$dsn= "mysql:host=localhost;dbname=SPI2";
$dbusername="user";
$dbpassword = "12345";
try{
    $pdo = new PDO($dsn, $dbusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo "Conección fallida".$e->getMessage();
}