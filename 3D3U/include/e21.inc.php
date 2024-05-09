
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $opiSat=$_FILES['opiSat'];
    $opiNoSat = $_FILES['opiNoSat'];
    
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e21_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

            // var_dump(is_empty($_FILES));
            // exit;
            if (!empty($_FILES['opiSat'])){
                $fileName=$_FILES['opiSat']['name'];
                $fileTmp=$_FILES['opiSat']['tmp_name'];
                $fileSize=$_FILES['opiSat']['size'];
                $fileError=$_FILES['opiSat']['error'];
                $fileExt=explode('.',$fileName);
                $fileActualExt=strtolower(end($fileExt));
                $allowed=array('pdf'); 
                $opSatFinalName=uploadImage( $fileName,  $fileTmp,  $fileSize,  $fileError,  $fileActualExt, $allowed );
                $datos["opiSat"]=$opSatFinalName;
            }
            if (!empty($_FILES['opiNoSat'])){
                $fileName=$_FILES['opiNoSat']['name'];
                $fileTmp=$_FILES['opiNoSat']['tmp_name'];
                $fileSize=$_FILES['opiNoSat']['size'];
                $fileError=$_FILES['opiNoSat']['error'];
                $fileExt=explode('.',$fileName);
                $fileActualExt=strtolower(end($fileExt));
                $allowed=array('pdf'); 
                $opNoSatFinalName=uploadImage( $fileName,  $fileTmp,  $fileSize,  $fileError,  $fileActualExt, $allowed );
                $datos["opiNoSat"]=$opNoSatFinalName;
            }


           require_once '../../includes/config_session.inc.php';
           if($error){
            $_SESSION["errors"] = $error;
            header("Location: ../e21.php");
            die();
       }
           $_SESSION["sat"] = $datos;
           header("Location: ../e22.php");
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