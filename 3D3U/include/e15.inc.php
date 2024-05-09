
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $dec=$_POST["dec"];
    $tipIns = $_POST["tipIns"];
    $pues=$_POST["pues"];
    $iniPart=$_POST["iniPart"];
    $rem=$_POST["rem"];
    $montMens=$_POST["montMens"];
    $ubi=$_POST["ubi"];
    $entFed=$_POST["entFed"];
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e15_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($dec,$tipIns,$pues,$iniPart,$rem,$ubi,$entFed)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors"] = $error;
                header("Location: ../e15.php");
                die();
           }
           $datos["dec"]=$dec;
           $datos["tipIns"]=$tipIns;
           $datos["pues"]=$pues;
           $datos["iniPart"]=$iniPart;
           $datos["rem"]=$rem;
           $datos["montMens"]=$montMens;
           $datos["ubi"]=$ubi;
           $datos["entFed"]=$entFed;
           $_SESSION["intereses2"] = $datos;
           header("Location: ../e16.php");
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