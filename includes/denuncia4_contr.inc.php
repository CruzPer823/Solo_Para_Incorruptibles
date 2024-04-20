<?php
declare(strict_types=1);

function is_input_empty(string $name, string $inst, string $rol){
     if(empty($name) || empty($inst) || empty($rol)){
        return true;
     }else{
        return false;
     }
}