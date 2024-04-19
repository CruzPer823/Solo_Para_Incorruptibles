<?php
session_unset();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $cp=$_POST["CP"];
    $s_e= $_POST["seccion_electoral"];
    $sexo=$_POST["sexo"];

    try{
     require_once "dbh.inc.javier.php";
      require_once "denuncia1_mod.inc.php";
     require_once "denuncia1_contr.inc.php";
     //  //manejo de errores

      $error=[];

     if (is_input_empty($cp, $s_e, $sexo)){
          $error["empty_input"]="Debe llenar todos los campos!";
     }
     if (is_postal_code_invalid($cp)){
          $error["invalid_cp"]="Debe de ingresar un código postal valido";
     }
     if (is_electoral_zone_invalid($s_e)){
          $error["invalid_se"]="Debe de ingresar una zona electoral valida";
     }

      require_once '../../includes/config_session.inc.php';
     if($error){
          $_SESSION["errors_denuncia1"] = $error;
          header("Location: ../Denuncia1.php");
          die();
     }
     $datos=[];
     $datos["CP"]=$cp;
     $datos["seccion_electoral"]=$seccion_electoral;
     $datos["sexo"]=$sexo;
     if(!empty($_POST['ocupacion']) && !empty($_POST['escolaridad'])) {
          $datos["ocupacion"] = $_POST['ocupacion'];
          $datos["escolaridad"] = $_POST['escolaridad'];
     }
     if(!empty($_POST['ocupacion']) && empty($_POST['escolaridad'])){
          $datos["ocupacion"] = $_POST['ocupacion'];
     }
     if(!empty($_POST['escolaridad']) && empty($_POST['ocupacion'])){
          $datos["escolaridad"] = $_POST['escolaridad'];
     }
     $_SESSION["datos_iniciales"] = $datos;
     header("Location: ../Denuncia2.php");
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