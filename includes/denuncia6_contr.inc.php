<?php
declare(strict_types=1);

function is_input_empty($c1,$c2,$c3,$c4,$c5,$c6){
     if(empty($c1) && empty($c2) && empty($c3) && empty($c4) && empty($c5) && empty($c6)){
        return true;
     }else{
        return false;
     }
}