<?php
require './includes/database.php';

$conducta1 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Cualquier persona'");
$conducta2 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Servidor/a público'");
$conducta3 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Funcionario/a electoral'");
$conducta4 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Funcionario/a partidista'");
$conducta5 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Ministros/as de culto religioso'");
$conducta6 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Diputados/as y Senadores/as electos'");
$conducta7 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Fedatarios/as públicos'");
$conducta8 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Ex Mag E, Con E, Secretario INE'");
$conducta9 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Candidato/a'");
$conducta10 = $mysqli->query("SELECT id, nombreCond FROM conducta WHERE tipo = 'Funcionario/a de casilla'");

// Iniciar sesión
session_start();

// Comprobar si existe el código postal en la sesión
if(isset($_POST['CP'])&& isset($_POST['seccion_electoral']) && isset($_POST['sexo'])&& isset($_POST['ocupacion']) && isset($_POST['escolaridad'])&& isset($_POST['explicacion'])&&isset($_POST['estados'])&&isset($_POST['municipios'])&&isset($_POST['nombre'])&&isset($_POST['institucion']) && isset($_POST['rol'])&&isset($_POST['fecha'])&&isset($_POST['hora'])) {
    // Si no existe, redirigir a la primera página
    header('Location: Denuncia4.php');
    exit();
}

