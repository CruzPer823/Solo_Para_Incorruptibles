<?php

require_once '../includes/config_session.inc.php';
require_once '../includes/denuncia5_view.inc.php';


// $conducta1 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Cualquier persona';");
// $conducta2 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Servidor/a público';");
// $conducta3 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Funcionario/a electoral'");
// $conducta4 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Funcionario/a partidista';");
// $conducta5 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Ministros/as de culto religioso'");
// $conducta6 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Diputados/as y Senadores/as electos'");
// $conducta7 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Fedatarios/as públicos'");
// $conducta8 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Ex Mag E, Con E, Secretario INE'");
// $conducta9 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Candidato/a'");
// $conducta10 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Funcionario/a de casilla'");
// ECHO 'ADAD';
// // Iniciar sesión
// require_once '../includes/config_session.inc.php';
//   // Si no existe, redirigir a la primera página
//   // header('Location: error.php');
//   // exit();


// $id = $_SESSION['seccion_electoral'] . $_SESSION['municipios'];
// $cp = $_SESSION['CP']; 
// $s_e = $_SESSION['seccion_electoral'];
// $sexo = $_SESSION['sexo']; 
// $explicacion = $_SESSION['explicacion'];
// $municipio = $_SESSION['municipios'];
// $direccion = $_SESSION['direccion'];
// $nombre = $_SESSION['nombre']; 
// $institucion = $_SESSION['institucion']; 
// $rol = $_SESSION['rol'];
// $fecha = $_SESSION['fecha']; 
// $hora = $_SESSION['hora'];


// // echo "ID y Ubicación: $id <br>";
// // echo "Código Postal: $cp <br>";
// // echo "Sección Electoral: $s_e <br>";
// // echo "Sexo: $sexo <br>";
// // echo "Explicación: $explicacion <br>";
// // echo "Municipio: $municipio <br>";
// // echo "Dirección: $direccion <br>";
// // echo "Nombre: $nombre <br>";
// // echo "Institución: $institucion <br>";
// // echo "Rol: $rol <br>";
// // echo "Fecha: $fecha <br>";
// // echo "Hora: $hora <br>";
// // echo "Ocupacion: $ocupacion <br>";
// // echo "esco: $escolaridad <br>";
// // echo $_SESSION['escolaridad'];
// // echo $_SESSION['ocupacion'];


// if($_SERVER['REQUEST_METHOD'] === 'POST'){
//     // echo "<pre>";
//     // var_dump($_FILES);
//     // echo "</pre>";
//     $imagen = $_FILES['imagen'];
//     var_dump($imagen);
//     //Validacion por tamaño.

//     $medida = 1000*2000;
//     if($imagen['size']>$medida){
//         echo '<script>';
//         echo 'alert("La imagen seleccionada es demasiado grande. Por favor, seleccione una imagen más pequeña.");';
//         echo '</script>';
//     }
//     //Subida de archivos 
//     $carpetaImagenes = __DIR__ .'../../imagenes/';
    
