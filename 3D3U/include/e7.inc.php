
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $secLab=$_POST["secLab"];
        $nivGob = $_POST["nivGob"];
        $ambPub=$_POST["ambPub"];
        $nomEntPub=$_POST["nomEntPub"];
        $rfc=$_POST["rfc"];
        $areAds=$_POST["areAds"];
        $emp=$_POST["emp"];
        $espFunPri=$_POST["espFunPri"];
        $secPer=$_POST["secPer"];
        $fecIng=$_POST["fecIng"];
        $fecEgr=$_POST["fecEgr"];
        $ubi=$_POST["ubi"];
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e7_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($secLab,$nivGob,$ambPub,$nomEntPub,$rfc,$areAds,$emp,$espFunPri,$secPer,$fecIng,$fecEgr,$ubi)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors"] = $error;
                header("Location: ../e7.php");
                die();
           }
           $datos["secLab"]=$secLab;
           $datos["nivGob"]=$nivGob;
           $datos["ambPub"]=$ambPub;
           $datos["nomEntPub"]=$nomEntPub;
           $datos["rfc"]=$rfc;
           $datos["areAds"]=$areAds;
           $datos["emp"]=$emp;
           $datos["espFunPri"]=$espFunPri;
           $datos["secPer"]=$secPer;
           $datos["fecIng"]=$fecIng;
           $datos["fecEgr"]=$fecEgr;
           $datos["ubi"]=$ubi;
           $_SESSION["expLab"] = $datos;
           header("Location: ../e8.php");
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