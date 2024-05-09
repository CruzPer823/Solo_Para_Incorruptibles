<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare22(){
    require './../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT * from propuestas where id_adicionales=:id;";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
      
        echo'
        <div class="seccion"><p>Propuestas y datos extra</p></div>
                  <div class="pregunta">
                    <div class="pre"><p>  Propuesta de integridad pública:</p></div>
                  <div class="inpSesion">
                  <a href="../3D3U/include/documents/'.$row['prop'].'">Propuestas</a>
                </div>
                <div class="pregunta">
                  <div class="pre"><p>Bienes, inmuebles y vehículos que no se pudieron agregar al formulario:</p></div>
                <div class="inpSesion">
                <a href="../3D3U/include/documents/'.$row['extra'].'">Información adicional</a>
              </div>
              </div>
                </div>';
    } else {
        echo "No se encontraron resultados.";
    }
} 
