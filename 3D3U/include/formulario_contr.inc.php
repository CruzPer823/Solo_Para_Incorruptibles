<?php
declare(strict_types=1);

function UploadData(object $pdo, array $curriculo
 ,array $ingresos, array $servicioPub, array $aspiracion , array $experienciaLab
 , array $bienesInm, array $vehiculos, array $bienesMue, array $inversiones, array $adeudos, array $prestamos, array $participacionEmp, array $desicionesInst
 , array $apoyosPub, array $representacion, array $clientesPrin, array $benefPriv, array $fidei, array $declaFis, array $adi, array $inicio,
){
    if(uploadCurriculo($pdo, $curriculo)){
        return true;
    }elseif(uploadIngresos($pdo, $ingresos)){
        return true;
    }elseif(uploadServPub($pdo, $servicioPub)){
        return true;
    }elseif(uploadAspiracion($pdo, $aspiracion)){
        return true;
    }elseif(uploadExpLab($pdo, $experienciaLab)){
        return true;
    }elseif(uploadBieInm($pdo, $bienesInm)){
        return true;
    }elseif(uploadVehiculos($pdo, $vehiculos)){
        return true;
    }elseif(uploadBieMue($pdo, $bienesMue)){
        return true;
    }elseif(uploadInv($pdo, $inversiones)){
        return true;
    }elseif(uploadAde($pdo, $adeudos)){
        return true;
    }elseif(uploadPres($pdo, $prestamos)){
        return true;
    }elseif(uploadInt($pdo, $participacionEmp)){
        return true;
    }elseif(uploadInt2($pdo, $desicionesInst)){
        return true;
    }elseif(uploadApy($pdo, $apoyosPub)){
        return true;
    }elseif(uploadRep($pdo, $representacion)){
        return true;
    }elseif(uploadcli($pdo, $clientesPrin)){
        return true;
    }elseif(uploadBenfPri($pdo, $benefPriv)){
        return true;
    }elseif(uploadFidei($pdo, $fidei)){
        return true;
    }elseif(uploadFis($pdo, $declaFis)){
        return true;
    }elseif(uploadProp($pdo, $adi)){
        return true;
    }elseif(uploadAll($pdo, $inicio)){
        return true;
    }else{
        return false;
    }
}