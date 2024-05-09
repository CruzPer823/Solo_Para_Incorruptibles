<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare13(){
    require './../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT * from prestamos where id_prestamos=:id";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        echo '
        <div class="seccion"><p>Préstamo o comodato por terceros (situación actual)</p></div>
                  <div class="pregunta">
                    <div class="pre"><p>Tipo de bien :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["tipBie"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Inmueble :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["inmu"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Vehículo :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["vehi"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Marca</p></div>
                  <div class="inpSesion">
                  <P>'.$row["marc"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Modelo</p></div>
                  <div class="inpSesion">
                  <P>'.$row["model"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Año :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["anio"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Número de serie o registro :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["numSer"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>¿Dónde se encuentra registrado?</p></div>
                  <div class="inpSesion">
                  <P>'.$row["ubiRegi"].'</P>
                </div>
                </div>
                </div>
              </form>
            </div>
        </div>
        </div>';
    } else {
        echo "No se encontraron resultados.";
    }
} 
