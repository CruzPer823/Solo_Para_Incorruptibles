<?php
declare(strict_types=1);

function mostrarCandidato(){
    require_once 'dbh.inc.php';
    $id=htmlspecialchars($_GET['id']);
    $query="SELECT c.*,asp.cargo as cargo,asp.detalles as detalles FROM (SELECT * from candidatos where id_3d3=:id) as c INNER JOIN aspiracion as asp where asp.id_datosEmpleo=c.id_datosEmpleo";
    $stmt=$pdo->prepare($query);
    $stmt->execute(array(':id'=>$id));
    $fila=$stmt->fetch(PDO::FETCH_ASSOC);

    echo'
    <div class="titulo"><h1>3 DE 3</h1></div>
    <div class="infoPrin">
     <img src="../../3D3U/include/documents/'.$fila["picName"].'" height="350" alt="Imagen del candidato"/>
     </div>
     <div class="info shadow-lg">
     <div class="categoria">
     <h3>Nombre:</h3>
     <p>'.$fila["nombre"].'</p>
           </div>
           <div class="categoria">
           <h3>Partido:</h3>
     <p>'.$fila["partido"].'</p>
           </div>
           <div class="categoria">
           <h3>Cargo:</h3>
     <p>'.$fila["cargo"].'</p>
           </div>
           <div class="categoria">
           <h3>Detalles del cargo:</h3>
     <p>'.$fila["detalles"].'</p>
           </div>
     
     </div>
<div class="titulo"><h1>Declaración patrimonial</h1></div>
       <div class="contenedor3 shadow-lg">
         <div class="info">
           <div class="categoria">
           <h3>Ingresos actuales:</h3>
             <p><a href="e4.php?id='.$id.'">Ver información</a></p>
           </div>
           <div class="categoria">
           <h3>Currículo:</h3>
             <p><a href="e3.php?id='.$id.'">Ver información</a></p>
           </div>
           <div class="categoria">
           <h3>¿Ha tenido algun cargo Público?</h3>
             <p><a href="e5.php?id='.$id.'">Ver información</a></p>
           </div>
           <div class="categoria">
           <h3>Experiencia Laboral:</h3>
             <p><a href="e7.php?id='.$id.'">Ver información</a></p>
           </div>
           <div class="categoria">
           <h3>Bienes Inmuebles:</h3>
             <p><a href="e8.php?id='.$id.'">Ver información</a></p>
           </div>
         </div>

         <div class="info">
           <div class="categoria">
           <h3>Vehículo:</h3>
             <p><a href="#">Ver información</a></p>
           </div>
           <div class="categoria">
           <h3>Bienes Muebles</h3>
             <p><a href="#">Ver información</a></p>
           </div>
           <div class="categoria">
           <h3>Inversiones:</h3>
             <p><a href="#">Ver información</a></p>
           </div>
           <div class="categoria">
           <h3>Adeudos/ Pasivos:</h3>
             <p><a href="#">Ver información</a></p>
           </div>
           <div class="categoria">
           <h3>Préstamos:</h3>
             <p><a href="#">Ver información</a></p>
         </div>
         </div>            
       </div>
       <div class="titulo"><h1>Declaración de intereses</h1></div>
       <div class="contenedor3 shadow-lg">
       <div class="info">
         <div class="categoria">
         <h3>Participación empresarial</h3>
         <p><a href="#">Ver información</a></p>
         </div>
         <div class="categoria">
         <h3>Desiciones en instituciones:</h3>
         <p><a href="#">Ver información</a></p>
         </div>
         <div class="categoria">
         <h3>Apoyos Públicos:</h3>
         <p><a href="#">Ver información</a></p>
         </div>
         <div class="categoria">
         <h3>Representación:</h3>
         <p><a href="#">Ver información</a></p>
         </div>
       </div>
       <div class="info">
         <div class="categoria">
         <h3>Clientes principales</h3>
         <p><a href="#">Ver información</a></p>
         </div>
         <div class="categoria">
         <h3>Beneficios Privados:</h3>
         <p><a href="#">Ver información</a></p>
         </div>
         <div class="categoria">
         <h3>Fideicomisos:</h3>
         <p><a href="#">Ver información</a></p>
         </div>
       </div>
       </div>
       <div class="titulo"><h1>Declaración de impuestos/Información adicional</h1></div>
       <div class="info shadow-lg">
         <div class="categoria">
         <h3>Declaración fiscal:</h3>
         <p><a href="#">Ver información</a></p>
         </div>
         <div class="categoria">
         <h3>Propuestas/ Información adicional</h3>
         <p><a href="#">Ver información</a></p>
         </div>
     </div>
    ';
}