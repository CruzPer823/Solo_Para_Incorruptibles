<?php
declare(strict_types=1);
//NO ES NECESARIO
function mostrare17(){
    require './../includes/dbh.inc.php';
    $id = htmlspecialchars($_GET['id']); 	 				 	 	 		
    $consulta = " SELECT * from representacion where id_representacion=:id;";
        
    $stmt2 = $pdo->prepare($consulta);
    $stmt2->execute(array(':id' => $id));
    $row = $stmt2->fetch(PDO::FETCH_ASSOC);
    // Obtener los resultados
    if ($row) {
        echo '
        <div class="seccion"><p>Representación (hasta los últimos 2 años)</p></div>
        <div class="pregunta">
          <div class="pre"><p>Declarante :</p></div>
        <div class="inpSesion">
        <P>'.$row["decl"].'</P>
      </div>
      </div>
      <div class="pregunta">
          <div class="pre"><p>Tipo de representación :</p></div>
        <div class="inpSesion">
        <P>'.$row["tipRep"].'</P>
      </div>
      </div>
      <div class="pregunta">
          <div class="pre"><p>Fecha de inicio de la representación :</p></div>
        <div class="inpSesion">
        <P>'.$row["iniRep"].'</P>
      </div>
      <div class="pregunta">
          <div class="pre"><p>Representante/Representado :</p></div>
        <div class="inpSesion">
        <P>'.$row["rep"].'</P>
      </div>
      </div>
      <div class="pregunta">
          <div class="pre"><p>Razón social del representante/representado :</p></div>
        <div class="inpSesion">
        <P>'.$row["razSocRep"].'</P>
      </div>
      </div>
      <div class="pregunta">
          <div class="pre"><p>RFC del representante / representado :</p></div>
        <div class="inpSesion">
        <P>'.$row["rrfcRep"].'</P>
      </div>
      </div>
      <div class="pregunta">
          <div class="pre"><p>¿Recibe remuneración por su representación?</p></div>
        <div class="inpSesion">
        <P>'.$row["remRep"].'</P>
      </div>
      </div>
      <div class="pregunta">
          <div class="pre"><p>Monto mensual neto de su representación:</p></div>
        <div class="inpSesion">
        <P>'.$row["montRep"].'</P>
      </div>
      </div>
      <div class="pregunta">
        <div class="pre"><p>Lugar donde se ubica (México o el extranjero) :</p></div>
      <div class="inpSesion">
      <P>'.$row["ubi"].'</P>
    </div>
    </div>
      <div class="pregunta">
        <div class="pre"><p>Entidad Federativa :</p></div>
      <div class="inpSesion">
      <P>'.$row["entFed"].'</P>
    </div>
    </div>
      <div class="pregunta">
        <div class="pre"><p>Sector Productivo al que pertenece :</p></div>
      <div class="inpSesion">
      <P>'.$row["secProd"].'</P>
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