//     if(!is_dir($carpetaImagenes)){
//         echo'a';
//          mkdir($carpetaImagenes);
//     }
//     // echo $imagen['tmp_name'];
//     if(move_uploaded_file($imagen['tmp_name'],$carpetaImagenes."archivo.jpg")){
//         chmod($carpetaImagenes,0777);
//         echo "movido";
//     };
//     if(isset($_SESSION['escolaridad'])&& !isset($_SESSION['ocupacion'])){
//         echo'1';
//         $escolaridad = $_SESSION['escolaridad'];
//         $sql1 = "INSERT INTO denuncia (id, cp, seccionElectoral, sexo, ocupacion, escolaridad, descripcion, ubicacion, direccion, nombreSosp, instSosp, rolSosp, fecha, hora) 
//         VALUES (:id, :cp, :seccionElectoral, :sexo, NULL, :escolaridad, :descripcion, :ubicacion, :direccion, :nombreSosp, :instSosp, :rolSosp, :fecha, :hora)";
//         $stmt = $pdo->prepare($sql1);
//         $stmt->bindParam(':escolaridad', $escolaridad);
//     }
//     else if(isset($_SESSION['ocupacion']) && !isset($_SESSION['escolaridad'])){
//         echo'<br>2';
//         $ocupacion = $_SESSION['ocupacion'];
//         $sql1 = "INSERT INTO denuncia (id, cp, seccionElectoral, sexo, ocupacion, escolaridad, descripcion, ubicacion, direccion, nombreSosp, instSosp, rolSosp, fecha, hora) 
//         VALUES ($id, $cp, $s_e, '$sexo', '$ocupacion',null, '$explicacion', $municipio, '$direccion', '$nombre', '$institucion', '$rol', '$fecha', '$hora')";
//         $stmt = $pdo->prepare($sql1);
//         $stmt->bindParam(':ocupacion', $ocupacion);
//     }
//     else if(isset($_SESSION['ocupacion']) && isset($_SESSION['escolaridad'])){
//         echo'3';
//         $ocupacion = $_SESSION['ocupacion'];
//         $escolaridad = $_SESSION['escolaridad'];
//         $sql1 = "INSERT INTO denuncia (id, cp, seccionElectoral, sexo, ocupacion, escolaridad, descripcion, ubicacion, direccion, nombreSosp, instSosp, rolSosp, fecha, hora) 
//         VALUES ($id, $cp, $s_e, '$sexo', '$ocupacion',$escolaridad  , '$explicacion', $municipio, '$direccion', '$nombre', '$institucion', '$rol', '$fecha', '$hora')";
//         $stmt = $pdo->prepare($sql1);
//         $stmt->bindParam(':ocupacion', $ocupacion);
//         $stmt->bindParam(':escolaridad', $escolaridad);

//     }
//     else if(!isset($_SESSION['ocupacion']) && !isset($_SESSION['escolaridad'])){
//         echo'4';
//         $sql1 = "INSERT INTO denuncia (id, cp, seccionElectoral, sexo, ocupacion, escolaridad, descripcion, ubicacion, direccion, nombreSosp, instSosp, rolSosp, fecha, hora) 
//         VALUES ($id, $cp, $s_e, '$sexo', null, null, '$explicacion', $municipio, '$direccion', '$nombre', '$institucion', '$rol', '$fecha', '$hora')";
//         $stmt = $pdo->prepare($sql1);
        
//     }
    

//     // Asignar valores a los parámetros
//     $stmt->bindParam(':id', $id);
//     $stmt->bindParam(':cp', $cp);
//     $stmt->bindParam(':seccionElectoral', $s_e);
//     $stmt->bindParam(':sexo', $sexo);  
//     $stmt->bindParam(':descripcion', $explicacion);
//     $stmt->bindParam(':ubicacion', $municipio);
//     $stmt->bindParam(':direccion', $direccion);
//     $stmt->bindParam(':nombreSosp', $nombre);
//     $stmt->bindParam(':instSosp', $institucion);
//     $stmt->bindParam(':rolSosp', $rol);
//     $stmt->bindParam(':fecha', $fecha);
//     $stmt->bindParam(':hora', $hora);
//     try {
//         $stmt->execute();
//         $sql1 = "";
//         echo "Inserción exitosa.";
//     } catch (PDOException $e) {
//         echo "Error al ejecutar la consulta: " . $e->getMessage();
//     }   
//     if ($result1){
        
