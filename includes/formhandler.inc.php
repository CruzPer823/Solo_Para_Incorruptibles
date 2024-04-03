<?php
session_start();

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if($_POST["pass"] == $_POST["passc"]){
        $name=$_POST["nombre"];
        $email = $_POST["correo"];
        $pass=md5($_POST["pass"]);
        try{
            require_once "dbh.inc.php";
            $query = "INSERT INTO users (email,psw,nombre) VALUES (?, ?, ?)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$email,$pass,$name]);
            $pdo=null;
            $stmt=null;
            $_SESSION['status']='¡Usuario registrado correctamente!';
            header("Location: ../login.php");
            exit();
        }catch(PDOException $e){
            die("Process failed: ".$e->getMessage());
        }
    }else{
        $_SESSION['status']="Las contraseñas no coinciden";
        header("Location: ../registro.php");
    }
    } else {
        header("Location: ../login.html");
    }
