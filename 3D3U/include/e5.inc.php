
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $RemAct=$_POST["RemAct"];
        $inActInd = $_POST["inActInd"];
        $remNet=$_POST["remNet"];
        $ingInd=$_POST["ingInd"];
        $razSoc=$_POST["razSoc"];
        $tipNeg=$_POST["tipNeg"];
        $ingFin=$_POST["ingFin"];
        $insGan=$_POST["insGan"];
        $ingProf=$_POST["ingProf"];
        $tipSer=$_POST["tipSer"];
        $ingEnaj=$_POST["ingEnaj"];
        $tipBienEnaj=$_POST["tipBienEnaj"];
        $otrIng=$_POST["otrIng"];
        $espIng=$_POST["espIng"];

        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e5_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors_e5"] = $error;
                header("Location: ../e5.php");
                die();
           }
           $datos["RemAct"]=$RemAct;
           $datos["inActInd"]=$inActInd;
           $datos["remNet"]=$remNet;
           $datos["ingInd"]=$ingInd;
           $datos["razSoc"]=$razSoc;
           $datos["tipNeg"]=$tipNeg;
           $datos["ingFin"]=$ingFin;
           $datos["insGan"]=$insGan;
           $datos["ingProf"]=$ingProf;
           $datos["tipSer"]=$tipSer;
           $datos["ingEnaj"]=$ingEnaj;
           $datos["tipBienEnaj"]=$tipBienEnaj;
           $datos["otrIng"]=$otrIng;
           $datos["espIng"]=$espIng;
           $_SESSION["exServ"] = $datos;
           header("Location: ../e6.php");
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