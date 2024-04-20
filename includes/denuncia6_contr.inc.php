<?php
declare(strict_types=1);

function is_input_empty(string  $fecha,string $hora){
     if(empty($fecha) || empty($hora)){
        return true;
     }else{
        return false;
     }
}