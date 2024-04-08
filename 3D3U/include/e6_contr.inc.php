<?php
declare(strict_types=1);

function is_input_empty(string $v1, string $v2){
     if(empty($v1) || empty($v2)){
        return true;
     }else{
        return false;
     }
}