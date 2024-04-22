<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["correo"];
    $pass=$_POST["pass"];
    try{
        require_once 'dbh.inc.php';
        require_once 'login_mod.inc.php';
        require_once 'login_contr.inc.php';
         //manejo de errores

         $error=[];



         if (is_input_empty($email,$pass)){
              $error["empty_input"]="Debe llenar todos los campos!";
         }
         
        $result=get_user($pdo, $email);
        // var_dump($result);
        // exit;


         if(is_mail_wrong($result)){
            $error["login_incorrect"] = "Correo o contraseña incorrectos";
         }


        if(!is_mail_wrong($result) && !password_verify($pass, $result['psw'])){
            $error["login_incorrect"]="Correo o contraseña incorrectos";
        }

          require_once 'config_session.inc.php';

         if($error){
              $_SESSION["errors_login"] = $error;
              header("Location: ../login.php");
              die();
         }

         $newSessionId= session_create_id();
         $sessionId=$newSessionId."_".$result["id"];
         session_id($sessionId);
         if(admin($result["email"])){
            header("Location:../admin/3de3Admin.php");
            $_SESSION["user_id"] = $result["id"];
         $_SESSION["user_username"] = htmlspecialchars($result["nombre"]);
         $_SESSION["last_regeneration"] = time();
         $pdo=null;
         $stmt=null;

         die();
         }
         header("Location: ../3D3U/e1.php");
         $_SESSION["user_id"] = $result["id"];
         $_SESSION["user_username"] = htmlspecialchars($result["nombre"]);
         $_SESSION["last_regeneration"] = time();
         $pdo=null;
         $stmt=null;

         die();

    }catch(PDOException $e){
        die("Process failed: ".$e->getMessage());
    }
}else{
    header("Location:../index.php");
    die();
}