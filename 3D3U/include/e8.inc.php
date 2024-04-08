
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $bien=$_POST["bien"];
        $porProp = $_POST["porProp"];
        $sup=$_POST["sup"];
        $supCons=$_POST["supCons"];
        $terc=$_POST["terc"];
        $nomTer=$_POST["nomTer"];
        $rfcTerr=$_POST["rfcTerr"];
        $formAdq=$_POST["formAdq"];
        $formPag=$_POST["formPag"];
        $trans=$_POST["trans"];
        $relTrans=$_POST["relTrans"];
        $valAdq=$_POST["valAdq"];
        $docVal=$_POST["docVal"];
        $tipMon=$_POST["tipMon"];
        $adqInm=$_POST["adqInm"];
        $valAdq=$_POST["valAdq"];
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e8_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($bien,$porProp,$sup,$supCons,$terc,$nomTer,$rfcTerr,$formAdq,$formPag,$trans,$relTrans,$valAdq,$docVal,$tipMon,$adqInm,$valAdq)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors"] = $error;
                header("Location: ../e8.php");
                die();
           }
           $datos["bien"]=$bien;
           $datos["porProp"]=$porProp;
           $datos["sup"]=$sup;
           $datos["supCons"]=$supCons;
           $datos["terc"]=$terc;
           $datos["nomTer"]=$nomTer;
           $datos["rfcTerr"]=$rfcTerr;
           $datos["formAdq"]=$formAdq;
           $datos["formPag"]=$formPag;
           $datos["trans"]=$trans;
           $datos["relTrans"]=$relTrans;
           $datos["valAdq"]=$valAdq;
           $datos["docVal"]=$docVal;
           $datos["tipMon"]=$tipMon;
           $datos["adqInm"]=$adqInm;
           $datos["valAdq"]=$valAdq;
           $_SESSION["bienInm"] = $datos;
           header("Location: ../e9.php");
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