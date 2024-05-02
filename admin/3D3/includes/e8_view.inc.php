<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare4(){
    require '../../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT bi.bien, bi.porProp, bi.sup, bi.supCons, bi.terc, bi.nomTer, bi.rfcTerr, bi.formAdq, bi.formPag, bi.trans, bi.relTrans, bi.valAdqTer, bi.docVal, bi.tipMon, bi.adqInm, bi.valAdq
    FROM candidatos ca
    JOIN bienesinmuebles bi ON ca.id_bienesInmuebles = bi.id_bienesInmuebles
    WHERE ca.id_3d3 = :id;";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        echo '<div class="tarjetaPrin container shadow-lg">';
        echo '<div class=" row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">';
        echo '<div class="Titulo"> <h1>Bienes inmuebles (situación actual)</h1></div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Bienes del declarante :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['bien'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Porcentaje de propiedad del declarante conforme a escrituración o contrato :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['porProp'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Superficie del terreno (Metros cuadrados) :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['sup'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Superficie de construcción (Metros cuadrados) :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['supCons'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Tercero (copropiedad) :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['terc'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Nombre del tercero o terceros con copropiedad :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['nomTer'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Rfc del tercero o terceros con copropiedad :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['rfcTerr'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Forma de adquisición :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['formAdq'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Forma de pago :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['formPag'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Transmisor (razón social) :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['trans'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Relación de transmisión de la propiedad con el titular :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['relTrans'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Valor de adquisición :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p> $ '. $row['valAdqTer'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Conforme a qué documento se describe el valor de adquisición(escritura, sentencia, contrato) :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['docVal'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Tipo de moneda :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['tipMon'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Fecha de adquisición del inmueble :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['adqInm'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>¿El valor de adquisición del inmueble es conforme a? :</p></div>';
        echo '<div class="inpSesion">';
        echo '<p>'. $row['valAdq'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';  
        echo '</div>';
    } else {
        echo "No se encontraron resultados.";
    }
} 
