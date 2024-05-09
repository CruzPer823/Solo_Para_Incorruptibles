<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare20(){
    require './../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT * from fideicomisos where id_fideicomisos=:id;";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        echo '
        <div class="seccion"><p>Fideicomisos (hasta los últimos 2 años)</p></div>
                  <div class="pregunta">
                    <div class="pre"><p>Participación en fideicomisos (Declarante, otro) :</p></div>
                  <div class="inpSesion">
                  <p>'.$row["partFide"].'</p>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Tipo de fideicomiso (Público, Privado, Otro) :</p></div>
                  <div class="inpSesion">
                  <p>'.$row["tipo"].'</p>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Tipo de participación (Fideicomitente, Fiduciario, Fideicomisario, Comité Técnico) :</p></div>
                  <div class="inpSesion">
                  <p>'.$row["tipPart"].'</p>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>RFC del fideicomiso :</p></div>
                  <div class="inpSesion">
                  <p>'.$row["rfc"].'</p>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Fideicomitente (Persona física / persona moral) :</p></div>
                  <div class="inpSesion">
                  <p>'.$row["fide"].'</p>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Razón social del fideicomitente :</p></div>
                  <div class="inpSesion">
                  <p>'.$row["razSocFideicomitente"].'</p>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Nombre o razón social del fiduciario :</p></div>
                  <div class="inpSesion">
                  <p>'.$row["razSocfidu"].'</p>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>RFC del fideicomitente :</p></div>
                  <div class="inpSesion">
                  <p>'.$row["rfcFide"].'</p>
                </div>
                </div>
                <div class="pregunta">
                  <div class="pre"><p>Razón social del fiduciario :</p></div>
                <div class="inpSesion">
                <p>'.$row["razFidu"].'</p>
              </div>
              </div>
                  <div class="pregunta">
                    <div class="pre"><p>RFC del fiduciario :</p></div>
                  <div class="inpSesion">
                  <p>'.$row["rfcFidu"].'</p>
                </div>
                </div>
                <div class="pregunta">
                  <div class="pre"><p>Razón social del fideicomisario :</p></div>
                <div class="inpSesion">
                <p>'.$row["razSocFideicomisario"].'</p>
              </div>
              </div>
              <div class="pregunta">
                <div class="pre"><p>RFC del fideicomisario :</p></div>
              <div class="inpSesion">
              <p>'.$row["rfcFidei"].'</p>
            </div>
            </div> 
            <div class="pregunta">
              <div class="pre"><p>Sector productivo al que pertenece :</p></div>
            <div class="inpSesion">
            <p>'.$row["secProd"].'</p>
          </div>
          </div> 
          <div class="pregunta">
            <div class="pre"><p>¿Dónde se localiza el fideicomiso? (México o en el extranjero)</p></div>
          <div class="inpSesion">
          <p>'.$row["ubiFide"].'</p>
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
