<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare9(){
    require '../../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT * from vehiculos where id_vehiculos=:id";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        echo '
        <div class="seccion"><p>Vehículos (situación actual)</p></div>
                  <div class="pregunta">
                    <div class="pre"><p>Tipo de vehículo :</p></div>
                  <div class="inpSesion">
                    <P>'.$row["tipVeh"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Marca :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["marca"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Modelo :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["modelo"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Año :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["anio"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Entidad federativa :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["entFed"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>País :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["pais"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Tercero en copropiedad :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["terCop"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Nombre del tercero o terceros en copropiedad :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["nomTer"].'</P>
                </div>
                </div>
                <div class="pregunta">
                  <div class="pre"><p>RFC del tercero en copropiedad :</p></div>
                <div class="inpSesion">
                <P>'.$row["frcTer"].'</P>
              </div>
              </div>

          <div class="pregunta">
            <div class="pre"><p>Forma de aquisicion :</p></div>
          <div class="inpSesion">
          <P>'.$row["formAdq"].'</P>
        </div>
        </div>
          <div class="pregunta">
            <div class="pre"><p>Forma de pago :</p></div>
          <div class="inpSesion">
          <P>'.$row["formPag"].'</P>
        </div>
        </div>
        <div class="pregunta">
            <div class="pre"><p>Valor de adquisicion del vehiculo :</p></div>
          <div class="inpSesion">
          <P>'.$row["valAdq"].'</P>
        </div>
        </div>
        <div class="pregunta">
            <div class="pre"><p>Tipo de moneda :</p></div>
          <div class="inpSesion">
          <P>'.$row["tipMo"].'</P>
        </div>
        </div>
        <div class="pregunta">
            <div class="pre"><p>Fecha de adquisicion del vehiculo :</p></div>
          <div class="inpSesion">
          <P>'.$row["adqVeh"].'</P>
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
