
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $prop=$_FILES['prop'];
    $extra = $_FILES['extra'];
    
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e21_contr.inc.php";
            require_once "formulario_contr.inc.php";
            require_once "formulario_mod.inc.php";
            require_once '../../includes/config_session.inc.php';
            //manejo de errores
            $error=[];
            $datos=[];

            if (!empty($_FILES['prop'])){
                $fileName=$_FILES['prop']['name'];
                $fileTmp=$_FILES['prop']['tmp_name'];
                $fileSize=$_FILES['prop']['size'];
                $fileError=$_FILES['prop']['error'];
                $fileExt=explode('.',$fileName);
                $fileActualExt=strtolower(end($fileExt));
                $allowed=array('pdf'); 
                $opSatFinalName=uploadImage( $fileName,  $fileTmp,  $fileSize,  $fileError,  $fileActualExt, $allowed );
                $datos["prop"]=$opSatFinalName;
            }
            if (!empty($_FILES['extra'])){
                $fileName=$_FILES['extra']['name'];
                $fileTmp=$_FILES['extra']['tmp_name'];
                $fileSize=$_FILES['extra']['size'];
                $fileError=$_FILES['extra']['error'];
                $fileExt=explode('.',$fileName);
                $fileActualExt=strtolower(end($fileExt));
                $allowed=array('pdf'); 
                $opNoSatFinalName=uploadImage( $fileName,  $fileTmp,  $fileSize,  $fileError,  $fileActualExt, $allowed );
                $datos["extra"]=$opNoSatFinalName;
            }
        //    var_dump($_SESSION);
        //    exit;
           $_SESSION["extras"] = $datos;
           if(isset($_SESSION)){
                UploadData($pdo,$_SESSION["curriculares"],$_SESSION["ingresos"],$_SESSION["exServ"],$_SESSION["aspiracion"],$_SESSION["expLab"],$_SESSION["bienInm"],$_SESSION["vehiculos"],$_SESSION["bienMueb"],$_SESSION["inversiones"],$_SESSION["adeuPasiv"],$_SESSION["prestAcom"],$_SESSION["intereses"],$_SESSION["intereses2"],$_SESSION["apoyos"],$_SESSION["representacion"],$_SESSION["clientes"],$_SESSION["beneficiosPriv"],$_SESSION["fideicomisos"],$_SESSION["sat"],$_SESSION["extras"], $_SESSION["datos iniciales"]);
           } 
           header("Location: ../efinal.php");
           $pdo=null;
           $stmt=null;
           die();
        }catch(PDOException $e){
            die("Process failed: ".$e->getMessage());
        }
}else{
    header("Location: ../login.php");
    die();
}