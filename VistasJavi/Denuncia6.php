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
$opciones_conducta1 = array();
while($row = $conducta1->fetch_assoc()) {
    $opciones_conducta1[] = array(
        'id' => $row['id'],
        'nombreCond' => $row['nombreCond']
    );
}

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
                                <label class="form-label" for="campo1">Cualquier persona:</label>
                                <div class="select-conductas-i">
                                    <p class="me-4">1.-</p>
                                    <select class="form-control conducta" id="campo1" name="campo1" required>
                                    <option value="">Seleccionar</option>
                                    <?php foreach($opciones_conducta1 as $opcion) { ?>
                                        <option value="<?php echo $opcion['id']; ?>"><?php echo $opcion['nombreCond']; ?></option>
                                    <?php } ?>
                                </select></div>
                                
                                <div id="container1"></div>
                                <button type="button" class="btn-add" onclick="agregarCampo('container1', <?php echo json_encode($opciones_conducta1); ?>)">Agregar Campo</button>
                            </div>
                            <div class="col-sm-12 col-md-5 me-md-5">
                                <label class="form-label" for="campo2">Servidor/a público:</label>
                                <div class="select-conductas-i">
                                    <p class="me-4">1.-</p>
                                    <select class="form-control conducta" id="campo2" name="campo2" required>
                                    <option value="">Seleccionar</option>
                                    <?php while($row = $conducta2->fetch_assoc()){ ?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['nombreCond'];?></option>
                                    <?php }  ?>
                                </select></div>
                                
                                <div id="container2"></div>
                                <button type="button" class="btn-add" onclick="agregarCampo('container2', 'button2')">Agregar Campo</button>  
                            </div>
                        </div>
                        <div class="col-md-10 contenedor-conductas mb-5">
                            <div class="col-sm-12 col-md-5 me-md-5">
                                <label class="form-label" for="campo3">Funcionario/a electoral:</label>
                                <div class="select-conductas-i">
                                    <p class="me-4">1.-</p>
                                    <select class="form-control conducta" id="campo3" name="campo3" required>
                                    <option value="">Seleccionar</option>
                                    <?php while($row = $conducta3->fetch_assoc()){ ?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['nombreCond'];?></option>
                                    <?php }  ?>
                                </select></div>
                                
                                <div id="container3"></div>
                                <button type="button" class="btn-add" onclick="agregarCampo('container3', 'button3')">Agregar Campo</button>
                                
                            </div>
                            <div class="col-sm-12 col-md-5 me-md-5">
                                <label class="form-label" for="campo4">Funcionario/a partidista:</label>
                                <div class="select-conductas-i">
                                    <p class="me-4">1.-</p>
                                    <select class="form-control conducta" id="campo4" name="campo4" required>
                                    <option value="">Seleccionar</option>
                                    <?php while($row = $conducta4->fetch_assoc()){ ?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['nombreCond'];?></option>
                                    <?php }  ?>
                                </select></div>
                                
                                <div id="container4"></div>
                                <button type="button" class="btn-add" onclick="agregarCampo('container4', 'button4')">Agregar Campo</button>
                            </div>
                        </div>
                        <div class="col-md-10 contenedor-conductas mb-5">      
                            
                            <div class="col-sm-12 col-md-5 me-md-5">
                                <label class="form-label" for="campo5">Ministros/as de culto religioso:</label>
                                <div class="select-conductas-i">
                                    <p class="me-4">1.-</p>
                                    <select class="form-control conducta" id="campo5" name="campo5" required>
                                    <option value="">Seleccionar</option>
                                    <?php while($row = $conducta5->fetch_assoc()){ ?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['nombreCond'];?></option>
                                    <?php }  ?>
                                </select></div>
                                
                                
                            </div>
                            <div class="col-sm-12 col-md-5 me-md-5">
                                <label class="form-label" for="campo6">Diputados/as y Senadores/as electos:</label>
                                <div class="select-conductas-i">
                                    <p class="me-4">1.-</p>
                                    <select class="form-control conducta" id="campo6" name="campo6" required>
                                        <option value="">Seleccionar</option>
                                        <?php while($row = $conducta6->fetch_assoc()){ ?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['nombreCond'];?></option>
                                    <?php }  ?>
                                    </select>
                                </div>        
                            </div>
                        
                                
                                
                        </div> 
                        <div class="col-md-10 contenedor-conductas mb-5" > 
                            <div class="col-sm-12 col-md-5 me-md-5">
                                <label class="form-label" for="campo7">Fedatarios/as públicos:</label>
                                <div class="select-conductas-i">
                                    <p class="me-4">1.-</p>
                                    <select class="form-control conducta" id="campo7" name="campo7" required>
                                        <option value="">Seleccionar</option>
                                        <?php while($row = $conducta7->fetch_assoc()){ ?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['nombreCond'];?></option>
                                    <?php }  ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 me-md-5">
                                <label class="form-label" for="campo8">Ex magistrados electorales, Consejeros Electorales, Secretario Ejecutivo del INE:</label>
                                <div class="select-conductas-i">
                                    <p class="me-4">1.-</p>
                                    <select class="form-control conducta" id="campo8" name="campo8" required>
                                        <option value="">Seleccionar</option>
                                        <?php while($row = $conducta8->fetch_assoc()){ ?>
                                        <option value="<?php echo $row['id'];?>"><?php echo $row['nombreCond'];?></option>
                                    <?php }  ?>
                                    </select>
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
    <script>
    // Función para agregar un nuevo campo select
    function agregarCampo(containerId, opcionesDisponibles) {
        // Obtener el contenedor y el select
        var container = document.getElementById(containerId);
        var select = container.querySelector('select');

        // Crear un nuevo select
        var nuevoSelect = document.createElement('select');
        nuevoSelect.className = 'form-control conducta';
        nuevoSelect.required = true;

        // Agregar la opción por defecto
        var opcionDefault = document.createElement('option');
        opcionDefault.value = '';
        opcionDefault.text = 'Seleccionar';
        nuevoSelect.appendChild(opcionDefault);

        // Agregar las opciones disponibles al nuevo select
        opcionesDisponibles.forEach(function(opcion) {
            var nuevaOpcion = document.createElement('option');
            nuevaOpcion.value = opcion.id;
            nuevaOpcion.text = opcion.nombreCond;
            nuevoSelect.appendChild(nuevaOpcion);
        });

        // Agregar el nuevo select al contenedor
        container.appendChild(nuevoSelect);
    }
</script>
</body>
</html>