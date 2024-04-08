<?php
declare(strict_types=1);

function is_input_empty(string $v1, string $v2, string $v3, string $v4, string $v5, string $v6){
     if(empty($v1) || empty($v2) ||empty($v3) ||empty($v4) ||empty($v5) ||empty($v6)){
        return true;
     }else{
        return false;
     }
}