<?php
declare(strict_types=1);

function check_form_errorsd2(){

    if(isset($_SESSION["errors_denuncia2"])){
        $errors = $_SESSION["errors_denuncia2"];

        foreach($errors as $error){
            
            echo '<div style="display:flex; justify-content:center;" ><div class="alert alert-danger" style="width: 50vw; height: 5vh; display:flex; justify-content:center; align-items:center" role="alert">
            <div>'.$error.'</div></div></div>';
        }

        unset($_SESSION["errors_denuncia2"]);
    }
} 