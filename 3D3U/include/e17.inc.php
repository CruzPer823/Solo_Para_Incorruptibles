
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $dec=$_POST["dec"];
    $tipRep = $_POST["tipRep"];
    $iniRep=$_POST["iniRep"];
    $rep=$_POST["rep"];
    $razSocRep=$_POST["razSocRep"];
    $rrfcRep=$_POST["rrfcRep"];
    $remRep=$_POST["remRep"];
    $montRep=$_POST["montRep"];
    $ubi=$_POST["ubi"];
    $entFed=$_POST["entFed"];
    $secProd=$_POST["secProd"];
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e17_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($dec,$tipRep,$iniRep,$rep,$razSocRep,$rrfcRep,$remRep,$montRep,$ubi,$entFed,$secProd)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors"] = $error;
                header("Location: ../e17.php");
                die();
           }
           $datos["tipRep"]=$tipRep;
           $datos["dec"]=$dec;
           $datos["iniRep"]=$iniRep;
           $datos["rep"]=$rep;
           $datos["razSocRep"]=$razSocRep;
           $datos["rrfcRep"]=$rrfcRep;
           $datos["remRep"]=$remRep;
           $datos["montRep"]=$montRep;
           $datos["ubi"]=$ubi;
           $datos["entFed"]=$entFed;
           $datos["secProd"]=$secProd;
           $_SESSION["representacion"] = $datos;
           header("Location: ../e18.php");
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