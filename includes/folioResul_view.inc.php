<?php
declare(strict_types=1);

function denunciaEstado(){
    require '../includes/dbh.inc.php';
    require_once '../includes/config_session.inc.php';
    if(isset($_SESSION["idFolioBusqueda"])){
        $id =$_SESSION["idFolioBusqueda"];
        require '../includes/dbh.inc.php';
        $consulta = "SELECT id,Estado FROM denuncia WHERE id = :id";
        $stmt = $pdo->prepare($consulta);
        $stmt->execute(array(':id' => $id));

    $fila = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($fila["Estado"] == 0){
      $estadoA = 'En proceso de canalización a las autoridades correspondientes';
    }
    else{
      $estadoA = 'Las autoridades han sido notificadas de su denuncia, ¡Agradecemos su cooperación!';
    }
    
    echo "<div class='cont1'><p>Folio:</p> <p id='noFolio' style='font-weight: 600;'>". $id."</p></div>";
    echo " <div class='cont2 mb-5 mensaje'><p style='margin-right: 25px; align-items:center;'>Estado de demanda:</p> <p id='estadoDem' style='text-align:center; justify-content:center;  font-weight:600;color:red;width:30vw;margin-bottom:20vh;'>".$estadoA."</p></div>";
    }
} 