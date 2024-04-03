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

    <header class="Logo"> <a href="/Solo_Para_Incorruptibles/VistasCruz/index.html"> <img src="/Solo_Para_Incorruptibles/VistasCruz/assets/logo.png" alt="Logo solo para incorruptibles" height="65px"></a></header>    
    
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
        
        
        <div class="contenedor">
            <h2 class="titulo denuncia">Denuncia</h2>
            <div class="tres-columnas">
                <div class="dato">
                    <h4 class="titulo">
                        Ubicación del delito
                    </h4>
                    <div class="dos-columnas">
                        <?php
                        // Verifica si se ha proporcionado un ID en la URL
                        if(isset($_GET['id'])) {
                            // Obtiene el ID del registro de la URL y lo limpia
                            $id = htmlspecialchars($_GET['id']);
                            
                            // Establece la conexión a la base de datos
                            require './includes/database.php';
                            
                            // Verifica la conexión
                            if (!$mysqli ) {
                                echo 'Error de conexión';
                            }
                            
                            // Realiza la consulta para obtener los detalles del registro con el ID proporcionado
                            $consulta = "SELECT 
                            d.*,
                            estados.nombre AS nombre_estado,
                            municipios.nombre AS nombre_municipio
                        FROM 
                            (SELECT * FROM denuncia WHERE id = $id) AS d
                        INNER JOIN 
                            municipios ON d.ubicacion = municipios.id
                        INNER JOIN 
                            estados ON municipios.estado = estados.id;";
                            if ($resultado = mysqli_query($mysqli, $consulta)) {
                                // Verifica si se encontraron resultados
                                if (mysqli_num_rows($resultado) > 0) {
                                    // Muestra los detalles del registro
                                    $fila = mysqli_fetch_assoc($resultado);
                                    echo "<div>";
                                    echo "<p class='datos'>ESTADO</p>";
                                    echo "<p>" . $fila['nombre_estado'] . "</p>";
                                    echo "</div>";
                                    echo "<div>";
                                    echo "<p class='datos'>MUNICIPIO</p>";
                                    echo "<p>" . $fila['nombre_municipio'] . "</p>";
                                    echo "</div>";
                                } else {
                                    // No se encontraron registros con el ID proporcionado
                                    echo "No se encontraron detalles para el ID proporcionado.";
                                }
                                // Libera el resultado
                                mysqli_free_result($resultado);
                            } else {
                                echo "ERROR: No se pudo ejecutar $consulta. " . mysqli_error($mysqli);
                            }
                            
                            // Cierra la conexión
                            mysqli_close($mysqli);
                        } else {
                            // No se proporcionó un ID en la URL
                            echo "ID no proporcionado.";
                        }
                        ?>
                    </div>
                </div>
                <div class="dato">
                    <h4 class="titulo">
                        Temporalidad
                    </h4>
                    <div class="dos-columnas ">
                        <?php
                        // Muestra la temporalidad solo si se encontró un registro con el ID proporcionado
                        if(isset($fila)) {
                            echo "<div>";
                            echo "<p class='datos'>FECHA</p>";
                            echo "<p>" . $fila['fecha'] . "</p>";
                            echo "</div>";
                            echo "<div>";
                            echo "<p class='datos'>HORA</p>";
                            echo "<p>" . $fila['hora'] . "</p>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
                <div class="dato">
                    <h4 class="titulo">
                        Persona involucrada
                    </h4>
                    <div class="columnas3 x">
                        <div>
                            <p class="datos">NOMBRE</p>
                        <?php
                            if(isset($fila)) {
                                echo "<p>" . $fila['nombreSosp'] . "</p>";
                            }
                            ?>
                        </div>
                        <div>
                        <p class="datos">ROL</p>
                        <?php
                            if(isset($fila)) {
                                echo "<p>" . $fila['rolSosp'] . "</p>";
                            }
                            ?>
                        </div>
                        <div>
                            <p class="datos">INSTITUCIÓN</p>
                            <?php
                            if(isset($fila)) {
                                echo "<p>" . $fila['instSosp'] . "</p>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tres-columnas2">
                <div class="dato">
                    <h4 class="titulo">
                        Descripción de los hechos
                    </h4>
                    <div class="">
                    <?php
                        // Muestra la temporalidad solo si se encontró un registro con el ID proporcionado
                        if(isset($fila)) {
                            echo "<p>" . $fila['descripcion'] . "</p>";
                        }
                        ?>
                    </div>
                </div>
                <div class="dato">
                    <h4 class="titulo">
                        Conductas cometidas
                    </h4>
                    <div class="dos-columnas datos">
                        
                    </div>
                </div>
                <div class="dato">
                    <h4 class="titulo">
                        Evidencia
                    </h4>
                    <div class="datos">
                    </div>
                </div>
            </div>
                    
        </div>
    </main>
    

    <footer class="footer">
        <footer class="container">
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