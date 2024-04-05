<?php
declare(strict_types=1);

function change3d3(){
    if(isset($_SESSION["user_id"])){
        echo '<div class="Titulo"> <h1 style="color: black;"> Bienvenid@, '.$_SESSION["user_username"].'!</h1></div>';
    }
}
function is_logged(){
    if(!isset($_SESSION["user_id"])){
        header('Location: ../index.php');
    }
}
function check_login_errors(){
    if(isset($_SESSION["errors_login"])){
        $errors=$_SESSION["errors_login"];
        foreach ($errors as $error){
            echo '<div style="display: flex; justify-content:center;" >
            <div class="alert alert-danger" style="width: 50vw; height: 5vh; display:flex; align-items:center; justify-content:center;" role="alert">
                <div>'.$error.'</div>
            </div>
            </div>';
        }
        unset($_SESSION["errors_login"]);
    }
}