<?php
declare(strict_types=1);
//UploadData($pdo,$_SESSION["datos_iniciales"],$_SESSION["explicacion_info"],$_SESSION["ubicacion_info"],$_SESSION["sospechoso_info"],$_SESSION["time_info"],$_SESSION["time_info"]);
function UploadData(object $pdo, array $datos_iniciales, array $explicacion_info, array $ubicacion_info, array $sospechoso_info , array $time_info , array $conductas,string $evidencia){
    $id = $datos_iniciales ["seccion_electoral"].$ubicacion_info ["municipio"];
    uploadDatosD($pdo, $id ,$datos_iniciales, $explicacion_info, $ubicacion_info, $sospechoso_info,$time_info,$evidencia);
    uploadConductas($pdo, $conductas['c1'], $id);
    uploadConductas($pdo, $conductas['c2'], $id);
    uploadConductas($pdo, $conductas['c3'], $id);
    uploadConductas($pdo, $conductas['c4'], $id);
    uploadConductas($pdo, $conductas['c5'], $id);
    uploadConductas($pdo, $conductas['c6'], $id);
    uploadConductas($pdo, $conductas['c7'], $id);
    uploadConductas($pdo, $conductas['c8'], $id);
    echo'ok';    
}