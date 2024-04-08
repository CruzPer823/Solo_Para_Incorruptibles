
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $ulgrado=$_POST["ulgrado"];
        $insEdu = $_POST["insEdu"];
        $carrera=$_POST["carrera"];
        $estatus=$_POST["estatus"];
        $fecha=$_POST["fecha"];
        $ubiIns=$_POST["ubiIns"];
        $docEdu=$_FILES['docEdu'];
        $fileName=$_FILES['docEdu']['name'];
        $fileTmp=$_FILES['docEdu']['tmp_name'];
        $fileSize=$_FILES['docEdu']['size'];
        $fileError=$_FILES['docEdu']['error'];
        $fileExt=explode('.',$fileName);
        $fileActualExt=strtolower(end($fileExt));
        $allowed=array('jpg','jpeg','png','pdf');
        if(in_array($fileActualExt, $allowed)){
            if($fileError==0){
                if($fileSize<10000000){
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination='uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmp,$fileDestination);
                    header("Location: e3.php?success");
                    die();
                }else{
                    echo "Pesado";
                }

            }else{
                echo "Hubo un error";
            }
        }else{
            echo "Extension no permitida";
        }
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e3_mod.inc.php";
            require_once "e3_contr.inc.php";
            //manejo de errores

            $error=[];
            $datos=[];

           if (is_input_empty($ulgrado,$insEdu,$carrera,$estatus,$fecha,$ubiIns)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           
           require_once '../../includes/config_session.inc.php';

           if($error){
                $_SESSION["errors_e3"] = $error;
                header("Location: ../e3.php");
                die();
           }
           $datos["ulgrado"]=$ulgrado;
           $datos["insEdu"]=$insEdu;
           $datos["carrera"]=$carrera;
           $datos["estatus"]=$estatus;
           $datos["fecha"]=$fecha;
           $datos["ubiIns"]=$ubiIns;
           $datos["fileName"]=$fileName;
           $datos["fileTmp"]=$fileTmp;
           $datos["fileSize"]=$fileSize;
           $datos["fileError"]=$fileError;
           $_SESSION["curriculares"] = $datos;
           header("Location: ../e4.php");
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