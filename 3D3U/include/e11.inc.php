
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tipInv=$_POST["tipInv"];
    $banc = $_POST["banc"];
    $terc=$_POST["terc"];
    $nomTer=$_POST["nomTer"];
    $rfcTer=$_POST["rfcTer"];
    $ubiInv=$_POST["ubiInv"];
    $inst=$_POST["inst"];
    $rfc=$_POST["rfc"];
    $paiLoca=$_POST["paiLoca"];
    $tieFond=$_POST["tieFond"];
    $orgProv=$_POST["orgProv"];
    $tiePosMon=$_POST["tiePosMon"];
    $tieSeg=$_POST["tieSeg"];
    $tieVal=$_POST["tieVal"];
    $tieAfo=$_POST["tieAfo"];
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e11_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($tipInv,$banc,$terc,$nomTer,$rfcTer,$ubiInv,$inst,$rfc,$paiLoca,$tieFond,$orgProv,$tiePosMon,$tieSeg,$tieVal,$tieAfo)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors"] = $error;
                header("Location: ../e11.php");
                die();
           }
           $datos["tipInv"]=$tipInv;
           $datos["banc"]=$banc;
           $datos["terc"]=$terc;
           $datos["nomTer"]=$nomTer;
           $datos["rfcTer"]=$rfcTer;
           $datos["ubiInv"]=$ubiInv;
           $datos["inst"]=$inst;
           $datos["rfc"]=$rfc;
           $datos["paiLoca"]=$paiLoca;
           $datos["tieFond"]=$tieFond;
           $datos["orgProv"]=$orgProv;
           $datos["tiePosMon"]=$tiePosMon;
           $datos["tieSeg"]=$tieSeg;
           $datos["tieVal"]=$tieVal;
           $datos["tieAfo"]=$tieAfo;
           $_SESSION["inversiones"] = $datos;
           header("Location: ../e12.php");
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