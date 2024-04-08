<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name=$_POST["nombre"];
        $email = $_POST["correo"];
        $pass=$_POST["pass"];
        try{
            require_once "dbh.inc.php";
            require_once "registro_model.inc.php";
            require_once "registro_contr.inc.php";
            //manejo de errores

            $error=[];

           if (is_input_empty($name, $email,$pass,$_POST["passc"])){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           if(is_email_invalid($email)){
                $error["invalid_email"]="El correo debe ser válido!";
           }
           if(is_pass_different($pass, $_POST["passc"])){
                $error["diff_pass"]="Las contraseñas no coinciden";
           }
           if(is_name_taken($pdo, $name)){
                $error["name_taken"]="Alguien con ese nombre ya se ha registrado!";
           }
           if(is_email_taken($pdo, $email)){
                $error["email_taken"]="Alguien ya ha registrado ese correo!";
           }
           if(avisopric_check($_POST['aviso_privacidad'])){
               $error["avisopriv"]="Por favor acepte el aviso de privacidad";
          }
            require_once 'config_session.inc.php';
           if($error){
                $_SESSION["errors_registro"] = $error;
                header("Location: ../registro.php");
                die();
           }
           create_user($pdo,$name,$email,$pass);
           header("Location: ../login.php?signup=success");
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