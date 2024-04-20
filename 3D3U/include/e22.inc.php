
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $prop=$_FILES['prop'];
    $extra = $_FILES['extra'];
    
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "formulario_contr.inc.php";
            require_once "formulario_mod.inc.php";
            require_once '../../includes/config_session.inc.php';
            //manejo de errores
            $error=[];
            $datos=[];

           $datos["prop"]=$prop;
           $datos["extra"]=$extra;
        //    var_dump($_SESSION);
        //    exit;
           $_SESSION["extras"] = $datos;
           if(isset($_SESSION)){
                UploadData($pdo,$_SESSION["curriculares"],$_SESSION["ingresos"],$_SESSION["exServ"],$_SESSION["aspiracion"],$_SESSION["expLab"],$_SESSION["bienInm"],$_SESSION["vehiculos"],$_SESSION["bienMueb"],$_SESSION["inversiones"],$_SESSION["adeuPasiv"],$_SESSION["prestAcom"],$_SESSION["intereses"],$_SESSION["intereses2"],$_SESSION["apoyos"],$_SESSION["representacion"],$_SESSION["clientes"],$_SESSION["beneficiosPriv"],$_SESSION["fideicomisos"],$_SESSION["sat"],$_SESSION["extras"], $_SESSION["datos iniciales"]);
           } 
           header("Location: ../efinal.php");
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