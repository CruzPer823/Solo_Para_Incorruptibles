<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare16(){
    require './../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT * from apoyos where id_apoyosPub=:id;";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        echo '
        <div class="seccion"><p>Apoyos o beneficios públicos (hasta los últimos 2 años)</p></div>
                  <div class="pregunta">
                    <div class="pre"><p>¿Es beneficiario de algún programa público?</p></div>
                  <div class="inpSesion">
                  <P>'.$row["benPro"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Nombre del programa :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["nomPro"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Institución que otorga el apoyo :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["insApo"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Nivel u orden de gobierno :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["nivGov"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Tipo de apoyo (Subsidio, servicio, obra, otro) :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["tipApo"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Forma de recepción del apoyo (Monetario, especie) :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["recApo"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Monto aproximado del apoyo mensual :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["montApro"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Especifique el apoyo :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["espApo"].'</P>
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
