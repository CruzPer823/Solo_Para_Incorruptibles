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
     <img src="./3D3U/include/documents/'.$fila["picName"].'" height="350" alt="Imagen del candidato"/>
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
             <p><a href="./3D3Public/e4.php?id='.$fila["id_3d3"].'">Ver información</a></p>
           </div>
           <div class="categoria">
           <h3>Currículo:</h3>
             <p><a href="./3D3Public/e3.php?id='.$fila["id_3d3"].'">Ver información</a></p>
           </div>
           <div class="categoria">
           <h3>¿Ha tenido algun cargo Público?</h3>
             <p><a href="./3D3Public/e5.php?id='.$fila["id_3d3"].'">Ver información</a></p>
           </div>
           <div class="categoria">
           <h3>Experiencia Laboral:</h3>
             <p><a href="./3D3Public/e7.php?id='.$fila["id_3d3"].'">Ver información</a></p>
           </div>
           <div class="categoria">
           <h3>Bienes Inmuebles:</h3>
             <p><a href="./3D3Public/e8.php?id='.$fila["id_3d3"].'">Ver información</a></p>
           </div>
         </div>

         <div class="info">
           <div class="categoria">
           <h3>Vehículo:</h3>
             <p><a href="./3D3Public/e9.php?id='.$fila["id_vehiculos"].'">Ver información</a></p>
           </div>
           <div class="categoria">
           <h3>Bienes Muebles</h3>
             <p><a href="./3D3Public/e10.php?id='.$fila["id_bienesMuebles"].'">Ver información</a></p>
           </div>
           <div class="categoria">
           <h3>Inversiones:</h3>
             <p><a href="./3D3Public/e11.php?id='.$fila["id_curriculo"].'">Ver información</a></p>
           </div>
           <div class="categoria">
           <h3>Adeudos/ Pasivos:</h3>
             <p><a href="./3D3Public/e12.php?id='.$fila["id_adeudos"].'">Ver información</a></p>
           </div>
           <div class="categoria">
           <h3>Préstamos:</h3>
             <p><a href="./3D3Public/e13.php?id='.$fila["id_prestamos"].'">Ver información</a></p>
         </div>
         </div>            
       </div>
       <div class="titulo"><h1>Declaración de intereses</h1></div>
       <div class="contenedor3 shadow-lg">
       <div class="info">
         <div class="categoria">
         <h3>Participación empresarial</h3>
         <p><a href="./3D3Public/e14.php?id='.$fila["id_participacionEmp"].'">Ver información</a></p>
         </div>
         <div class="categoria">
         <h3>Desiciones en instituciones:</h3>
         <p><a href="./3D3Public/e15.php?id='.$fila["id_decisionesInst"].'">Ver información</a></p>
         </div>
         <div class="categoria">
         <h3>Apoyos Públicos:</h3>
         <p><a href="./3D3Public/e16.php?id='.$fila["id_apoyosPub"].'">Ver información</a></p>
         </div>
         <div class="categoria">
         <h3>Representación:</h3>
         <p><a href="./3D3Public/e17.php?id='.$fila["id_representacion"].'">Ver información</a></p>
         </div>
       </div>
       <div class="info">
         <div class="categoria">
         <h3>Clientes principales</h3>
         <p><a href="./3D3Public/e18.php?id='.$fila["id_clientesPrincipales"].'">Ver información</a></p>
         </div>
         <div class="categoria">
         <h3>Beneficios Privados:</h3>
         <p><a href="./3D3Public/e19.php?id='.$fila["id_beneficiosPriv"].'">Ver información</a></p>
         </div>
         <div class="categoria">
         <h3>Fideicomisos:</h3>
         <p><a href="./3D3Public/e20.php?id='.$fila["id_fideicomisos"].'">Ver información</a></p>
         </div>
       </div>
       </div>
       <div class="titulo"><h1>Declaración de impuestos/Información adicional</h1></div>
       <div class="info shadow-lg">
         <div class="categoria">
         <h3>Declaración fiscal:</h3>
         <p><a href="./3D3Public/e21.php?id='.$fila["id_declaracionFiscal"].'">Ver información</a></p>
         </div>
         <div class="categoria">
         <h3>Propuestas/ Información adicional</h3>
         <p><a href="./3D3Public/e22.php?id='.$fila["id_adicionales"].'">Ver información</a></p>
         </div>
     </div>
    ';
}