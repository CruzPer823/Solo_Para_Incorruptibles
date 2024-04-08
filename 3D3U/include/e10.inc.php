
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tipBie=$_POST["tipBie"];
        $razSoc = $_POST["razSoc"];
        $terc=$_POST["terc"];
        $nomTer=$_POST["nomTer"];
        $rfcTer=$_POST["rfcTer"];
        $descGen=$_POST["descGen"];
        $formAdq=$_POST["formAdq"];
        $tipMo=$_POST["tipMo"];
        $adqBie=$_POST["adqBie"];
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e10_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($tipBie,$razSoc,$terc,$nomTer,$rfcTer,$descGen,$formAdq,$tipMo,$adqBie)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors"] = $error;
                header("Location: ../e10.php");
                die();
           }
           $datos["tipBie"]=$tipBie;
           $datos["razSoc"]=$razSoc;
           $datos["terc"]=$terc;
           $datos["nomTer"]=$nomTer;
           $datos["rfcTer"]=$rfcTer;
           $datos["descGen"]=$descGen;
           $datos["formAdq"]=$formAdq;
           $datos["tipMo"]=$tipMo;
           $datos["adqBie"]=$adqBie;
           $_SESSION["bienMueb"] = $datos;
           header("Location: ../e11.php");
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