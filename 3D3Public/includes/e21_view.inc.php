<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare21(){
    require './../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT * from declaracionfiscal where id_declaracionFiscal=:id;";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
      if($row["opiSat"]){
        header("Location: ../3D3U/include/documents/".$row["opiSat"]);
      }elseif($row["opiNoSat"]){
        header("Location: ../3D3U/include/documents/".$row["opiNoSat"]);
      }else{
        echo'
        <div class="seccion"><p>Declaración fiscal</p></div>
                  <div class="pregunta">
                    <div class="pre"><p>Cargar opinión de cumplimiento fiscal emitida por el SAT</p></div>
                  <div class="inpSesion">
                  <a href="../3D3U/include/documents/'.$row['opiSat'].'">Declaración Fiscal</a>
                </div>
                </div>
                <div class="pregunta">
                  <div class="pre"><p>En caso de no estar sujeto a presentar la declaración fiscal, deberá cargar un documento PDF en el que se señale que no está obligado a presentar la declaración fiscal del año 2019.</p></div>
                <div class="inpSesion">
                <a href="../3D3U/include/documents/'.$row['opiNoSat'].'">Documento</a>
              </div>
              </div>
                </div>
                <div class="b1"><input type="submit" class="btnGen" value="Siguiente"/></div>
              </form>
            </div>
        </div>
        </div>';
      }  
      echo '
        ';
    } else {
        echo "No se encontraron resultados.";
    }
} 
