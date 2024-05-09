<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare12(){
    require './../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT * from adeudos where id_adeudos=:id";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        echo '
        <div class="seccion"><p>Adeudos/pasivos (situacion actual)</p></div>
                  <div class="pregunta">
                    <div class="pre"><p>Tipo de aduedo :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["tipAde"].'</P>
                </div>
                </div>
                <div class="pregunta">
                  <div class="pre"><p>Fecha de adquisición del adeudo/pasivo :</p></div>
                <div class="inpSesion">
                <P>'.$row["adqAde"].'</P>
              </div>
              </div>
                <div class="pregunta">
                    <div class="pre"><p>Monto original del adeudo/pasivo :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["montAde"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Tipo de moneda :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["tipMon"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>¿Tiene codeudor?</p></div>
                  <div class="inpSesion">
                  <P>'.$row["tieCod"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Tercero</p></div>
                  <div class="inpSesion">
                  <P>'.$row["ter"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Nombre del tercero o terceros :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["nomTer"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>RFC del tercero :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["rfcTer"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Otorgante del crédito :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["otoCre"].'</P>
                </div>
                </div>
                <div class="pregunta">
                  <div class="pre"><p>¿Dónde se localiza el adeudo? (méxico o el extranjero)</p></div>
                <div class="inpSesion">
                <P>'.$row["ubiAde"].'</P>
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
