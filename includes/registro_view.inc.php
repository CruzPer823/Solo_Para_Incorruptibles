<?php
declare(strict_types=1);

function check_registro_errors(){

    if(isset($_SESSION["errors_registro"])){
        $errors = $_SESSION["errors_registro"];

        echo "<br>";

        foreach($errors as $error){
            echo '<div class="alert alert-danger" style="width: 50vw; height: 5vh; display:flex; flex-direction:column; justify-content:center;" role="alert">
            <div>'.$error.'</div></div>';
        }

        unset($_SESSION["errors_registro"]);
    }else if(isset($_GET["signup"]) && $_GET["signup"] === "success"){
        echo'<div style="display: flex; justify-content:center;" >
        <div class="alert alert-success" style="width: 50vw; height: 5vh; display:flex; align-items:center; justify-content:center;" role="alert">
            <div> Usuario correctamente registrado!</div>
        </div>
        </div>';
    }
}