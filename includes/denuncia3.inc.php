<?php
session_unset();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $estados=$_POST["estados"];    
    $municipio=$_POST["municipios"];
    $direccion =  $_POST['direccion'];
    
   
    try{
     require_once "dbh.inc.php";
      require_once "denuncia3_mod.inc.php";
     require_once "denuncia3_contr.inc.php";
     //  //manejo de errores

      $error=[];

     if (is_input_empty($estados, $municipio, $direccion)){
          $error["empty_input"]="Debe llenar todos los campos";
     }
     
     if (is_dir_invalid($direccion)){
          $error["invalid_dir"]="Ingresa una dirección valida";
     }
     

     
     require_once 'config_session.inc.php';
     if($error){
          $_SESSION["errors_denuncia3"] = $error;
          header("Location: ../ESC/Denuncia3.php");
          die();
     }

     $datos=[];
     $datos["estado"]=$estados;
     $datos["municipio"]=$municipio;
     $datos["direccion"]=$direccion;
     $_SESSION["ubicacion_info"] = $datos;
     header("Location: ../ESC/Denuncia4.php");
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