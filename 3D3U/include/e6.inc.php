
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $cargo=$_POST["cargo"];
        $detalles = $_POST["detalles"];
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e6_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($cargo,$detalles)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors_e6"] = $error;
                header("Location: ../e6.php");
                die();
           }
           $datos["cargo"]=$cargo;
           $datos["detalles"]=$detalles;
          
           $_SESSION["aspiracion"] = $datos;
           header("Location: ../e7.php");
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