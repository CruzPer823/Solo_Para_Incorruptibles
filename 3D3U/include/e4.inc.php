
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $RemAct=$_POST["RemAct"];
        $inActInd = $_POST["inActInd"];
        $razSoc=$_POST["razSoc"];
        $tipNeg=$_POST["tipNeg"];
        $ingActFin=$_POST["ingActFin"];
        $insGan=$_POST["insGan"];
        $ingProf=$_POST["ingProf"];
        $servPres=$_POST["servPres"];
        $otrIng=$_POST["otrIng"];
        $espTip=$_POST["espTip"];

        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e4_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($RemAct,$inActInd,$razSoc,$tipNeg,$ingActFin,$insGan,$ingProf,$servPres,$otrIng,$espTip)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors_e4"] = $error;
                header("Location: ../e4.php");
                die();
           }
           $datos["RemAct"]=$RemAct;
           $datos["inActInd"]=$inActInd;
           $datos["razSoc"]=$razSoc;
           $datos["tipNeg"]=$tipNeg;
           $datos["ingActFin"]=$ingActFin;
           $datos["insGan"]=$insGan;
           $datos["ingProf"]=$ingProf;
           $datos["servPres"]=$servPres;
           $datos["otrIng"]=$otrIng;
           $datos["espTip"]=$espTip;
           $_SESSION["ingresos"] = $datos;
           header("Location: ../e5.php");
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