<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare18(){
    require '../../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT * from clientes where id_clientesPrincipales=:id;";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        echo '
        <div class="seccion"><p>Clientes principales (hasta los últimos 2 años)</p></div>
                  <div class="pregunta">
                    <div class="pre"><p>¿Realiza alguna actividad lucrativa independiente al empleo, cargo o comisión?</p></div>
                  <div class="inpSesion">
                  <P>'.$row["actLuc"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Declarante  :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["decl"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Nombre de la empresa o servicio que proporciona :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["nomEmp"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>RFC :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["rfc"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Cliente principal :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["cliPrin"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Razón social del cliente principal :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["razSoc"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>RFC del cliente principal :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["rfcCli"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Sector productivo al que pertenece :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["sectProd"].'</P>
                </div>
                </div>
                <div class="pregunta">
                  <div class="pre"><p>Monto aproximado del beneficio o ganancia mensual que obtiene del cliente principal :</p></div>
                <div class="inpSesion">
                <P>'.$row["montApro"].'</P>
              </div>
              </div>
                <div class="pregunta">
                  <div class="pre"><p>Lugar donde se ubica (México o el extranjero) :</p></div>
                <div class="inpSesion">
                <P>'.$row["ubi"].'</P>
              </div>
              </div>
                <div class="pregunta">
                  <div class="pre"><p>Entidad federativa :</p></div>
                <div class="inpSesion">
                <P>'.$row["entFed"].'</P>
              </div>
              </div>
                </div>
                
              </form>
              </form>
            </div>
        </div>
        </div>';
    } else {
        echo "No se encontraron resultados.";
    }
} 
