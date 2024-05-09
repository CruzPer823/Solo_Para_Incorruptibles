<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare4(){
    require '../../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT sp.RemAct, sp.inActInd, sp.remNet, sp.ingInd, sp.razSoc, sp.tipNeg , sp.ingFin, sp.insGan, sp.ingProf, sp.tipServ, sp.ingEnaj, sp.tipBienEnaj, sp.otrIng, sp.espIng
    FROM candidatos ca
    JOIN serviciopublico sp ON ca.id_servicioPublico = sp.id_servicioPublico
    WHERE ca.id_3d3 = :id;";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        echo '<div class="tarjetaPrin container shadow-lg">';
        echo '<div class=" row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">';
        echo '<div class="Titulo"> <h1>¿Datos del empleo, cargo, o comisión que inicia</h1></div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Cargo al que aspira (Diputación federal, Diputación local Presidencia municipal, Regiduría, Sindicatura) :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['RemAct'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Detalles del puesto :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['inActInd'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';  
        echo '</div>';
    } else {
        echo "No se encontraron resultados.";
    }
} 
