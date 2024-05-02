<?php
declare(strict_types=1);



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
        echo '<div class="Titulo"> <h1>¿Te desmpeñaste como servidor público en el año inmediato anterior?</h1></div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Fecha de inicio :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['RemAct'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Fecha de conclusión :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['inActInd'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Remuneración neta del declarante, recibida durante el tiempo en el que se desempeñó como servidor público en el año inmediato anterior (por concepto de sueldos, honorarios, compensaciones, bonos, aguinaldos y otras prestaciones) (cantidades netas después de impuestos) :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p> $'.$row['remNet'].'</p>';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Ingresos por actividad industrial, comercial y/o empresarial (después de impuestos) :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p> $'.$row['ingInd'].'</p>';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Nombre o razón social:</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['razSoc'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Tipo de negocio :</p></div>';
        echo '<div class="inpSesion">';
        echo $row['tipNeg'];
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Ingresos por actividad financiera (rendimientos o ganancias) (después de impuestos):</p></div>';
        echo '<div class="inpSesion">';
        echo '<p> $ '. $row['ingFin'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Tipo de instrumento que generó el rendimiento o ganancia (capital, fondos de inversión, org. privadas, seguro de separación individualizado, valores bursátiles, bonos, otros.) :</p></div>';
        echo '<div class="inpSesion">';
        echo $row['insGan'];
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Ingresos por servicios profesionales, consejos, consultorías y/o asesorías (después de impuestos) :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p> $ '. $row['ingProf'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Tipo de servicio prestado :</p></div>';
        echo '<div class="inpSesion">';
        echo $row['tipServ'];
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Ingresos por enajenación de bienes (después de impuestos) :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p> $ '.$row['ingEnaj'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Tipo de bien enajenado (mueble, inmueble, vehículo) :</p></div>';
        echo '<div class="inpSesion">';
        echo $row['tipBienEnaj'];
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Otros ingresos no considerados a los anteriores (después de impuestos):</p></div>';
        echo '<div class="inpSesion">';
        echo $row['otrIng'];
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Especificar tipo de ingreso (arrendamiento, regalía, sorteos, concursos, donaciones, seguro de vida, etc) :</p></div>';
        echo '<div class="inpSesion">';
        echo $row['espIng'];
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';  
        echo '</div>';
    } else {
        echo '<div class="Titulo"> <h1>No se encontraron resultados, este candidato no ha tenido un puesto público.</h1></div>';
    }
} 
