
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $actLuc=$_POST["actLuc"];
    $dec = $_POST["dec"];
    $nomEmp = $_POST["nomEmp"];
    $rfc=$_POST["rfc"];
    $cliPrin=$_POST["cliPrin"];
    $razSoc=$_POST["razSoc"];
    $rfcCli=$_POST["rfcCli"];
    $sectProd=$_POST["sectProd"];
    $montApro=$_POST["montApro"];
    $ubi=$_POST["ubi"];
    $entFed=$_POST["entFed"];
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e18_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($actLuc,$dec,$nomEmp,$rfc,$cliPrin,$razSoc,$rfcCli,$sectProd,$montApro,$ubi,$entFed)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors"] = $error;
                header("Location: ../e18.php");
                die();
           }
           $datos["actLuc"]=$actLuc;
           $datos["dec"]=$dec;
           $datos["rfc"]=$rfc;
           $datos["cliPrin"]=$cliPrin;
           $datos["razSoc"]=$razSoc;
           $datos["rfcCli"]=$rfcCli;
           $datos["sectProd"]=$sectProd;
           $datos["montApro"]=$montApro;
           $datos["ubi"]=$ubi;
           $datos["entFed"]=$entFed;
           $datos["nomEmp"]=$nomEmp;
           $_SESSION["clientes"] = $datos;
           header("Location: ../e19.php");
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