<?php
function obtener_Servicios(){
    try{
        //importar credenciales
        require 'database.php';
        
        //consulta sql
        $sql = "SELECT * FROM estados;";

        //realizar consulta
        $consulta = mysqli_query($mysqli, $sql);

        //acceder resultados
        echo "<pre>";
        var_dump(mysqli_fetch_assoc($consulta));
        echo "</pre>";


        //cerrar

    } catch(\Throwable $th){
        var_dump($th);
    }

}
obtener_Servicios();
?>