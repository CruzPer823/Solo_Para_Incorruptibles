
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tipBen=$_POST["tipBen"];
    $benef = $_POST["benef"];
    $oto = $_POST["oto"];
    $razSoc=$_POST["razSoc"];
    $rfc=$_POST["rfc"];
    $formRece=$_POST["formRece"];
    $espBen=$_POST["espBen"];
    $montMnes=$_POST["montMnes"];
    $tipMon=$_POST["tipMon"];
    $sectProd=$_POST["sectProd"];
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e19_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($tipBen,$benef,$oto,$razSoc,$rfc,$formRece,$espBen,$montMnes,$tipMon,$sectProd)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors"] = $error;
                header("Location: ../e19.php");
                die();
           }
           $datos["tipBen"]=$tipBen;
           $datos["benef"]=$benef;
           $datos["oto"]=$oto;
           $datos["razSoc"]=$razSoc;
           $datos["rfc"]=$rfc;
           $datos["formRece"]=$formRece;
           $datos["espBen"]=$espBen;
           $datos["montMnes"]=$montMnes;
           $datos["tipMon"]=$tipMon;
           $datos["sectProd"]=$sectProd;
           $_SESSION["beneficiosPriv"] = $datos;
           header("Location: ../e20.php");
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