<?php
declare(strict_types=1);
//UploadData($pdo,$_SESSION["datos_iniciales"],$_SESSION["explicacion_info"],$_SESSION["ubicacion_info"],$_SESSION["sospechoso_info"],$_SESSION["time_info"],$_SESSION["time_info"]);
function UploadData(object $pdo, array $datos_iniciales, array $explicacion_info, array $ubicacion_info, array $sospechoso_info , array $time_info , array $conductas, string|null $evidencia){
    $contador = contador($pdo);
    $id = $datos_iniciales ["seccion_electoral"].$contador;
    if($datos_iniciales["escolaridad"] == NULL){
        $datos_iniciales["escolaridad"]=6;
    }
    uploadDatosD($pdo, $id ,$datos_iniciales, $explicacion_info, $ubicacion_info, $sospechoso_info,$time_info,$evidencia);
    foreach($conductas as $conducta){
        if(!empty($conducta)){
            uploadConductas($pdo,$conducta,$id);
        }
    }
}