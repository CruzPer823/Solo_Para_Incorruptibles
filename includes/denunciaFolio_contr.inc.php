<?php
declare(strict_types=1);

function is_input_empty(string $id){
     if(empty($id)){
        return true;
     }else{
        return false;
     }
}
function id_not_taken(object $pdo, string $id){
    if (!get_id($pdo,$id)){
        return true;
    }
    else{
        return false;
    }
}
