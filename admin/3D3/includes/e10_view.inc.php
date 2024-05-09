<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare10(){
    require '../../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT * from bienesmuebles where id_bienesMuebles=:id";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        echo '
        <div class="seccion"><p>Bienes muebles (situación actual)</p></div>
                  <div class="pregunta">
                    <div class="pre"><p>Tipo del bien :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["tipBie"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Razon social del transmisor :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["razSoc"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Tercero (en copropiedad) :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["terc"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Nombre del tercero o terceros :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["nomTer"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>RFC del tercero en copropiedad :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["rfcTer"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Descripcion general del bien :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["descGen"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Forma de adquisicion (Crédito, contado, no aplica) :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["formAdq"].'</P>
                </div>
                </div>
        <div class="pregunta">
            <div class="pre"><p>Tipo de moneda :</p></div>
          <div class="inpSesion">
          <P>'.$row["tipMo"].'</P>
        </div>
        </div>
        <div class="pregunta">
            <div class="pre"><p>Fecha de adquisición :</p></div>
          <div class="inpSesion">
          <P>'.$row["adqBie"].'</P>
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
