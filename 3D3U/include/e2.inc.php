
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name=$_POST["nombre"];
        $partido = $_POST["partido"];
        $correo=$_POST["correo"];
        $imagen=$_POST["foto"]
        try{
            require_once "dbh.inc.php";
            require_once "e2_model.inc.php";
            require_once "e2_contr.inc.php";
            //manejo de errores

            $error=[];

           if (is_input_empty($name, $email,$pass,$_POST["passc"])){
                $error["empty_input"]="Debe llenar todos los campos!";
           }
           if(is_email_invalid($email)){
                $error["invalid_email"]="El correo debe ser válido!";
           }
          
           if(is_name_taken($pdo, $name)){
                $error["name_taken"]="Alguien con ese nombre ya se ha registrado!";
           }
           if(is_email_taken($pdo, $email)){
                $error["email_taken"]="Alguien ya ha registrado ese correo!";
           }
         
            require_once 'config_session.inc.php';
           if($error){
                $_SESSION["errors_registro"] = $error;
                header("Location: ../e2.php");
                die();
           }
           create_user($pdo,$name,$email,$pass);
           header("Location: ../e3.php");
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