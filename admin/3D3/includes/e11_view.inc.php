<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare11(){
    require '../../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT * from inversiones where id_inversiones=:id";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        echo '
        <div class="seccion"><p>Inversiones, cuentas bancarias y otro tipo de valores/activos (situación actual)</p></div>
                  <div class="pregunta">
                    <div class="pre"><p>Tipo de inversión/activo :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["tipInv"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Bancaria  :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["banc"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Tercero (mancomunada) :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["terc"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Nombre del tercero o terceros con quien tiene cuenta mancomunada :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["nomTerc"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>RFC del tercero o terceros  :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["rfcTer"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Lugar dónde se localiza la inversión, cuenta bancaria y otro tipo de activos :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["ubiInv"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Institución o razón social :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["inst"].'</P>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>RFC :</p></div>
                  <div class="inpSesion">
                  <P>'.$row["rfc"].'</P>
                </div>
                </div>
                <div class="pregunta">
                  <div class="pre"><p>País donde se localiza :</p></div>
                <div class="inpSesion">
                <P>'.$row["paiLoca"].'</P>
              </div>
              </div>

          <div class="pregunta">
            <div class="pre"><p>¿Tiene fondos de inversión? </p></div>
          <div class="inpSesion">
          <P>'.$row["tieFond"].'</P>
        </div>
        </div>
          <div class="pregunta">
            <div class="pre"><p>Organizaciones privadas y/o mercantiles :</p></div>
          <div class="inpSesion">
          <P>'.$row["orgProv"].'</P>
        </div>
        </div>
        <div class="pregunta">
            <div class="pre"><p>¿Tiene posesión de monedas y metales?</p></div>
          <div class="inpSesion">
          <P>'.$row["tiePosMon"].'</P>
        </div>
        </div>
        <div class="pregunta">
            <div class="pre"><p>¿Tiene seguros?</p></div>
          <div class="inpSesion">
          <P>'.$row["tieSeg"].'</P>
        </div>
        </div>
        <div class="pregunta">
            <div class="pre"><p>¿Tiene valores bursátiles?</p></div>
          <div class="inpSesion">
          <P>'.$row["tieVal"].'</P>
        </div>
        </div>
        <div class="pregunta">
            <div class="pre"><p>¿Tiene afores u otros (sí/no)?</p></div>
          <div class="inpSesion">
          <P>'.$row["tieVal"].'</P>
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
