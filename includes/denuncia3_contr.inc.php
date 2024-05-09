<?php
declare(strict_types=1);

function is_input_empty(int $est, int $mun, string $dire){
     if(empty($est) || empty($mun) || empty($dire)){
        return true;
     }else{
        return false;
     }
}
function is_dir_invalid(string $dir) {
    if (strlen($dir)<6) {
        return true; 
    } else {
        return false;
    }
}