//         if(isset($_POST['conductas1'])){
//             $c1 = $_POST['conductas1'];
//             foreach ($c1 as $valor) {
//                 $sql2 = "INSERT INTO denunciaconducta (id_denuncia, id_conducta) VALUES ($id,$valor)";
//                 $result2 = mysqli_query($mysqli, $sql2);           
//             }
//             unset($c1);
//         }
//         if(isset($_POST['conductas2'])){
//             $c2 = $_POST['conductas2'];
//             foreach ($c2 as $valor) {
//                 $sql2 = "INSERT INTO denunciaconducta (id_denuncia, id_conducta) VALUES ($id,$valor)";
//                 $result2 = mysqli_query($mysqli, $sql2);
//             }
//             unset($c2);
//         }
//         if(isset($_POST['conductas3'])){
//             $c3 = $_POST['conductas3'];
//             foreach ($c3 as $valor) {
//                 $sql2 = "INSERT INTO denunciaconducta (id_denuncia, id_conducta) VALUES ($id,$valor)";
//                 $result2 = mysqli_query($mysqli, $sql2);
//             }
//             unset($c3);
//         }
//         if(isset($_POST['conductas4'])){
//             $c4 = $_POST['conductas4'];
//             foreach ($c4 as $valor) {
//                 $sql2 = "INSERT INTO denunciaconducta (id_denuncia, id_conducta) VALUES ($id,$valor)";
//                 $result2 = mysqli_query($mysqli, $sql2);
//             }
//             unset($c4);
//         }
//         if(isset($_POST['conductas5'])){
//             $c5 = $_POST['conductas5'];
//             foreach ($c5 as $valor) {
//                 $sql2 = "INSERT INTO denunciaconducta (id_denuncia, id_conducta) VALUES ($id,$valor)";
//                 $result2 = mysqli_query($mysqli, $sql2);
//             }
//             unset($c5);
//         }
//         if(isset($_POST['conductas6'])){
//             $c6 = $_POST['conductas6'];
//             foreach ($c6 as $valor) {
//                 $sql2 = "INSERT INTO denunciaconducta (id_denuncia, id_conducta) VALUES ($id,$valor)";
//                 $result2 = mysqli_query($mysqli, $sql2);
//             }
//             unset($c6);
//         }
        

        
//     // //     // Verificar si se han seleccionado conductas para cada campo
//     // //    
        
//     header('Location: DenunciaConfirm.php');
        

//  }



//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPI</title>
    <link rel="icon" href="../assets/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/normalize.css">
