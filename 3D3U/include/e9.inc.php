
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tipVeh=$_POST["tipVeh"];
        $marca = $_POST["marca"];
        $modelo=$_POST["modelo"];
        $anio=$_POST["anio"];
        $entFed=$_POST["entFed"];
        $pais=$_POST["pais"];
        $terCop=$_POST["terCop"];
        $nomTer=$_POST["nomTer"];
        $frcTer=$_POST["frcTer"];
        $formAdq=$_POST["formAdq"];
        $formPag=$_POST["formPag"];
        $valAdq=$_POST["valAdq"];
        $tipMo=$_POST["tipMo"];
        $adqVeh=$_POST["adqVeh"];
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e9_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($tipVeh,$marca,$modelo,$anio,$entFed,$pais,$terCop,$nomTer,$frcTer,$formAdq,$formPag,$valAdq,$tipMo,$adqVeh)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors"] = $error;
                header("Location: ../e9.php");
                die();
           }
           $datos["tipVeh"]=$tipVeh;
           $datos["marca"]=$marca;
           $datos["modelo"]=$modelo;
           $datos["anio"]=$anio;
           $datos["entFed"]=$entFed;
           $datos["pais"]=$pais;
           $datos["terCop"]=$terCop;
           $datos["nomTer"]=$nomTer;
           $datos["frcTer"]=$frcTer;
           $datos["formAdq"]=$formAdq;
           $datos["formPag"]=$formPag;
           $datos["valAdq"]=$valAdq;
           $datos["tipMo"]=$tipMo;
           $datos["adqVeh"]=$adqVeh;
           $_SESSION["vehiculos"] = $datos;
           header("Location: ../e10.php");
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