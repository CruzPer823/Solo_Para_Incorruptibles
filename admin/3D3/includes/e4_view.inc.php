<?php
declare(strict_types=1);



function mostrare4(){
    require '../../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT i.RemAct, i.inActInd, i.razSoc, i.tipNeg , i.ingActFin, i.insGan, i.ingProf, i.servPres, i.otrIng, i.espTip 
    FROM candidatos ca
    JOIN ingresos i ON ca.id_ingresosActuales = i.id_ingresos
    WHERE ca.id_3d3 = :id;";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        
        echo '<div class="tarjetaPrin container shadow-lg">';
        echo '<div class=" row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">';
        echo '<div class="Titulo"> <h1>Ingresos netos del declarante (situación actual)</h1></div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Remuneración mensual neta del declarante en un cargo público<br>(por concepto de sueldos, honorarios, compensaciones, bonos y otras prestaciones) (cantidades netas después de impuestos):<span>*</span>:</p></div>';
        echo '<div class="inpSesion">';
        echo '<p> $ '. $row['RemAct'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Ingresos por actividad industrial, comercial y/o empresarial (después de impuestos):</p></div>';
        echo '<div class="inpSesion">';
        echo '<p> $ '. $row['inActInd'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Nombre o razón social:</p></div>';
        echo '<div class="inpSesion">';
        echo $row['razSoc'] ;
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Tipo de negocio::</p></div>';
        echo '<div class="inpSesion">';
        echo $row['tipNeg'];
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Ingresos por actividad financiera (rendimientos o ganancias) (después de impuestos):</p></div>';
        echo '<div class="inpSesion">';
        echo '<p> $ '. $row['ingActFin'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Tipo de instrumento que generó el rendimiento o ganancia (capital, fondos de inversión, org. privadas, seguro de separación individualizado, valores bursátiles, bonos, otros.) :</p></div>';
        echo '<div class="inpSesion">';
        echo $row['insGan'];
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Ingresos por servicios profesionales, consejos, consultorías y/ o asesorías (después de impuestos) :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p> $ '. $row['ingProf'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Tipo de servicio prestado :</p></div>';
        echo '<div class="inpSesion">';
        echo $row['servPres'];
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Otros ingresos no considerados a los anteriores (después de impuestos) :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p> $ '. $row['otrIng'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Especificar tipo de ingreso (arrendamiento, regalía, sorteos, concursos, donaciones, seguros de vida, etc.) :</p></div>';
        echo '<div class="inpSesion">';
        echo $row['espTip'];
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';  
        echo '</div>';
    } else {
        echo "No se encontraron resultados.";
    }
} 
