<?php
declare(strict_types=1);

function getId(){
    require_once '../includes/config_session.inc.php';
    if(isset($_SESSION["idDenuncia"])){
        $id = $_SESSION["idDenuncia"];
         echo $id;
    }
} 