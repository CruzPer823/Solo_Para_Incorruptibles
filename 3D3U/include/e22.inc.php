
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $prop=$_FILES['prop'];
    $extra = $_FILES['extra'];
    
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "formulario_mod.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           $datos["prop"]=$prop;
           $datos["extra"]=$extra;
           
           $_SESSION["extras"] = $datos;

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