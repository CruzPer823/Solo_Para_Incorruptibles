<?php
session_unset();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id =$_POST['folioBusq'];

    try{
     require_once "dbh.inc.php";
    require_once "denunciaFolio_mod.inc.php";
    require_once "denunciaFolio_contr.inc.php";
     //  //manejo de errores
     
      $error=[];

     if (is_input_empty($id)){
          $error["empty_input"]="Debe llenar todos los campos";
     }else{
        if (id_not_taken($pdo,$id)){
            $error["not_taken"]= "El id buscado no existe en la base de datos ";
         }
     }
     

      require_once 'config_session.inc.php';
     if($error){
          $_SESSION["errors_denunciaFolio"] = $error;
          header("Location: ../ESC/denunciaFolio.php");
          die();
     }
     $datos=[];
     $_SESSION["idFolioBusqueda"] = $id;
     header("Location: ../ESC/folioResul.php");
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