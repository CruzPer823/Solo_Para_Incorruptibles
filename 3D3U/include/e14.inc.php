
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $dec=$_POST["dec"];
    $nombEmp = $_POST["nombEmp"];
    $rfc=$_POST["rfc"];
    $porcPart=$_POST["porcPart"];
    $tipPart=$_POST["tipPart"];
    $remPart=$_POST["remPart"];
    $montMens=$_POST["montMens"];
    $ubi=$_POST["ubi"];
    $entFed=$_POST["entFed"];
    $ubiPais=$_POST["ubiPais"];
    $sectProd=$_POST["sectProd"];
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e14_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($dec,$nombEmp,$rfc,$porcPart,$tipPart,$remPart,$ubi,$entFed,$ubiPais,$sectProd)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors"] = $error;
                header("Location: ../e14.php");
                die();
           }
           $datos["dec"]=$dec;
           $datos["nombEmp"]=$nombEmp;
           $datos["rfc"]=$rfc;
           $datos["porcPart"]=$porcPart;
           $datos["tipPart"]=$tipPart;
           $datos["remPart"]=$remPart;
           $datos["montMens"]=$montMens;
           $datos["ubi"]=$ubi;
           $datos["entFed"]=$entFed;
           $datos["ubiPais"]=$ubiPais;
           $datos["sectProd"]=$sectProd;
           $_SESSION["intereses"] = $datos;
           header("Location: ../e15.php");
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