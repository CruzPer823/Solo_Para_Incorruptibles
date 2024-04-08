
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $opiSat=$_FILES['opiSat'];
    $opiNoSat = $_FILES['opiNoSat'];
    
      
        try{
            require_once "../../includes/dbh.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           $datos["opiSat"]=$opiSat;
           $datos["opiNoSat"]=$opiNoSat;
           
           $_SESSION["sat"] = $datos;
           header("Location: ../e22.php");
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