
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tipBie=$_POST["tipBie"];
    $inmu = $_POST["inmu"];
    $vehi=$_POST["vehi"];
    $marc=$_POST["marc"];
    $mod=$_POST["mod"];
    $Anio=$_POST["Anio"];
    $numSer=$_POST["numSer"];
    $ubiRegi=$_POST["ubiRegi"];
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e13_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($tipBie,$inmu,$vehi,$marc,$mod,$Anio,$numSer,$ubiRegi)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors"] = $error;
                header("Location: ../e13.php");
                die();
           }
           $datos["tipBie"]=$tipBie;
           $datos["inmu"]=$inmu;
           $datos["vehi"]=$vehi;
           $datos["marc"]=$marc;
           $datos["mod"]=$mod;
           $datos["Anio"]=$Anio;
           $datos["numSer"]=$numSer;
           $datos["ubiRegi"]=$ubiRegi;
           $_SESSION["prestAcom"] = $datos;
           header("Location: ../e14.php");
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