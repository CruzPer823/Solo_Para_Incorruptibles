<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare15(){
    require './../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT * from desicionesinst where id_desicionesInst=:id;";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        echo '
        <div class="seccion"><p>¿Participa en la toma de decisiones<br>de alguna de estas instituciones? (hasta los 2 últimos años)</p></div>
        <div class="pregunta">
          <div class="pre"><p>Declarante :</p></div>
        <div class="inpSesion">
        <p>'. $row['decl'].'</p>
          
      </div>
      </div>
      <div class="pregunta">
          <div class="pre"><p>Tipo de institución :</p></div>
        <div class="inpSesion">
        <p>'. $row['tipIns'].'</p>
          
      </div>
      </div>
      <div class="pregunta">
          <div class="pre"><p>Puesto/Rol :</p></div>
        <div class="inpSesion">
        <p>'. $row['pues'].'</p>
          
      </div>
      </div>
      <div class="pregunta">
          <div class="pre"><p>Fecha de inicio de participación dentro de la institución :</p></div>
        <div class="inpSesion">
        <p>'. $row['iniPart'].'</p>
          
      </div>
      </div>
      <div class="pregunta">
          <div class="pre"><p>¿Recibe remuneración por su participación?</p></div>
        <div class="inpSesion">
        <p>'. $row['rem'].'</p>
          
      </div>
      </div>
      <div class="pregunta">
          <div class="pre"><p>Monto Mensual Neto :</p></div>
        <div class="inpSesion">
        <p>'. $row['montMens'].'</p>
          
      </div>
      </div>
      <div class="pregunta">
          <div class="pre"><p>Lugar donde se ubica :</p></div>
        <div class="inpSesion">
        <p>'. $row['ubi'].'</p>
          
      </div>
      </div>
      <div class="pregunta">
          <div class="pre"><p>Entidad Federativa :</p></div>
        <div class="inpSesion">
        <p>'. $row['entFed'].'</p>
          
      </div>
      </div>
      </div>';
    } else {
        echo "No se encontraron resultados.";
    }
} 
