
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name=$_POST["nombre"];
        $partido = $_POST["partido"];
        $correo=$_POST["correo"];
        $docEdu=$_FILES['foto'];
        $fileName=$_FILES['foto']['name'];
        $fileTmp=$_FILES['foto']['tmp_name'];
        $fileSize=$_FILES['foto']['size'];
        $fileError=$_FILES['foto']['error'];
        $fileExt=explode('.',$fileName);
        $fileActualExt=strtolower(end($fileExt));
        $allowed=array('jpg','jpeg','png');     
        try{
            require_once "../../includes/dbh.inc.php";
            require_once "e2_mod.inc.php";
            require_once "e2_contr.inc.php";

            $picFinalName=uploadImage( $fileName,  $fileTmp,  $fileSize,  $fileError,  $fileActualExt, $allowed );
            //manejo de errores

            $error=[];

           if (is_input_empty($name, $partido, $correo)){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           if(is_email_invalid($correo)){
                $error["invalid_email"]="El correo debe ser válido!";
           }
          
           if(is_name_taken($pdo, $name)){
                $error["name_taken"]="Alguien con ese nombre ya se ha registrado!";
           }
           if(is_email_taken($pdo, $correo)){
                $error["email_taken"]="Alguien ya ha registrado ese correo!";
           }
            require_once '../../includes/config_session.inc.php';
           if($error){
                $_SESSION["errors_e2"] = $error;
                //agregar funcion que elimina la imagen subida
                deleteImage($picFinalName);
                header("Location: ../e2.php");
                die();
           }
           $datos=[];
           $datos["nombre"]=$name;
           $datos["partido"]=$partido;
           $datos["correo"]=$correo;
           $datos["picName"]=$picFinalName;
           $_SESSION["datos iniciales"] = $datos;
           header("Location: ../e3.php");
           $pdo=null;
           $stmt=null;
           die();
        }catch(PDOException $e){
          deleteImage($picFinalName);
          die("Process failed: ".$e->getMessage());
        }
}else{
    header("Location: ../login.php");
    die();
}