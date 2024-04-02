<?php
$dsn= "mysql:host=localhost;dbname=spi";
$dbusername="root";
$dbpassword = "r2abYw1Yn[MMftHF";
try{
    $pdo = new PDO($dsn, $dbusername,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo "Conección fallida".$e->getMessage();
}