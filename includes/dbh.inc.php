<?php
require 'vendor/autoload.php';
$dotenv=Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$dsn= $_ENV["DSN"];
$dbusername=$_ENV["USER"];
$dbpassword = $_ENV["KEY"];
try{
    $pdo = new PDO($dsn, $dbusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo "Conección fallida".$e->getMessage();
}