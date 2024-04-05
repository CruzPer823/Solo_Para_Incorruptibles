<?php
   require_once 'includes/config_session.inc.php';
   require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPI</title>
    <link rel="icon" href="assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/index.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
              <a class="nav-link active"  href="index.php">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Estadísticas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="recursos.html">Recursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="3de3.html">Iniciativa 3 de 3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="denuncia.html">Denunciar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Iniciar Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
              <?php
                check_login_errors();
                ?>
    <!-- Tarjeta denuncia -->
    <div class="contenedor">
    <div class="tarjetaPrin container shadow-lg">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">
          <div class="contenido col-lg p-1 p-lg-5 pt-lg-3">
            <div class="logoTarjeta" ><img src="assets/logo2.png" alt="Logo Solo para Incorruptibles" height="280px"></div>
            <div class="b1">
                <a href="ESC/Denuncia1.php"><button type="button" class="btnGen" >Comienza tu denuncia aquí</button></a>
            </div>
            <div class="b2">
                <a href="ESC/DenunciaFolio.html"><button type="button" class="btnGen">Conoce el status de tu denuncia aquí</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tarjeta Identidad -->
    <div class="contenedor">
        <div class="tarjeta container shadow-lg">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">
              <h2 class="Titulo" id="identidad">¿Quienes somos?</h2>
              <p class="cont">Somos una asociación estudiantil multidisciplinaria del Tecnológico de Monterrey, dedicada a promover el análisis del fenómeno de la corrupción, y la generación de propuestas para combatirla; creando redes de colaboración 
                entre EXATEC, academia, gobierno, medios de comunicación, 
                asociaciones civiles, sector privado, organismos 
                internacionales y Organizaciones No Gubernamentales.</p>
            </div>
          </div>
        </div>
    <!-- Tarjeta causa -->
    <div class="contenedor">
        <div class="tarjeta container shadow-lg" style="margin-bottom: 50px;">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">
              <h2 class="Titulo" style="text-align: end;">Nuestra causa</h2>
              <p class="cont" style="text-align: end; margin-right: 30px;">Causa social que abanderamos: Legalidad y Participación
                 ciudadana. Subcausa social que apoyamos: Combate a la corrupción a través 
                 de la Rendición de cuentas, transparencia y acceso a la información. <br>
                  Objetivo de Desarrollo Sostenible al que impactamos: Objetivo 16;  Paz, justicia e 
                  instituciones sólidas.</p>
            </div>
          </div>
        </div>
        <!-- Mision y vision -->
    <div class="misvis">
        <!-- Tarjeta 1 -->
        <div class="contenedor">
            <div class="tarjeta container shadow-lg" style="margin: 20px; margin-bottom:150px;">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">
                    <div class="icono">
                   <p> <svg width="76" height="79" viewBox="0 0 76 79" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="76" height="79" fill="url(#pattern0)"/>
                        <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_9_35" transform="matrix(0.00325854 0 0 0.0031348 -0.0360295 0)"/>
                        </pattern>
                        <image id="image0_9_35" width="329" height="319" xlink:href="data:image/png;base64,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"/>
                        </defs>
                        </svg>                       
                  <h2 class="Titulo" style="margin-left: 30px;">Visión</h2>
                    </p>
                </div>
                  <p class="cont" style="text-align:justify;">Posicionar al grupo estudiantil como un modelo diferenciador incluyente, efectivo, abierto y participativo en la obtención de conocimiento colectivo en materia anticorrupción, involucrando positivamente a todas las carreras del Tecnológico de Monterrey, para lograr el compromiso social de impactar en la vida pública de México.</p>
                </div>
              </div>
            </div>
        <!-- Tarjeta 2 -->
        <div class="contenedor">
            <div class="tarjeta container shadow-lg" style="margin: 20px; margin-bottom:150px;">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">
                <div class="icono">
                    <svg width="76" height="80" viewBox="0 0 76 80" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="76" height="80" fill="url(#pattern0)"/>
                        <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_9_34" transform="matrix(0.00329979 0 0 0.0031348 -0.0428147 0)"/>
                        </pattern>
                        <image id="image0_9_34" width="329" height="319" xlink:href="data:image/png;base64,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"/>
                        </defs>
                        </svg>
                    <h2 class="Titulo" style="margin-left: 30px;">Misión</h2>
                </div>
                  <p class="cont" style="text-align:justify;">Generar conciencia sobre el impacto económico, político y social de la corrupción, para desarrollar estrategias de combate, mediante una participación ciudadana activa, que detone un cambio social sostenible en México.</p>
                </div>
              </div>
            </div>
    </div>

    <!-- Footer -->

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
</body>
</html>