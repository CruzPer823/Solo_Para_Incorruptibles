<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare14(){
    require './../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT * from participacionempresas where id_participacionEmp=:id;";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        echo '
        <div class="cont">
                  </div>
                  <div class="seccion"><p>Declaración de Intereses<br>Participación en empresas, sociedades o asociaciones (hasta los 2 últimos años)</p></div>
                  <div class="pregunta">
                    <div class="pre"><p>Declarante :</p></div>
                  <div class="inpSesion">
                  <p>'. $row['decl'].'</p>
                    
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Nombre de la empresa, sociedad o asociación :</p></div>
                  <div class="inpSesion">
                  <p>'. $row['nombEmp'].'</p>
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>RFC :</p></div>
                  <div class="inpSesion">
                  <p>'. $row['rfc'].'</p>
              
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Porcentaje de participación de acuerdo a escritura :</p></div>
                  <div class="inpSesion">
                  <p>'. $row['porcPart'].'</p>
                    
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Tipo de participación :</p></div>
                  <div class="inpSesion">
                  <p>'. $row['tipPart'].'</p>
                    
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>¿Recibe remuneración por su participación?</p></div>
                  <div class="inpSesion">
                  <p>'. $row['remPart'].'</p>
                    
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Monto mensual neto :</p></div>
                  <div class="inpSesion">
                  <p>'. $row['montMens'].'</p>
                    
                </div>
                </div>
                <div class="pregunta">
                    <div class="pre"><p>Lugar donde se ubica (México o el extranjero)</p></div>
                  <div class="inpSesion">
                  <p>'. $row['ubi'].'</p>
                    
                </div>
                </div>
              <div class="pregunta">
                <div class="pre"><p>Entidad federativa :</p></div>
              <div class="inpSesion">
              <p>'. $row['entFed'].'</p>
                
            </div>
            </div>
            <div class="pregunta">
              <div class="pre"><p>País donde se localiza :</p></div>
            <div class="inpSesion">
            <p>'. $row['ubiPais'].'</p>
              
          </div>
          </div>
          <div class="pregunta">
            <div class="pre"><p>Sector productivo al que pertenece :</p></div>
          <div class="inpSesion">
          <p>'. $row['sectProd'].'</p>
        </div>
        </div>
                </div>';
    } else {
        echo "No se encontraron resultados.";
    }
} 
