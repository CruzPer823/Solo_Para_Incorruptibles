<?php
declare(strict_types=1);

function denunciaEstado(){
    require '../includes/dbh.inc.php';
    require_once '../includes/config_session.inc.php';
    if(isset($_SESSION['folioBusq'])){
        $id =$_SESSION['folioBusq'];
        require '../includes/dbh.inc.php';
        $consulta = "SELECT id,Estado FROM denuncia WHERE id = :id";
        $stmt = $pdo->prepare($consulta);
        $stmt->execute(array(':id' => $id));

    $fila = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($fila["Estado"] == 0){
      $estadoA = 'En revisión';
    }
    else{
      $estadoA = 'Autoridades notificadas';
    }
    
    echo "<div class='cont1'><p>Folio:</p> <p id='noFolio' style='font-weight: 600;'>". $id."</p></div>";
    echo " <div class='cont2 mb-5'><p style='margin-right: 25px;'>Estado de demanda:</p> <p id='estadoDem' style='margin-left:  font-weight:600'>".$estadoA."</p></div>";
    }
} 