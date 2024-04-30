<?php
session_unset();
if($_SERVER["REQUEST_METHOD"] == "POST"){
          $c1 = $_POST['conductas1'];
          $c2 = $_POST['conductas2'];
          $c3 = $_POST['conductas3'];
          $c4 = $_POST['conductas4'];
          $c5 = $_POST['conductas5'];
          $c6 = $_POST['conductas6'];
          $c7 = $_POST['conductas7'];
          $c8 = $_POST['conductas8'];
          $fileName=$_FILES['imagen']['name'];
          $fileTmp=$_FILES['imagen']['tmp_name'];
          $fileSize=$_FILES['imagen']['size'];
          $fileError=$_FILES['imagen']['error'];
          $fileExt=explode('.',$fileName);
          $fileActualExt=strtolower(end($fileExt));
          $allowed=array('jpg','jpeg','png'); 

    try{
     require_once "dbh.inc.php";
     
      require_once "denuncia6_mod.inc.php";
     require_once "denuncia6_contr.inc.php";
     require_once "form_contr.inc.php";
     require_once "form_mod.inc.php";
     

     $picFinalName=uploadImage( $fileName,  $fileTmp,  $fileSize,  $fileError,  $fileActualExt, $allowed );
     // //  //manejo de errores
      $error=[];
     
     if (is_input_empty($c1,$c2,$c3,$c4,$c5,$c6)){
          $error["empty_input"]="Debe seleccionar al menos un dato";
     }
      require_once 'config_session.inc.php';
     if($error){
          $_SESSION["errors_denuncia6"] = $error;
          header("Location: ../ESC/Denuncia6.php");
          die();
     }
     
     $datos=[];
     $datos["c1"]=$c1;
     $datos["c2"]=$c2;
     $datos["c3"]=$c3;
     $datos["c4"]=$c4;
     $datos["c5"]=$c5;
     $datos["c6"]=$c6;
     $datos["c7"]=$c7;
     $datos["c8"]=$c8;
     $_SESSION["conductas"] = $datos;
     $_SESSION["evidencia"]=$picFinalName;
     $random=random_int(1,10000);
     $_SESSION["idDenuncia"] = $_SESSION["datos_iniciales"]["seccion_electoral"].contador($pdo).$random;  
     if(isset($_SESSION)){
          UploadData($pdo,$_SESSION["datos_iniciales"],$_SESSION["explicacion_info"],$_SESSION["ubicacion_info"],$_SESSION["sospechoso_info"],$_SESSION["time_info"],$_SESSION["conductas"],$_SESSION["evidencia"],$_SESSION["idDenuncia"]);
     } 
     header("Location: ../ESC/DenunciaConfirm.php");
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