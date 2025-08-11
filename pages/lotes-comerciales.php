<?php
include('include/config.php');
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- head -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lotes comerciales - Invertí en el desarrollo de la región | Encuentro Comunitario</title>
    <meta name="description" content="Conocé más sobre Encuentro Comunitario" /> 
    <link rel="icon" type="image/png" href="img/favicon.png" /> 
    <meta property="og:image" content="img/enlace.jpg" />
    <?php include('include/style-css.php');?>
    
    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W5Q3MC4H');</script>
    <!-- End Google Tag Manager -->
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/39c28581d5.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <p style="display:none;">js</p>
    <script>
    AOS.init();
    </script>
 
 <style>
        /* Estilo para el encabezado con imagen de fondo parallax */
        .parallax {
            background-image: url('img/comerciales/asociacion-encuentro-comunitario-slider-lotes-comerciales.jpg');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            height: 500px; /* Ajusta la altura según tus necesidades */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            font-family: 'Raleway', sans-serif;
        }
        .divider {
            border-top: 2px solid green;
            width: 10%;
            margin: 10px auto;
            transition: width 0.3s ease;            
        }
        .divider:hover {
            width: 20%;  
        }   
        .image-container {
         position: relative;
         overflow: hidden;
        }

        #image {
         transition: background-color 0.5s, opacity 0.5s; 
        }

        #image:hover {
         background: rgba(13, 133, 72 );
         opacity: 0.8;
        }

       @media (max-width: 767px) {
         .custom-centered {
         text-align: center;
         }
        }
        
        /* Estilo para la imagen fija en dispositivos móviles */
        @media (max-width: 768px) {
            .parallax {
                background-attachment: scroll;
            }
        }
        /* Ajuste de imagen en dispositivos móviles */
        @media (max-width: 768px) {
            .parallax {
                background-size: cover; /* Ajusta la imagen al 100% del ancho de pantalla */
            }
        }

        /* Estilo para el video de YouTube */
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            padding-top: 25px;
            height: 0;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
  </head>
  <body>
      
    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5Q3MC4H"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
     
    <header>
      <a href="index" class="logo"><img id="logo" src="img/logo.png"  alt=" " title=" "></a>
      <div class="navigation">
        <ul class="menu">
          <div class="close-btn"></div>
          <li class="menu-item"><a href="index">Inicio</a></li>
          <li class="menu-item">
            <a class="sub-btn" href="#">Proyectos <i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="los-ceibos">Los Ceibos</a></li>
              <li class="sub-item"><a href="cuenca-del-sol">Cuenca del Sol</a></li>
              <li class="sub-item"><a href="padre-mugica">Padre Mugica</a></li>
              <li class="sub-item"><a href="puerto-sauce">Puerto Sauce</a></li>
              <li class="sub-item"><a href="lotes-comerciales">Lotes comerciales</a></li>                 
            </ul>
          </li>
          <li class="menu-item"><a href="programa-de-beneficios">Programa de Beneficios</a></li> 
          <li class="menu-item"><a href="sobre-nosotros">Sobre Nosotros</a></li>  
          <li class="menu-item"><a href="noticias">Noticias</a></li>
          <li class="menu-item"><a href="contacto">Contacto</a></li>
        
        </ul>
      </div>
      <div class="menu-btn"></div>
    </header>
        <!-- Encabezado con parallax -->
    <div class="parallax">
        <h1><strong>Invertí en el desarrollo de la región</strong></h1>
 
    </div>

    <!-- Contenedor principal -->
    <div class="container" style="font-family: 'Raleway', sans-serif;">
        <!-- Título y separador -->
        <h2 class="text-center mt-5 pt-5"><strong>Te ofrecemos lotes comerciales con ubicación privilegiada</strong></h2>
        <br>
        <div class="divider"></div>        
        <p class="text-center mt-5">Contamos con lotes desde 700 m² hasta 1400 m² ubicados en los desarrollos Puerto Sauce y Cuenca del Sol, proyectos que suman más de 1000 lotes residenciales comercializados entre ambos. <br><br> <strong>¡Invertí en un terreno con grandes posibilidades de capitalización e inversión!</strong>
        </p>
 
        <br>
