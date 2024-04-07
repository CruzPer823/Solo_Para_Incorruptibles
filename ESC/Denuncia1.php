<?php
// Iniciar sesión
session_start();
session_unset();

// Recibir código postal del formulario
if(isset($_POST['CP'])&& isset($_POST['seccion_electoral']) && isset($_POST['sexo'])) {
    $_SESSION['CP'] = $_POST['CP'];
    $_SESSION['seccion_electoral'] = $_POST['seccion_electoral'];
    $_SESSION['sexo'] = $_POST['sexo'];
   if(!empty($_POST['ocupacion']) && !empty($_POST['escolaridad'])) {
    $_SESSION['ocupacion'] = $_POST['ocupacion'];
    $_SESSION['escolaridad'] = $_POST['escolaridad'];
   }
   if(!empty($_POST['ocupacion']) && empty($_POST['escolaridad'])){
    $_SESSION['ocupacion'] = $_POST['ocupacion'];
   }
   if(!empty($_POST['escolaridad']) && empty($_POST['ocupacion'])){
    $_SESSION['escolaridad'] = $_POST['escolaridad'];
   }
    // Redirigir a la siguiente página
    header('Location: Denuncia2.php');
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

    <header class="Logo"> <a href="/Solo_Para_Incorruptibles/VistasCruz/index.html"> <img src="/SPI/Solo_Para_Incorruptibles/VistasCruz/assets/logo.png" alt="Logo solo para incorruptibles" height="65px"></a></header>    
    
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
            <div class="row justify-content-center">
                <h2 class="text-center titulo">DENUNCIA “ELECCIÓN SIN CORRUPCIÓN”</h2>
                    <p class="text-center indicaciones">Favor de llenar el siguiente formulario con los datos correspondientes</p>
                    <p class="text-center no-margin progress__text">Progreso</p>
                    <div class="progress">
                        <div class="progress-bar" style="width: 100%;">0%</div>
                    </div>
                    <p class="text-center categoria">Información inicial.</p>
                <form action="" method="POST" class="col-md-7 col-lg-6 ps-5 pe-5">
                    
                    <div class="col-12  entrada">
                        <label class="form-label" for="CP">Código Postal<span class="rojo">*</span>:</label>
                        <input class="form-control text" type="text" placeholder="Ejemplo. 92312" id="CP" name="CP" required>
                    </div>
                    <div class="col-12 entrada ">
                        <label class="form-label" for="seccion_electoral">Sección electoral<span class="rojo">*</span>:</label>
                        <input class="form-control text" type="text" placeholder="" id="seccion_electoral" name="seccion_electoral" required>
                    </div>
                    <div class="col-12 entrada ">
                        <label class="form-label" for="sexo">Sexo<span class="rojo">*</span>:</label>
                        <select class="form-control text" id="sexo" name="sexo" required>
                            <option value="">Seleccionar</option>
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div class="col-12 entrada ">
                        <label class="form-label" for="ocupacion">Ocupacion:</label>
                        <input class="form-control text" type="text" placeholder="" id="ocupacion" name="ocupacion">
                    </div>
                    <div class="col-12 entrada ">
                        <label class="form-label" for="escolaridad">Escolaridad<span class="rojo">*</span>:</label>
                        <select class="form-control text" id="escolaridad" name="escolaridad">
                            <option value="">Seleccionar</option>
                            <option value="1">Primaria</option>
                            <option value="2">Secundaria</option>
                            <option value="3">Preparatoria</option>
                            <option value="4">Universidad</option>
                            <option value="5">Posgrado</option>
                        </select>
                    </div>
                    <input type="submit" class="boton boton--primario" value="Siguiente">
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