// Recibir datos del formulario
if(isset($_POST['campo1'])) {
    // Guardar los datos en la sesión o hacer lo que necesites
    $_SESSION['campo1'] = $_POST['campo1'];
    $_SESSION['archivo'] = $_POST['archivo'];
    // Redirigir a la siguiente página o hacer lo que necesites
    header('Location: DenunciaConfirm.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
</head>
<body>

    <header class="Logo"> <a href="/Solo_Para_Incorruptibles/VistasCruz/index.html"> <img src="SPI/Solo_Para_Incorruptibles/VistasCruz/assets/logo.png" alt="Logo solo para incorruptibles" height="65px"></a></header>    
    <nav class="navbar navbar-expand-lg" style="background-color: #7D7097;">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="nv collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " href="/Solo_Para_Incorruptibles/VistasJavi/creditos.html">Créditos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="index.html">Acerca de</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Estadísticas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Solo_Para_Incorruptibles/VistasJavi/recursos.html">Recursos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Iniciativa 3 de 3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/Solo_Para_Incorruptibles/VistasCruz/denuncia.html">Denunciar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="/Solo_Para_Incorruptibles/VistasCruz/login.html">Iniciar Sesión</a>
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
                <form action="" class="form-6" method="post" >
                    <div class="formu-6">
                        <div class="col-md-10 contenedor-conductas mb-5">   
                            <div class="col-sm-12 col-md-5 me-md-5">
                                <label class="form-label">Cualquier persona:</label>
                                <div>
                                    <?php 
                                        if ($conducta1->num_rows > 0) {
                                                // Mostrar cada resultado como un checkbox
                                                while ($row = $conducta1->fetch_assoc()) {
                                                    $id = $row['id'];
                                                    $nombreCond = $row['nombreCond'];
                                                    echo '<div>';
                                                    echo '<input type="checkbox" id="' . $id . '" name="conductas[]" value="' . $id . '">';
                                                    echo '<label for="' . $id . '">' . $nombreCond . '</label><br>';
                                                    echo '</div>';
                                                }
                                            }
                                        ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 me-md-5">
                                <label class="form-label">Servidor/a público:</label>
                                <div>
                                    <?php 
                                        if ($conducta2->num_rows > 0) {
                                                // Mostrar cada resultado como un checkbox
                                                while ($row = $conducta2->fetch_assoc()) {
                                                    $id = $row['id'];
                                                    $nombreCond = $row['nombreCond'];
                                                    echo '<div>';
                                                    echo '<input type="checkbox" id="' . $id . '" name="conductas[]" value="' . $id . '">';
                                                    echo '<label for="' . $id . '">' . $nombreCond . '</label><br>';
                                                    echo '</div>';
                                                }
                                            }
                                        ?>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-10 contenedor-conductas mb-5">
                            
                            <div class="col-sm-12 col-md-5 me-md-5">
                            <label class="form-label">Funcionario/a electoral:</label>
                                <div>
                                    <?php 
                                        if ($conducta3->num_rows > 0) {
                                                // Mostrar cada resultado como un checkbox
                                                while ($row = $conducta3->fetch_assoc()) {
                                                    $id = $row['id'];
                                                    $nombreCond = $row['nombreCond'];
                                                    echo '<div>';
                                                    echo '<input type="checkbox" id="' . $id . '" name="conductas[]" value="' . $id . '">';
                                                    echo '<label for="' . $id . '">' . $nombreCond . '</label><br>';
                                                    echo '</div>';
                                                }
                                            }
                                        ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 me-md-5">
                                <label class="form-label">Funcionario/a partidista:</label>
                                <div>
                                    <?php 
                                        if ($conducta4->num_rows > 0) {
                                                // Mostrar cada resultado como un checkbox
                                                while ($row = $conducta4->fetch_assoc()) {
                                                    $id = $row['id'];
                                                    $nombreCond = $row['nombreCond'];
                                                    echo '<div>';
                                                    echo '<input type="checkbox" id="' . $id . '" name="conductas[]" value="' . $id . '">';
                                                    echo '<label for="' . $id . '">' . $nombreCond . '</label><br>';
                                                    echo '</div>';
                                                }
                                            }
                                        ?>
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-md-10 contenedor-conductas mb-5">      
                            <div class="col-sm-12 col-md-5 me-md-5">
                                <label class="form-label">Ministros/as de culto religioso:</label>
                                <div>
                                    <?php 
                                        if ($conducta5->num_rows > 0) {
                                                // Mostrar cada resultado como un checkbox
                                                while ($row = $conducta5->fetch_assoc()) {
                                                    $id = $row['id'];
                                                    $nombreCond = $row['nombreCond'];
                                                    echo '<div>';
                                                    echo '<input type="checkbox" id="' . $id . '" name="conductas[]" value="' . $id . '">';
                                                    echo '<label for="' . $id . '">' . $nombreCond . '</label><br>';
                                                    echo '</div>';
                                                }
                                            }
                                        ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 me-md-5">
                                <label class="form-label">Diputados/as y Senadores/as electos:</label>
                                <div>
                                    <?php 
                                        if ($conducta6->num_rows > 0) {
                                                // Mostrar cada resultado como un checkbox
                                                while ($row = $conducta6->fetch_assoc()) {
                                                    $id = $row['id'];
                                                    $nombreCond = $row['nombreCond'];
                                                    echo '<div>';
                                                    echo '<input type="checkbox" id="' . $id . '" name="conductas[]" value="' . $id . '">';
                                                    echo '<label for="' . $id . '">' . $nombreCond . '</label><br>';
                                                    echo '</div>';
                                                }
                                            }
                                        ?>
                                </div>
                            </div>
                            
                             
                        </div> 
                        <div class="col-md-10 contenedor-conductas mb-5" > 
                            <div class="col-sm-12 col-md-5 me-md-5">
                                <label class="form-label">Fedatarios/as públicos:</label>
                                <div>
                                    <?php 
                                        if ($conducta7->num_rows > 0) {
                                                // Mostrar cada resultado como un checkbox
                                                while ($row = $conducta7->fetch_assoc()) {
                                                    $id = $row['id'];
                                                    $nombreCond = $row['nombreCond'];
                                                    echo '<div>';
                                                    echo '<input type="checkbox" id="' . $id . '" name="conductas[]" value="' . $id . '">';
                                                    echo '<label for="' . $id . '">' . $nombreCond . '</label><br>';
                                                    echo '</div>';
                                                }
                                            }
                                        ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 me-md-5">
                                <label class="form-label">Ex magistrados electorales, Consejeros Electorales, Secretario Ejecutivo del INE:</label>
                                <div>
                                    <?php 
                                        if ($conducta8->num_rows > 0) {
                                                // Mostrar cada resultado como un checkbox
                                                while ($row = $conducta8->fetch_assoc()) {
                                                    $id = $row['id'];
                                                    $nombreCond = $row['nombreCond'];
                                                    echo '<div>';
                                                    echo '<input type="checkbox" id="' . $id . '" name="conductas[]" value="' . $id . '">';
                                                    echo '<label for="' . $id . '">' . $nombreCond . '</label><br>';
                                                    echo '</div>';
                                                }
                                            }
                                        ?>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-10 contenedor-conductas mb-5" > 
                            <div class="col-sm-12 col-md-5 me-md-5">
                                <label class="form-label">Candidato/a:</label>
                                <div>
                                    <?php 
                                        if ($conducta9->num_rows > 0) {
                                                // Mostrar cada resultado como un checkbox
                                                while ($row = $conducta9->fetch_assoc()) {
                                                    $id = $row['id'];
                                                    $nombreCond = $row['nombreCond'];
                                                    echo '<div>';
                                                    echo '<input type="checkbox" id="' . $id . '" name="conductas[]" value="' . $id . '">';
                                                    echo '<label for="' . $id . '">' . $nombreCond . '</label><br>';
                                                    echo '</div>';
                                                }
                                            }
                                        ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 me-md-5">
                                <label class="form-label">Funcionario/a de casilla:</label>
                                <div>
                                    <?php 
                                        if ($conducta10->num_rows > 0) {
                                                // Mostrar cada resultado como un checkbox
                                                while ($row = $conducta10->fetch_assoc()) {
                                                    $id = $row['id'];
                                                    $nombreCond = $row['nombreCond'];
                                                    echo '<div>';
                                                    echo '<input type="checkbox" id="' . $id . '" name="conductas[]" value="' . $id . '">';
                                                    echo '<label for="' . $id . '">' . $nombreCond . '</label><br>';
                                                    echo '</div>';
                                                }
                                            }
                                        ?>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-10 contenedor-conductas mb-5">
                            <label  class="form-label" for="archivo">Seleccionar archivo:</label>
                            <input  type="file" id="archivo" name="archivo">
                        </div>
                        <div class="col-md-12">
                        <input type="submit" class="boton boton--secundario" value="Enviar">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex iconos">
                    <div class="icono-redes">
                        <a href="nosotros.html" class=""><img src="img/icons8-facebook 2.svg" alt=""></a>
                    </div>
                    <div class="icono-redes">
                        <a href="cursos.html" class=""><img src="img/twitter-x-seeklogo.com-4 2.svg" alt=""></a>
                    </div>
                    <div class="icono-redes">
                        <a href="contacto.html" class=""><img src="img/youtube-seeklogo.com 2.svg" alt=""></a>
                    </div>
                    <div class="icono-redes">
                        <a href=""><img src="img/icons8-instagram 2.svg" alt=""></a>
                    </div>
                        
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>