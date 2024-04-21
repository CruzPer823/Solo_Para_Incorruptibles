
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $benPro=$_POST["benPro"];
    $nomPro = $_POST["nomPro"];
    $insApo=$_POST["insApo"];
    $nivGob=$_POST["nivGob"];
    $tipApo=$_POST["tipApo"];
    $recApo=$_POST["recApo"];
    $montApro=$_POST["montApro"];
    $espApo=$_POST["espApo"];
      
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e16_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($benPro,$nomPro,$insApo,$nivGob,$tipApo,$recApo,$espApo)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors"] = $error;
                header("Location: ../e16.php");
                die();
           }
           $datos["benPro"]=$benPro;
           $datos["nomPro"]=$nomPro;
           $datos["insApo"]=$insApo;
           $datos["nivGob"]=$nivGob;
           $datos["tipApo"]=$tipApo;
           $datos["recApo"]=$recApo;
           $datos["montApro"]=$montApro;
           $datos["espApo"]=$espApo;
           $_SESSION["apoyos"] = $datos;
           header("Location: ../e17.php");
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