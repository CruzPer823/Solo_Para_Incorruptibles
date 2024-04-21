<?php
declare(strict_types=1);
// if(isset($_SESSION['escolaridad'])&& !isset($_SESSION['ocupacion'])){
    //         echo'1';
    //         $escolaridad = $_SESSION['escolaridad'];
    //         $sql1 = "INSERT INTO denuncia (id, cp, seccionElectoral, sexo, ocupacion, escolaridad, descripcion, ubicacion, direccion, nombreSosp, instSosp, rolSosp, fecha, hora) 
    //         VALUES (:id, :cp, :seccionElectoral, :sexo, NULL, :escolaridad, :descripcion, :ubicacion, :direccion, :nombreSosp, :instSosp, :rolSosp, :fecha, :hora)";
    //         $stmt = $pdo->prepare($sql1);
    //         $stmt->bindParam(':escolaridad', $escolaridad);
    //     }
    //     else if(isset($_SESSION['ocupacion']) && !isset($_SESSION['escolaridad'])){
    //         echo'<br>2';
    //         $ocupacion = $_SESSION['ocupacion'];
    //         $sql1 = "INSERT INTO denuncia (id, cp, seccionElectoral, sexo, ocupacion, escolaridad, descripcion, ubicacion, direccion, nombreSosp, instSosp, rolSosp, fecha, hora) 
    //         VALUES ($id, $cp, $s_e, '$sexo', '$ocupacion',null, '$explicacion', $municipio, '$direccion', '$nombre', '$institucion', '$rol', '$fecha', '$hora')";
    //         $stmt = $pdo->prepare($sql1);
    //         $stmt->bindParam(':ocupacion', $ocupacion);
    //     }
    //     else if(isset($_SESSION['ocupacion']) && isset($_SESSION['escolaridad'])){
    //         echo'3';
    //         $ocupacion = $_SESSION['ocupacion'];
    //         $escolaridad = $_SESSION['escolaridad'];
    //         $sql1 = "INSERT INTO denuncia (id, cp, seccionElectoral, sexo, ocupacion, escolaridad, descripcion, ubicacion, direccion, nombreSosp, instSosp, rolSosp, fecha, hora) 
    //         VALUES ($id, $cp, $s_e, '$sexo', '$ocupacion',$escolaridad  , '$explicacion', $municipio, '$direccion', '$nombre', '$institucion', '$rol', '$fecha', '$hora')";
    //         $stmt = $pdo->prepare($sql1);
    //         $stmt->bindParam(':ocupacion', $ocupacion);
    //         $stmt->bindParam(':escolaridad', $escolaridad);
    
    //     }
    //     else if(!isset($_SESSION['ocupacion']) && !isset($_SESSION['escolaridad'])){
    //         echo'4';
    //         $sql1 = "INSERT INTO denuncia (id, cp, seccionElectoral, sexo, ocupacion, escolaridad, descripcion, ubicacion, direccion, nombreSosp, instSosp, rolSosp, fecha, hora) 
    //         VALUES ($id, $cp, $s_e, '$sexo', null, null, '$explicacion', $municipio, '$direccion', '$nombre', '$institucion', '$rol', '$fecha', '$hora')";
    //         $stmt = $pdo->prepare($sql1);
            
    //     }
function uploadDatosD(object $pdo, array $datos_iniciales, array $explicacion_info, array $ubicacion_info, array $sospechoso_info,array $time_info){
    $query = "INSERT INTO denuncia(id, cp, seccionElectoral, sexo, ocupacion, escolaridad, descripcion, ubicacion, direccion, nombreSosp, instSosp, rolSosp, fecha, hora) VALUES (:id, :cp, :seccionElectoral, :sexo, :ocupacion, :escolaridad, :descripcion, :ubicacion, :direccion, :nombreSosp, :instSosp, :rolSosp, :fecha, :hora);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $datos_iniciales ["seccion_electoral"].$ubicacion_info ["municipio"]);
    $stmt->bindParam(":cp",$datos_iniciales ["CP"]);
    $stmt->bindParam(":seccionElectoral",$datos_iniciales ["seccion_electoral"]);
    $stmt->bindParam(":sexo",$datos_iniciales ["sexo"]);
    $stmt->bindParam(":ocupacion",$datos_iniciales ["ocupacion"]);
    $stmt->bindParam(":escolaridad",$datos_iniciales ["escolaridad"]);
    $stmt->bindParam(":descripcion",$explicacion_info ["explicacion"]);
    $stmt->bindParam(":ubicacion",$ubicacion_info ["municipio"]);
    $stmt->bindParam(":direccion",$ubicacion_info ["direccion"]);
    $stmt->bindParam(":nombreSosp",$sospechoso_info["nombreSosp"]);
    $stmt->bindParam(":instSosp",$sospechoso_info["instSosp"]);
    $stmt->bindParam(":rolSosp",$sospechoso_info["rolSosp"]);
    $stmt->bindParam(":fecha",$time_info["fecha"]);
    $stmt->bindParam(":hora",$time_info["hora"]);
    $stmt->execute();
}

function uploadConductas(object $pdo, array $conductas){
    $sql2 = "INSERT INTO denunciaconducta (id_denuncia, id_conducta) VALUES (:id_denuncia, :id_conducta);";
    foreach($conductas as $tipo => $datos){
        foreach($datos as $dato){
            $id = $dato["id"];
            $valor = $dato["valor"];
            
            // Prepara y ejecuta la consulta SQL
            $stmt = $pdo->prepare($sql2);
            $stmt->bindParam(":id_denuncia", $id); 
            $stmt->bindParam(":id_conducta", $valor); 
            $stmt->execute();
        }
    }
}