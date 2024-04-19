<?php
session_unset();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $explicacion=$_POST["explicacion"];

    try{
     require_once "dbh.inc.javier.php";
      require_once "denuncia2_mod.inc.php";
     require_once "denuncia2_contr.inc.php";
     //  //manejo de errores

      $error=[];

     if (is_input_empty($explicacion)){
          $error["empty_input"]="Debe llenar todos los campos";
     }
     if (is_exp_invalid($explicacion)){
          $error["invalid_exp"]="Sé más explicito, por favor";
     }

      require_once '../../includes/config_session.inc.php';
     if($error){
          $_SESSION["errors_denuncia2"] = $error;
          header("Location: ../Denuncia2.php");
          die();
     }
     $datos=[];
     $datos["explicacion"]=$explicacion;
     $_SESSION["explicacion_info"] = $datos;
     header("Location: ../Denuncia3.php");
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

// // Recibir código postal del formulario
// if(isset($_POST['CP'])&& isset($_POST['seccion_electoral']) && isset($_POST['sexo'])) {
//     $_SESSION['CP'] = $_POST['CP'];
//     $_SESSION['seccion_electoral'] = $_POST['seccion_electoral'];
//     $_SESSION['sexo'] = $_POST['sexo'];
//    if(!empty($_POST['ocupacion']) && !empty($_POST['escolaridad'])) {
//     $_SESSION['ocupacion'] = $_POST['ocupacion'];
//     $_SESSION['escolaridad'] = $_POST['escolaridad'];
//    }
//    if(!empty($_POST['ocupacion']) && empty($_POST['escolaridad'])){
//     $_SESSION['ocupacion'] = $_POST['ocupacion'];
//    }
//    if(!empty($_POST['escolaridad']) && empty($_POST['ocupacion'])){
//     $_SESSION['escolaridad'] = $_POST['escolaridad'];
//    }
//     // Redirigir a la siguiente página
//     header('Location: Denuncia2.php');
//     exit();
// 