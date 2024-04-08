
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $partFide=$_POST["partFide"];
    $tipo = $_POST["tipo"];
    $tipPart = $_POST["tipPart"];
    $rfc=$_POST["rfc"];
    $fide=$_POST["fide"];
    $razSocfide=$_POST["razSocfide"];
    $razSocfidu=$_POST["razSocfidu"];
    $rfcFide=$_POST["rfcFide"];
    $razFidu=$_POST["razFidu"];
    $rfcFidu=$_POST["rfcFidu"];
    $razSocFide=$_POST["razSocFide"];
    $rfcFidei=$_POST["rfcFidei"];
    $secProd=$_POST["secProd"];
    $ubiFide=$_POST["ubiFide"];
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e20_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($partFide,$tipo,$tipPart,$rfc,$fide,$razSocfide,
           $razSocfidu,$rfcFide,$razFidu,$rfcFidu,$razSocFide,$rfcFidei,$secProd,$ubiFide)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors"] = $error;
                header("Location: ../e20.php");
                die();
           }
           $datos["partFide"]=$actpartFideuc;
           $datos["tipo"]=$tipo;
           $datos["tipPart"]=$tipPart;
           $datos["rfc"]=$rfc;
           $datos["fide"]=$fide;
           $datos["razSocfide"]=$razSocfide;
           $datos["razSocfidu"]=$razSocfidu;
           $datos["rfcFide"]=$rfcFide;
           $datos["razFidu"]=$razFidu;
           $datos["rfcFidu"]=$rfcFidu;
           $datos["razSocFide"]=$razSocFide;
           $datos["rfcFidei"]=$rfcFidei;
           $datos["secProd"]=$secProd;
           $datos["ubiFide"]=$ubiFide;
           $_SESSION["fideicomisos"] = $datos;
           header("Location: ../e21.php");
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