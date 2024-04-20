<?php
declare(strict_types=1);

function is_input_empty(string $exp){
     if(empty($exp)){
        return true;
     }else{
        return false;
     }
}
function is_exp_invalid(string $exp) {
    if (strlen($exp)<10) {
        return true; 
    } else {
        return false;
    }
}
