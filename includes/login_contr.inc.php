<?php

declare(strict_types=1);

function is_input_empty(string $email,string $pass){
    if(empty($email) || empty($pass)){
       return true;
    }else{
       return false;
    }
}
function is_mail_wrong(bool|array $result){
    if(!$result){
        return true;
    }else{
        return false;
    }
}

function is_pass_wrong(string $pass, string $hashedPass){
    if(!password_verify($pass, $hashedPass)){
        return true;
    }else{
        return false;
    }
}

function admin(string $email){
    if($email == "spiAdmin@tec.mx"){
        return true;
    }else{
        return false;
    }
}