<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare19(){
    require '../../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT * from beneficiosprivados where id_beneficiosPriv=:id;";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        echo '
        <div class="seccion"><p>Beneficios privados (hasta los últimos 2 años)</p></div>
                  <div class="pregunta">
                    <div class="pre"><p>Tipo de beneficio (Sorteo, Concurso, Donación, Otro) :</p></div>
                  <div class="inpSesion">
                    <p>'.$row["tipBen"].'</p>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Beneficiario (Declarante, otro)  :</p></div>
                  <div class="inpSesion">
                  <p>'.$row["benef"].'
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Otorgante :</p></div>
                  <div class="inpSesion">
                  <p>'.$row["oto"].'
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Razón social del otorgante :</p></div>
                  <div class="inpSesion">
                  <p>'.$row["razSoc"].'</p>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>RFC del otorgante :</p></div>
                  <div class="inpSesion">
                  <p>'.$row["rfc"].'</p>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Forma de recepción del beneficio (Monetario, especie) :</p></div>
                  <div class="inpSesion">
                  <p>'.$row["formRece"].'</p>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Especifique el beneficio :</p></div>
                  <div class="inpSesion">
                  <p>'.$row["espBen"].'</p>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Monto mensual aproximado del beneficio :</p></div>
                  <div class="inpSesion">
                  <p>'.$row["montMnes"].'</p>
                </div>
                </div>
                <div class="pregunta">
                  <div class="pre"><p>Tipo de moneda :</p></div>
                <div class="inpSesion">
                <p>'.$row["tipMon"].'</p>
              </div>
              </div>
                <div class="pregunta">
                  <div class="pre"><p>Sector productivo al que pertenece :</p></div>
                <div class="inpSesion">
                <p>'.$row["sectProd"].'</p>
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
