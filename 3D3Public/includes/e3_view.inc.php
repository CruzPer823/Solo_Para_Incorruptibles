<?php
declare(strict_types=1);



function mostrare3(){
    require './../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']);
    $consulta = " SELECT c.ulgrado, c.InsEdu, c.carrera, c.estatus, c.fecha, c.ubiIns, c.docName 
    FROM candidatos ca
    JOIN curriculo c ON ca.id_curriculo = c.id_curriculo
    WHERE ca.id_3d3 = :id;";

    $stmt = $pdo->prepare($consulta);
    $stmt->execute(array(':id' => $id));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        
        echo '<div class="tarjetaPrin container shadow-lg">';
        echo '<div class=" row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">';
        echo '<div class="Titulo"> <h1>Datos curriculares del declarante</h1></div>           ';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Último grado de estudios completado:</p></div>';
        echo '<div class="inpSesion">';
        echo '<p> '. $row['ulgrado'].'</p> ';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Institución educativa:</p></div>';
        echo '<div class="inpSesion">';
        echo  $row['InsEdu'];
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Carrera o área de conocimiento:</p></div>';
        echo '<div class="inpSesion">';
        echo $row['carrera'] ;
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Estatus<br>(Cursando, finalizado, trunco):</p></div>';
        echo '<div class="inpSesion">';
        echo  $row['estatus'];
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Documento obtenido<br>(Boleta, Certificado, Constancia, Título):</p></div>';
        echo '<div class="inpSesion">';
        echo '<a href="./../3D3U/include/documents/'.$row['docName'].'">Documento</a>';
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Fecha de obtención del documento::</p></div>';
        echo '<div class="inpSesion">';
        echo $row['fecha'];
        echo '</div>';
        echo '</div>';
        echo '<div class="pregunta">';
        echo '<div class="pre"><p>Ubicación de la Institución Educativa<br>(México/Extranjero):</p></div>';
        echo '<div class="inpSesion">';
        echo $row['ubiIns'];
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';  
        echo '</div>';
    } else {
        echo "No se encontraron resultados.";
    }
} 
