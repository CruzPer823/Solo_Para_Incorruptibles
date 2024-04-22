<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/registro_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/logo.png" type="image/x-icon">
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

<header class="Logo"> <a href="index.php"> <img src="assets/logo.png" alt="Logo solo para incorruptibles" height="65px"></a></header>
  <!-- Barra de navegacion -->
  <nav class="navbar navbar-expand-lg" style="background-color: #7D7097;">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nv collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " href="creditos.html">Créditos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="index.php">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" hidden="true">Estadísticas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="recursos.html">Recursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="3de3.php">Iniciativa 3 de 3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="denuncia.html">Denunciar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="login.php">Iniciar Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <main>
        <div class="container formulario">
            <div class="row justify-content-center">
                <h2 class="text-center titulo">REGÍSTRATE</h2>
                <?php
                    check_registro_errors();
                ?>
                <form class="col-md-6 ps-5 pe-5" action="includes/registro.inc.php" method="post"  onsubmit="return validarFormulario()">
                    <div class="contenedor-registro">
                        <div class="col-lg-6 d-flex entrada me-4">
                            <input class="form-control" type="text" name="nombre" placeholder="Nombre" id="name">
                        </div>
                        <div class="col-lg-6 entrada d-flex me-4">
                            <input class="form-control" type="text" name="correo" placeholder="Correo" id="correo">
                        </div>
                    </div>
                    <div class="contenedor-registro">
                        <div class="col-lg-6 entrada d-flex me-4">
                            <input class="form-control" type="password" name="pass" placeholder="Contraseña" id="contraseña">
                        </div>
                        <div class="col-lg-6 entrada d-flex me-4">
                            <input class="form-control" type="password" name="passc" id="confirmacion-contraseña" placeholder="Confirmar contraseña">
                        </div>
                    </div>
                    <div class="d-flex entrada aviso-priv">
                        <input class="" type="checkbox" id="aviso_privacidad" name="aviso_privacidad">
                        <label class="form-label" for="aviso_privacidad"><a href="./Files/AvisoPrivacidad.pdf">Acepto el aviso de privacidad</a></label>
                    </div>

                    <input class="boton boton--primario" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </main>
    

    <footer class="footer">
        <footer class="container">
            <div class="row">
                <div class="col-12 d-flex iconos">
                    <div class="icono-redes">
                        <a href="nosotros.html" class=""><img src="assets/icons8-facebook 2.svg" alt=""></a>
                    </div>
                    <div class="icono-redes">
                        <a href="cursos.html" class=""><img src="assets/twitter-x-seeklogo.com-4 2.svg" alt=""></a>
                    </div>
                    <div class="icono-redes">
                        <a href="contacto.html" class=""><img src="assets/youtube-seeklogo.com 2.svg" alt=""></a>
                    </div>
                    <div class="icono-redes">
                        <a href=""><img src="assets/icons8-instagram 2.svg" alt=""></a>
                    </div>
                        
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>