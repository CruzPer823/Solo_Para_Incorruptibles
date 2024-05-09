<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare4(){
    require './../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT el.secLab, el.nivGob, el.ambPub, el.nomEntPub, el.rfc, el.areaAds, el.emp, el.espFunPri, el.secPer, el.fecIng, el.fecEgr, el.ubi
    FROM candidatos ca
    JOIN experiencialaboral el ON ca.id_experienciaLaboral = el.id_experienciaLaboral
    WHERE ca.id_3d3 = :id;";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        echo '<div class="tarjetaPrin container shadow-lg">';
        echo '<div class=" row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">';
        echo '<div class="Titulo"> <h1>Experiencia laboral</h1></div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Ámbito/sector en el que laboraste (público / privado / otro) :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['secLab'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Nivel/orden de gobierno (federal / estatal / municipal) :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['nivGob'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Ámbito público (ejecutivo, legislativo, municipal, judicial, órgano autónomo) :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['ambPub'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Nombre del ente público/nombre de la empresa, sociedad o asociación :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['nomEntPub'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>RFC :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['rfc'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Área de adscripción /área :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['areaAds'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Empleo, cargo o comisión /puesto  :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['emp'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Especifique función principal :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['espFunPri'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Sector al que pertenece :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['secPer'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Fecha de ingreso :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['fecIng'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Fecha de egreso :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['fecEgr'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Lugar donde se ubica (méxico o el extranjero) :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['ubi'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';  
        echo '</div>';
    } else {
        echo "No se encontraron resultados.";
    }
} 
