<?php
declare(strict_types=1);

function is_input_empty(string $name,string $email,string $pass,string $passc){
     if(empty($name) || empty($email) || empty($pass) || empty($passc)){
        return true;
     }else{
        return false;
     }
}
function is_email_invalid(string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       return true;
    }else{
       return false;
    }
}

function is_name_taken(object $pdo ,string $name){
    if(get_name($pdo,$name)){
        return true;
    }else{
        return false;
    }
}
function is_email_taken(object $pdo ,string $email){
    if(get_email($pdo,$email)){
        return true;
    }else{
        return false;
    }
}

