<?php
declare(strict_types=1);

function mostrar3d3(){
    require 'dbh.inc.php';
   
    $consulta = "SELECT candidatos.id_3d3 AS id,candidatos.nombre AS nombre, candidatos.partido AS partido,aspiracion.cargo AS cargo,aspiracion.detalles AS detalles FROM candidatos INNER JOIN aspiracion ON candidatos.id_datosEmpleo = aspiracion.id_datosEmpleo WHERE candidatos.estado=1;";
    foreach($pdo->query($consulta) as $fila){
            echo "<tr>";
            echo "<td><a href='./3D3/3d3show.php?id=" . $fila['id'] . "'>" . $fila['nombre'] . "</a></td>";
            echo "<td>" . $fila['partido'] . "</td>";
            echo "<td>". $fila["cargo"] . "</td>";
            echo "<td>". $fila["detalles"] . "</td>";
            echo "</tr>";
    }
} 