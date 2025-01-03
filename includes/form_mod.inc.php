<?php
declare(strict_types=1);


    function contador(object $pdo){
        $query = "SELECT COUNT(*) AS CONTADOR FROM denuncia;";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result["CONTADOR"];
    }
function uploadDatosD(object $pdo, int $id, array $datos_iniciales, array $explicacion_info, array $ubicacion_info, array $sospechoso_info,array $time_info,string|null $evidencia){
    $query = "INSERT INTO denuncia(id, cp, seccionElectoral, sexo, ocupacion, escolaridad, descripcion, ubicacion, direccion, nombreSosp, instSosp, rolSosp, fecha, hora,evidencia) VALUES (:id, :cp, :seccionElectoral, :sexo, :ocupacion, :escolaridad, :descripcion, :ubicacion, :direccion, :nombreSosp, :instSosp, :rolSosp, :fecha, :hora,:evidencia);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);
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
    $stmt->bindParam(":evidencia",$evidencia);
    $stmt->execute();
}


function uploadConductas(object $pdo, array $conductas, int $id){
    $sql2 = "INSERT INTO denunciaconducta (id_denuncia, id_conducta) VALUES (:id_denuncia, :id_conducta);";
    
        foreach($conductas as $dato){
            
            $valor = $dato;
            
            // Prepara y ejecuta la consulta SQL
            $stmt = $pdo->prepare($sql2);
            $stmt->bindParam(":id_denuncia", $id); 
            $stmt->bindParam(":id_conducta", $valor); 
            $stmt->execute();
            
        }
}