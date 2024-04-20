<?php
session_unset();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombreSosp =  $_POST['nombre'];
    $instSosp = $_POST['institucion'];
    $rolSosp = $_POST['rol'];

    try{
     require_once "dbh.inc.php";
     
      require_once "denuncia4_mod.inc.php";
     require_once "denuncia4_contr.inc.php";
     
     // //  //manejo de errores
      $error=[];

     if (is_input_empty($nombreSosp, $instSosp, $rolSosp)){
          $error["empty_input"]="Debe llenar todos los campos";
     }
      require_once 'config_session.inc.php';
     if($error){
          $_SESSION["errors_denuncia4"] = $error;
          header("Location: ../ESC/Denuncia4.php");
          die();
     }

     $datos=[];
     $datos["nombreSosp"]=$nombreSosp;
     $datos["instSosp"]=$instSosp;
     $datos["rolSosp"]=$rolSosp;
     $_SESSION["sospechoso_info"] = $datos;
     header("Location: ../ESC/Denuncia5.php");
     $pdo=null;
     $stmt=null;
     die();
  }catch(PDOException $e){
      die("Process failed: ".$e->getMessage());
  }
}else{
echo"no";
die();
}