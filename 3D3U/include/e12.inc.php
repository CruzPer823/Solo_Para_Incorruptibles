
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tipAde=$_POST["tipAde"];
    $adqAde = $_POST["adqAde"];
    $montAde=$_POST["montAde"];
    $tipMon=$_POST["tipMon"];
    $tieCod=$_POST["tieCod"];
    $ter=$_POST["ter"];
    $nomTer=$_POST["nomTer"];
    $rfcTer=$_POST["rfcTer"];
    $otoCre=$_POST["otoCre"];
    $ubiAde=$_POST["ubiAde"];
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e12_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($tipAde,$adqAde,$montAde,$tipMon,$tieCod,$ter,$nomTer,$rfcTer,$otoCre,$ubiAde)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors"] = $error;
                header("Location: ../e12.php");
                die();
           }
           $datos["tipAde"]=$tipAde;
           $datos["adqAde"]=$adqAde;
           $datos["montAde"]=$montAde;
           $datos["tipMon"]=$tipMon;
           $datos["tieCod"]=$tieCod;
           $datos["ter"]=$ter;
           $datos["nomTer"]=$nomTer;
           $datos["rfcTer"]=$rfcTer;
           $datos["otoCre"]=$otoCre;
           $datos["ubiAde"]=$ubiAde;
           $_SESSION["adeuPasiv"] = $datos;
           header("Location: ../e13.php");
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