<!-- Filas y columnas para servicios -->
<div class="row mt-5">
    <div class="col-md-4 col-sm-12" data-aos="fade-up" data-aos-duration="1000">    
        <div class="image-container">
            <img src="img/comerciales/asociacion-encuentro-comunitario-lotes-comerciales-puerto-sauce.jpg" id="image" class="img-fluid">   
        </div>    
        <h3 class="text-center font-weight-bold mt-5"><strong>Puerto Sauce</strong></h3>
        <div class="divider"></div>
        <p class="text-center" style="height: 7em; overflow: hidden;">Ubicado en Ruta 2 a metros de Ruta 158, Puerto Sauce se posiciona de cara al futuro encontrándose próximo a la nueva circunvalación. </p>
        <a href="https://maps.app.goo.gl/77VkLL9ZseQ1RHgQ8" target="_blank" id="btn-lote" type="button" class="btn btn-primary d-block btn-lg aos-init mb-5">Cómo llegar</a>
    </div>
    <div class="col-md-4 col-sm-12" data-aos="fade-up" data-aos-duration="1600">
        <div class "image-container">           
            <img src="img/comerciales/asociacion-encuentro-comunitario-lotes-comerciales-cuenca-del-sol.jpg"  id="image"  class="img-fluid">
        </div>    
        <h3 class="text-center font-weight-bold mt-5"><strong>Cuenca del Sol</strong></h3>
        <div class="divider"></div>
        <p class="text-center" style="height: 7em; overflow: hidden;">Cuenca del Sol se encuentra en una gran área en actual expansión y a 500 metros de la Autopista Córdoba-Rosario.</p>
        <a href="https://maps.app.goo.gl/WvcHpTVFxC9XqwLy5" target="_blank" id="btn-lote" type="button" class="btn btn-primary d-block btn-lg aos-init mb-5">Cómo llegar</a>
    </div>
    <div class="col-md-4 col-sm-12" data-aos="fade-up" data-aos-duration="2000">
        <div class="image-container">  
            <img src="img/comerciales/asociacion-encuentro-comunitario-lotes-comerciales-nuevos-futuros-desarrollos.jpg"  id="image"  class="img-fluid">
        </div>        
        <h3 class="text-center font-weight-bold mt-5"><strong>Futuros proyectos</strong></h3>
        <div class="divider"></div>                
        <p class="text-center" style="height: 7em; overflow: hidden;">Desde Encuentro Comunitario nos encontramos constantemente generando nuevos proyectos para desarrollar la región residencial y comercialmente.</p>
        <a href="https://maps.app.goo.gl/FYS7BZxkpBwBBBrR6" target="_blank" id="btn-lote" type="button" class="btn btn-primary d-block btn-lg aos-init mb-5">Encuentro Comunitario</a>
    </div>
</div>

<!-- Contenedor para el video de YouTube -->
<div class="container mt-5">
    <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/u_vlN3OYk24" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
<br><br>
 <div class="container mt-5" style="font-family: 'Raleway', sans-serif;">
        <div class="row">
            <!-- Primera columna (40% del ancho) -->
<div class="col-md-4 col-sm-12 custom-centered" data-aos="fade-right" data-aos-duration="1500">
    <h3><strong>Invertir en Puerto Sauce junto a Encuentro Comunitario te brinda seguridad y respaldo</strong></h3>
    <br>
    <p>Formá parte de nuestros proyectos de desarrollo comercial de la región Villamariense, la cual concentra un enorme tráfico y una ubicación clave tanto a nivel provincial como nacional</p>
    <a href="https://wa.me/543534195505" target="_blank">
        <button id="btn-lote" type="button" class="btn btn-primary btn-lg aos-init mb-5">Hablar con un asesor</button>
    </a>
