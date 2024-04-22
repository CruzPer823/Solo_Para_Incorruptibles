<?php
declare(strict_types=1);



function mostrar3de3Admin(){
    require 'dbh.inc.php';

    $consulta = "SELECT candidatos.id_3d3 AS id,candidatos.nombre AS nombre, candidatos.partido AS partido,aspiracion.cargo AS cargo,aspiracion.detalles AS detalles FROM candidatos INNER JOIN aspiracion ON candidatos.id_datosEmpleo = aspiracion.id_datosEmpleo;";
    foreach($pdo->query($consulta) as $fila){
            echo "<tr>";
            echo "<td><a href='./3D3/3d3show.php?id=" . $fila['id'] . "'>" . $fila['nombre'] . "</a></td>";
            echo "<td>" . $fila['partido'] . "</td>";
            echo "<td>". $fila["cargo"] . "</td>";
            echo "<td>". $fila["detalles"] . "</td>";
            echo "<td> <input type='button' name='pub' class='btnPub' value='Reportar' onclick='confirmarReporte(" . $fila['id'] . ")'></td>";
            echo "<td> <input type='button' name='pub' class='btnEra' value='Eliminar' onclick='eliminarRegistro(" . $fila['id'] . ")'></td>";
            echo "</tr>";
    }
   
} 