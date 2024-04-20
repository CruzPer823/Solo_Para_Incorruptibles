<?php
session_unset();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    try{
     require_once "dbh.inc.php";
     
      require_once "denuncia6_mod.inc.php";
     require_once "denuncia6_contr.inc.php";
     
     // //  //manejo de errores
      $error=[];

     if (is_input_empty($fecha, $hora)){
          $error["empty_input"]="Debe llenar todos los campos";
     }
      require_once 'config_session.inc.php';
     if($error){
          $_SESSION["errors_denuncia5"] = $error;
          header("Location: ../ESC/Denuncia5.php");
          die();
     }

     $datos=[];
     $datos["fecha"]=$fecha;
     $datos["hora"]=$hora;
     $_SESSION["time_info"] = $datos;
     header("Location: ../ESC/Denuncia6.php");
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