</div>
           
            <!-- Segunda columna (60% del ancho) -->
            <div class="col-md-8" data-aos="fade-left" data-aos-duration="1600">
                <div class="row">
                    <!-- Fila 1 -->
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="img/comerciales/iconos/superficie.svg" alt="Superficie" width="100">
                            <p>Desde 700 m², hasta 1400 m²</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="img/comerciales/iconos/ubicacion.svg" alt="Ubicación" width="100">
                            <p>Ubicación estratégica en zona en desarrollo de Villa Nueva</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="img/comerciales/iconos/rutas.svg" alt="Accesos" width="100">
                            <p>Ingreso sobre Ruta Provincial nº 2, a pocos metros de Ruta Nacional nº 158</p>
                        </div>
                    </div>
                    <!-- Fila 2 -->                
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="img/comerciales/iconos/pagos.svg" alt="Financiación" width="100">
                            <p>Mínima entrega, con cómodas facilidades de financiación</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="img/comerciales/iconos/rio.svg" alt="Proyecto con bajada al río" width="100">
                            <p>Emplazados en un proyecto que cuenta con bajada al río</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="img/comerciales/iconos/barrio.svg" alt="Nuevo barrio" width="100">
                            <p>Nuevo barrio con más de 500 lotes residenciales (+450 vendidos)</p>
                        </div>
                    </div>
                 
                    <!-- Fila 3 -->
                    <div class="col-md-12">
                        <div class="text-center">
                            <a href="descargas/Puerto-Sauce-Lotes-comerciales.pdf " target="_blank" id="btn-lote" type="button" class="btn btn-primary btn-lg aos-init mb-5">Descargar PDF</a>
                        </div>
                    </div>
              
                </div>
            </div>
        </div>
    </div>
<!-- Mapa de Google Maps en contenedor fluid al 100% del ancho de la pantalla sin márgenes laterales -->
<div class="container-fluid mt-5 p-0">
    <div class="embed-responsive embed-responsive-16by9" style="height: 90vh;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13472.916800425359!2d-63.2038877!3d-32.4130181!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95cc433ac1ad6bb1%3A0xe9f7d1499f29c855!2sAsociaci%C3%B3n%20Civil%22Encuentro%20Comunitario%22!5e0!3m2!1ses-419!2sar!4v1698210040311!5m2!1ses-419!2sar" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="embed-responsive-item w-100 h-100"></iframe>
    </div>
</div>
</div>


 
  <!-- Footer -->
  <footer class="text-center text-lg-start text-white" id="footer" style="background-color: #0d8548">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 col-xl-4 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              <img  src="img/logo-footer.png"  alt=" " title=" ">
            </h6>
            <p>
               ¡Cumplimos un sueño colectivo, honramos un compromiso ético y social!
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold"><strong>Contacto</strong></h6>
            <p><i class="fa-solid fa-location-dot"></i> <a href="https://maps.app.goo.gl/deqp62poi44kKMYB6" target="_blank">Bv. Argentino 1571, Villa María.</a></p>
           
            <p><i class="fa-brands fa-whatsapp"></i> <a href="https://wa.me/543534195508" target="_blank">353 419-5508</a></p>
            <p><i class="fas fa-envelope mr-3"></i> <a href="mailto:encuentrocomunitarioedpn@gmail.com" target="_blank">encuentrocomunitarioedpn@gmail.com</a></p>
          </div>
          <!-- Grid column -->
 

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">

            <h6 class="text-uppercase mb-4 font-weight-bold"><strong>¡Seguinos!</strong></h6>
              <!-- Facebook -->
            <a href="https://www.facebook.com/AsociacionCivilEncuentro/" target="_blank" id="redes"
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button" title="¡Seguinos en Facebook!" 
               ><i class="fab fa-facebook-f"></i
              ></a>

          
           

            <!-- Instagram -->
            <a href="https://www.instagram.com/AsociacionCivilEncuentro/" target="_blank" id="redes" 
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button" title="¡Seguinos en Instagram!" 
               ><i class="fab fa-instagram"></i
              ></a>
          
 
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
                2025 Asociación Civil Encuentro Comuntario
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
  <a href="https://wa.me/543534195508" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
    
     <script type="text/javascript">
    //jquery for toggle dropdown menus
    $(document).ready(function(){
      //toggle sub-menus
      $(".sub-btn").click(function(){
        $(this).next(".sub-menu").slideToggle();
      });

      //toggle more-menus
      $(".more-btn").click(function(){
        $(this).next(".more-menu").slideToggle();
      });
    });

    //javascript for the responsive navigation menu
    var menu = document.querySelector(".menu");
    var menuBtn = document.querySelector(".menu-btn");
    var closeBtn = document.querySelector(".close-btn");

    menuBtn.addEventListener("click", () => {
      menu.classList.add("active");
    });

    closeBtn.addEventListener("click", () => {
      menu.classList.remove("active");
    });

    //javascript for the navigation bar effects on scroll
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    });
    </script>
 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>




