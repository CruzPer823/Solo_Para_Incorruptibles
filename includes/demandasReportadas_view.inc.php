<?php
declare(strict_types=1);

function mostrarDenuncias(){
    require '../includes/dbh.inc.php';
   
    $consulta = "SELECT denuncia.id AS denuncia_id, denuncia.Estado AS estatus, estados.nombre AS nombre_estado, municipios.nombre AS nombre_municipio FROM denuncia INNER JOIN municipios ON denuncia.ubicacion = municipios.id INNER JOIN estados ON municipios.estado = estados.id;";
    foreach($pdo->query($consulta) as $fila){
        if($fila['estatus'] != 1){
            echo "<tr>";
            echo "<td><a href='detallesDenuncia.php?id=" . $fila['denuncia_id'] . "'>" . $fila['denuncia_id'] . "</a></td>";
            echo "<td>" . $fila['nombre_estado'] . "</td>";
            echo "<td>". $fila["nombre_municipio"] . "</td>";
            echo "<td> <input type='button' name='pub' class='boton-tabla boton--secundario no-margin' value='Reportar' onclick='confirmarReporte(" . $fila['denuncia_id'] . ")'></td>";
            echo "<td> <input type='button' name='pub' class='boton-tabla boton--eliminar no-margin' value='Eliminar' onclick='eliminarRegistro(" . $fila['denuncia_id'] . ")'></td>";
            echo "</tr>";
        }
    }
} 