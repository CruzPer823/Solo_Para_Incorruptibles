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
              <a class="nav-link" href="3de3Admin.html">Iniciativa 3 de 3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="demandasReportadas.html">Denuncias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Cerrar Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
    <div class="contenedor formulario mt-5 pe-5 ps-5">
    <h2 class="titulo ">Denuncias reportadas</h2>
    <div class="table-responsive">
        <table class="table table-hover border-black tabla">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Municipio</thd>
                    <th scope="col">hola</th>
                </tr>
            </thead>
            <tbody>

                <?php
            // Establece la conexión a la base de datos
            require './includes/database.php';
        
            // Verifica la conexión
            
        
            // // Realiza la consulta
            $consulta = "SELECT denuncia.id AS denuncia_id, estados.nombre AS nombre_estado, municipios.nombre AS nombre_municipio FROM denuncia INNER JOIN municipios ON denuncia.ubicacion = municipios.id INNER JOIN estados ON municipios.estado = estados.id;";
            
            if ($resultado = mysqli_query($mysqli, $consulta)) {
                // Itera sobre los resultados y muestra cada fila en la tabla
                while ($fila = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td><a href='detallesDenuncia.php?id=" . $fila['denuncia_id'] . "'>" . $fila['denuncia_id'] . "</a></td>";
                    echo "<td>" . $fila['nombre_estado'] . "</td>";
                    echo "<td>". $fila["nombre_municipio"] . "</td>";
                    echo "<td> <input type='button' name='pub' class='boton-tabla boton--secundario no-margin' value='Publicar'></td>";
                    // Agrega más columnas según sea necesario
                    echo "</tr>";
                }
                // Libera el resultado
                mysqli_free_result($resultado);
            } else {
                echo "ERROR: No se pudo ejecutar $consulta. " . mysqli_error($mysqli);
            }
        
            // Cierra la conexión
            mysqli_close($mysqli);
            ?>
            </tbody>
        </table>
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