<?php
$mysqli = new mysqli("localhost", "user","12345","SPI2");

if ($mysqli->connect_error){
    echo "Error en la conexion " . $mysqli->connect_error;
    exit;
}