</head>
<body>

    <header class="Logo"> <a href="../index.html"> <img src="../assets/logo.png" alt="Logo solo para incorruptibles" height="65px"></a></header>    
    
    <nav class="navbar navbar-expand-lg" style="background-color: #7D7097;">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nv collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="../creditos.html">Créditos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="../index.html">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Estadísticas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../recursos.html">Recursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../3de3.html">Iniciativa 3 de 3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../denuncia.html">Denunciar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login.php">Iniciar Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
        <div class="container formulario">
            <div class="row d-block justify-content-center">
                <h2 class="titulo">DENUNCIA “ELECCIÓN SIN CORRUPCIÓN”</h2>
                    <p class=" no-margin progress__text">Progreso</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 80%;">80%</div>
                    </div>
                    <p class="categoria">¿Qué conductas considera que se cometieron?</p>
                <form action="" class="form-6" method="post" onsubmit="return validarFormulario();" enctype="multipart/form-data">
                    <div class="formu-6">
                        <div class="col-md-10 contenedor-conductas mb-5">   
                            <div class="col-sm-12 col-md-5 me-md-5 contenedor-conducta">
                                <label class="form-label fw-800">Cualquier persona:</label>
                                <div class="opciones-select-conductas">

                                <?php
                                require_once '../includes/dbh.inc.php';
                                $query = "SELECT id, nombreCond FROM conducta WHERE tipo = 'Cualquier persona';";
                                foreach ($pdo->query($query) as $row) {
                                    $id = $row['id'];
                                    $nombreCond = $row['nombreCond'];
                                    echo '<div class="d-flex option-conducta">';
                                    echo '<input class="option-conducta-input" type="checkbox" id="' . $id . '" name="conductas1[]" value="' . $id . '">';
                                    echo '<label for="' . $id . '">&nbsp;&nbsp;' . $nombreCond . '</label><br>';
                                    echo '</div>';
                                }
                               
			  					?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 me-md-5 contenedor-conducta">
                                <label class="form-label">Servidor/a público:</label>
                                <div class="opciones-select-conductas">
                                    <?php
                                        require_once '../includes/dbh.inc.php';
                                        $query = "SELECT id, nombreCond FROM conducta WHERE tipo = 'Servidor/a público';";
                                        foreach ($pdo->query($query) as $row) {
                                            $id = $row['id'];
                                            $nombreCond = $row['nombreCond'];
                                            echo '<div class="d-flex option-conducta">';
                                            echo '<input class="option-conducta-input" type="checkbox" id="' . $id . '" name="conductas1[]" value="' . $id . '">';
                                            echo '<label for="' . $id . '">&nbsp;&nbsp;' . $nombreCond . '</label><br>';
                                            echo '</div>';
                                        }
                                    ?>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-10 contenedor-conductas mb-5 ">
                            
                            <div class="col-sm-12 col-md-5 me-md-5 contenedor-conducta">
                            <label class="form-label">Funcionario/a electoral:</label>
                                <div class="opciones-select-conductas">
                                    <?php
                                            require_once '../includes/dbh.inc.php';
                                            $query =  "SELECT id, nombreCond FROM conducta WHERE tipo = 'Funcionario/a electoral';";
                                            foreach ($pdo->query($query) as $row) {
                                                $id = $row['id'];
                                                $nombreCond = $row['nombreCond'];
                                                echo '<div class="d-flex option-conducta">';
                                                echo '<input class="option-conducta-input" type="checkbox" id="' . $id . '" name="conductas1[]" value="' . $id . '">';
                                                echo '<label for="' . $id . '">&nbsp;&nbsp;' . $nombreCond . '</label><br>';
                                                echo '</div>';
                                            }
                                        ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 me-md-5 contenedor-conducta">
                                <label class="form-label">Funcionario/a partidista:</label>
                                <div class="opciones-select-conductas">
                                    <?php
                                            require_once '../includes/dbh.inc.php';
                                            $query =  "SELECT id, nombreCond FROM conducta WHERE tipo = 'Funcionario/a partidista';";
                                            foreach ($pdo->query($query) as $row) {
                                                $id = $row['id'];
                                                $nombreCond = $row['nombreCond'];
                                                echo '<div class="d-flex option-conducta">';
                                                echo '<input class="option-conducta-input" type="checkbox" id="' . $id . '" name="conductas1[]" value="' . $id . '">';
                                                echo '<label for="' . $id . '">&nbsp;&nbsp;' . $nombreCond . '</label><br>';
                                                echo '</div>';
                                            }
                                        ?>
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-md-10 contenedor-conductas mb-5">      
                            <div class="col-sm-12 col-md-5 me-md-5 contenedor-conducta">
                                <label class="form-label">Ministros/as de culto religioso:</label>
                                <div class="opciones-select-conductas">
                                    <?php
                                        require_once '../includes/dbh.inc.php';
                                        $query =  "SELECT id, nombreCond FROM conducta WHERE tipo = 'Ministros/as de culto religioso';";
                                        foreach ($pdo->query($query) as $row) {
                                            $id = $row['id'];
                                            $nombreCond = $row['nombreCond'];
                                            echo '<div class="d-flex option-conducta">';
                                            echo '<input class="option-conducta-input" type="checkbox" id="' . $id . '" name="conductas1[]" value="' . $id . '">';
                                            echo '<label for="' . $id . '">&nbsp;&nbsp;' . $nombreCond . '</label><br>';
                                            echo '</div>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 me-md-5 contenedor-conducta">
                                <label class="form-label">Diputados/as y Senadores/as electos:</label>
                                <div class="opciones-select-conductas">
                                    <?php
                                        require_once '../includes/dbh.inc.php';
                                        $query =  "SELECT id, nombreCond FROM conducta WHERE tipo = 'Diputados/as y Senadores/as electos';";
                                        foreach ($pdo->query($query) as $row) {
                                            $id = $row['id'];
                                            $nombreCond = $row['nombreCond'];
                                            echo '<div class="d-flex option-conducta">';
                                            echo '<input class="option-conducta-input" type="checkbox" id="' . $id . '" name="conductas1[]" value="' . $id . '">';
                                            echo '<label for="' . $id . '">&nbsp;&nbsp;' . $nombreCond . '</label><br>';
                                            echo '</div>';
                                        }
                                ?>
                                </div>
                            </div>
                            
                             
                        </div> 
                        <div class="col-md-10 contenedor-conductas mb-5" > 
                            <div class="col-sm-12 col-md-5 me-md-5 contenedor-conducta">
                                <label class="form-label">Fedatarios/as públicos:</label>
                                <div class="opciones-select-conductas">
                                <?php
                                        require_once '../includes/dbh.inc.php';
                                        $query =  "SELECT id, nombreCond FROM conducta WHERE tipo = 'Fedatarios/as públicos';";
                                        foreach ($pdo->query($query) as $row) {
                                            $id = $row['id'];
                                            $nombreCond = $row['nombreCond'];
                                            echo '<div class="d-flex option-conducta">';
                                            echo '<input class="option-conducta-input" type="checkbox" id="' . $id . '" name="conductas1[]" value="' . $id . '">';
                                            echo '<label for="' . $id . '">&nbsp;&nbsp;' . $nombreCond . '</label><br>';
                                            echo '</div>';
                                        }
                                ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 me-md-5 contenedor-conducta">
                                <label class="form-label">Ex magistrados electorales, Consejeros Electorales, Secretario Ejecutivo del INE:</label>
                                <div class="opciones-select-conductas">
                                    <?php
                                            require_once '../includes/dbh.inc.php';
                                            $query =  "SELECT id, nombreCond FROM conducta WHERE tipo = 'Ex Mag E, Con E, Secretario INE';";
                                            foreach ($pdo->query($query) as $row) {
                                                $id = $row['id'];
                                                $nombreCond = $row['nombreCond'];
                                                echo '<div class="d-flex option-conducta">';
                                                echo '<input class="option-conducta-input" type="checkbox" id="' . $id . '" name="conductas1[]" value="' . $id . '">';
                                                echo '<label for="' . $id . '">&nbsp;&nbsp;' . $nombreCond . '</label><br>';
                                                echo '</div>';
                                            }
                                    ?>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-10 contenedor-conductas mb-5">
                            <label  class="form-label" for="imagen">Seleccionar imagen:</label>
                            <input  type="file" id="imagen" name="imagen" accept="image/jpg , image/png , image/jpeg">
                        </div>
                        <div class="col-md-12">
                        <input type="submit" class="boton boton--secundario" name="validate" value="Enviar">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    

    
    <footer>
        <div class="footer">
           <a href="https://www.facebook.com/spincorruptibles"> <svg width="70" height="65" viewBox="0 0 70 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="35" cy="32.5" rx="35" ry="32.5" fill="#46427E"/>
                <path d="M30 53V33H23.3334V26.3333H30V22.7533C30 15.975 33.3017 13 38.935 13C41.6334 13 43.06 13.2 43.735 13.2917V19.6667H39.8934C37.5017 19.6667 36.6667 20.9283 36.6667 23.485V26.3333H43.675L42.7234 33H36.6667V53H30Z" fill="white"/>
                </svg></a>
             <a href="https://twitter.com/spincorruptible"><svg width="70" height="65" viewBox="0 0 70 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="35" cy="32.5" rx="35" ry="32.5" fill="#46427E"/>
                    <path d="M14.1098 13.8243L30.3198 34.9775L14.0074 52.1759H17.6787L31.9601 37.1184L43.4991 52.1759H55.9925L38.8705 29.8329L54.0539 13.8243H50.3826L37.2302 27.692L26.6032 13.8243H14.1098ZM19.5087 16.4636H25.2482L50.5928 49.5362H44.8533L19.5087 16.4636Z" fill="white"/>
                    </svg></a>
            <a href="https://www.instagram.com/spincorruptibles/"><svg width="70" height="65" viewBox="0 0 70 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="35" cy="32.5" rx="35" ry="32.5" fill="#46427E"/>
                        <path d="M25.6634 13C19.2317 13 14 18.2366 14 24.6699V41.3366C14 47.7683 19.2366 53 25.6699 53H42.3366C48.7683 53 54 47.7634 54 41.3301V24.6634C54 18.2317 48.7634 13 42.3301 13H25.6634ZM45.6667 19.6667C46.5867 19.6667 47.3333 20.4133 47.3333 21.3333C47.3333 22.2533 46.5867 23 45.6667 23C44.7467 23 44 22.2533 44 21.3333C44 20.4133 44.7467 19.6667 45.6667 19.6667ZM34 23C39.515 23 44 27.485 44 33C44 38.515 39.515 43 34 43C28.485 43 24 38.515 24 33C24 27.485 28.485 23 34 23ZM34 26.3333C32.2319 26.3333 30.5362 27.0357 29.286 28.286C28.0357 29.5362 27.3333 31.2319 27.3333 33C27.3333 34.7681 28.0357 36.4638 29.286 37.714C30.5362 38.9643 32.2319 39.6667 34 39.6667C35.7681 39.6667 37.4638 38.9643 38.714 37.714C39.9643 36.4638 40.6667 34.7681 40.6667 33C40.6667 31.2319 39.9643 29.5362 38.714 28.286C37.4638 27.0357 35.7681 26.3333 34 26.3333Z" fill="white"/>
                        </svg></a>
            <a href="https://www.youtube.com/@soloparaincorruptibles3123"><svg width="70" height="65" viewBox="0 0 70 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="35" cy="32.5" rx="35" ry="32.5" fill="#46427E"/>
                            <g clip-path="url(#clip0_0_1)">
                            <path d="M56.7112 25.4618C56.7112 22.2977 53.8666 19.7524 50.3518 19.7524C45.5909 19.5703 40.7354 19.5 35.7733 19.5H34.2265C29.2765 19.5 24.4124 19.5703 19.6515 19.7531C16.1452 19.7531 13.3007 22.3125 13.3007 25.4766C13.0858 27.979 12.9948 30.4821 12.9999 32.9852C12.9913 35.4884 13.0887 37.9938 13.2921 40.5016C13.2921 43.6657 16.1366 46.2321 19.6429 46.2321C24.6444 46.422 29.7749 46.5063 34.9913 46.4993C40.2163 46.5134 45.3325 46.4243 50.3398 46.2321C53.8546 46.2321 56.6991 43.6657 56.6991 40.5016C56.9054 37.9915 56.9999 35.4884 56.9913 32.9782C57.0108 30.4751 56.9174 27.9696 56.7112 25.4618ZM30.789 39.8829V26.0665L43.2499 32.9712L30.789 39.8829Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_0_1">
                            <rect width="44" height="36" fill="white" transform="translate(13 15)"/>
                            </clipPath>
                            </defs>
                            </svg></a>
                                              
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function validarFormulario() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var alMenosUnoSeleccionado = false;

            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    alMenosUnoSeleccionado = true;
                }
            });

            if (!alMenosUnoSeleccionado) {
                alert("Debes seleccionar al menos una opción.");
                return false; 
            }
            return true; 
        }
    </script>
</body>
</html>