<?php
include('include/config.php');
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- head -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Asociación Civil Encuentro Comuntario | ¡Mensaje enviado!</title>
    <link rel="icon" type="image/png" href="img/favicon.png" /> 
    <meta property="og:image" content="img/enlace.jpg" />
    <?php include('include/style-css.php');?>
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/39c28581d5.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <p style="display:none;">js</p>
    <script>
    AOS.init();
    </script>
   <!-- import jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!--Modal JS Script -->
<script type="text/javascript">
    window.onload = () => {
        $('#onload').modal('show');
    }
</script>
  </head>
  <body>
  <div class="modal fade" id="onload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!-- Add this line to your code -->
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¡Mensaje enviado!</h5>
            </div>
            <div class="modal-body">
                A la brevedad posible un asesor se estará contactando.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Entendido</button>
            </div>
        </div>
    </div>
  </div>  
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
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide/1.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption  d-md-block" >
        <img src="img/logos/puerto-sauce-home.png" id="logo-slider" data-aos="fade-up" data-aos-duration="1200"  alt="..."> 
        <p id="txt-slider" data-aos="fade-up" data-aos-duration="1500">¡Nuevo desarrollo urbanístico llega a Villa María, Villa Nueva y la región!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide/2.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-md-block">
        <img src="img/logos/cuencas-del-sol-home.png" id="logo-slider" data-aos="fade-up" data-aos-duration="1200"  alt="..."> 
        <p id="txt-slider" data-aos="fade-up" data-aos-duration="1500">Desarrollo urbanístico ubicado en una zona de gran crecimiento en Villa María.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/slide/3.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-md-block">
       <img src="img/logos/encuentro-comunitario-home.png" id="logo-slider2" data-aos="fade-up" data-aos-duration="1200"  alt="..."> 
       <p id="txt-slider" data-aos="fade-up" data-aos-duration="1500">Ya cumplimos el sueño de miles de villamarienses con el desarollo del Barrio Padre Mugica, ahora ¡vamos por más!</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
    

    
<div class="container">
<div class="row">
  <div id="titulo-intro" class="col-12" data-aos="fade-up" data-aos-duration="1200">
    <h1>Cumpliendo el sueño de la familia trabajadora</h1>
    <span data-aos="fade-up" data-aos-duration="1250" id="separador"></span>
    <p data-aos-duration="1350" data-aos="fade-up">La tierra en nuestra querida Argentina no es un recurso escaso, sin embargo hay muchas familias trabajadoras sin acceso a la vivienda. ¡Esto es algo que estamos cambiando concoordinación y esfuerzo colectivo!</p>
  </div>
 
  <div id="area1" data-aos="fade-right" data-aos-duration="1300" class="col-lg-6 col-md-12 mb-4 mb-lg-0"></div>
  </a>
  <div id="area1b" data-aos="fade-left" data-aos-duration="1500" class="col-lg-6 col-md-12 mb-4 mb-lg-0">
   <h2><strong>Puerto Sauce</strong></h2>
   <span id="separador-area1b"></span>
   <p>Nuevo desarrollo urbanístico de más de 500 lotes ubicado en Villa Nueva, entre Ruta 2 y el Río Ctalamochita, a metros de Ruta 158. A 15 minutos de Plaza Centenario y 6 minutos de Plaza Capitán de Los Andes.</p>
    <a href="puerto-sauce.html"><button id="btn-lote" type="button" class="btn btn-primary btn-lg"  data-aos="fade-up"  data-aos-duration="1500">Descubrí más</button></a>
  </div>
 
  <div id="area2" data-aos="fade-right" data-aos-duration="1700" class="col-lg-6 col-md-12 mb-4 mb-lg-0">
    <h2 style="text-align:right;"><strong>Cuenca del Sol</strong></h2>
    <span id="separador-area2"></span>
    <p>Cuenca del Sol es un programa de tierra comunitaria que busca darle acceso a una vivienda a la familia trabajadora villamariense. Se ubica sobre Ruta 158, en las inmediaciones del Hotel Amerian, próximo a uno de los principales accesos de Villa María</p>
     <a href="#"><button id="btn-lote" type="button" class="btn btn-primary btn-lg"  data-aos="fade-up"  data-aos-duration="1500">Descubrí más</button></a>

  </div>
  <div id="area2b" data-aos="fade-left" data-aos-duration="1600" class="col-lg-6 col-md-12 mb-4 mb-lg-0"></div>
</div>
</div>

<div id="parallax-world-of-ugg">
  
  <section>
    <div class="parallax-one">
      <h2 data-aos="fade-up" data-aos-duration="1000">¡Acceder a tu lote es más fácil que nunca!</h2>
      <a href="https://wa.me/543534195508" target="_blank"><button id="btn-lote" type="button" class="btn btn-primary btn-lg"  data-aos="fade-up"  data-aos-duration="1500">Contacto</button></a>
    </div>
  </section>
</div>
</div>
<div class="container" id="contenedor-contacto-home">
<div class="row">
  
  <div id="area-mapa" data-aos="fade-right" data-aos-duration="1300" class="col-lg-6 col-md-12 mb-4 mb-lg-0">
   <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13472.916800425359!2d-63.2038877!3d-32.4130181!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe9f7d1499f29c855!2sAsociaci%C3%B3n%20Civil%20%22Encuentro%20Comunitario%22!5e0!3m2!1ses-419!2sar!4v1659233518034!5m2!1ses-419!2sar"   allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div id="area-formulario" data-aos="fade-left" data-aos-duration="1400" class="col-lg-6 col-md-12 mb-4 mb-lg-0">

   <h2 style="text-align:center; margin-top: 20px;"><strong>Contacto</strong></h2>
    <span id="separador"></span>
  <div class="fcf-body">

    <div id="fcf-form">
   

    <form id="fcf-form-id" class="fcf-form-class" method="post" action="contacto2.php">
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Nombre y Apellido</label>
            <div class="fcf-input-group">
                <input type="text" id="nombre" name="nombre" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Mail</label>
            <div class="fcf-input-group">
                <input type="email" id="email" name="email" class="fcf-form-control" required>
            </div>
        </div>
        
        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Teléfono</label>
            <div class="fcf-input-group">
                <input type="text" id="mensaje2" name="mensaje2" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Mensaje</label>
            <div class="fcf-input-group">
                <textarea id="mensaje" name="mensaje" class="fcf-form-control" rows="5" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Enviar</button>
        </div>

        

    </form>
    </div>
    </div>
   
</div>
</div>
</div>
<br><br>
<!--Main layout-->
<div class="container">
   <div id="titulo-intro" class="col-12" data-aos="fade-up" data-aos-duration="1200">
    <h1>Últimas noticias</h1>
    <span data-aos="fade-up" data-aos-duration="1250" id="separador"></span>
 
  </div>

  <!--Section: Content-->
  <section>
    <div class="row gx-lg-5">
          <?php 
         $query=mysql_query("select * from noticias ORDER BY id DESC LIMIT 3  ");
         while($row=mysql_fetch_array($query))
        {?>  
      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-duration="1200">
        <!-- News block -->
        
        
        <div>
          <!-- Featured image -->
          <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4"
            data-mdb-ripple-color="light">
            <img src="../internoencuentro/vistas/modulos/privado/productimages/<?php echo html_entity_decode($row['id']);?>/<?php echo html_entity_decode($row['productImage1']);?>" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>

          <!-- Article data -->
          <div class="row mb-3">
            <div class="col-6">
              <a href="" class="text-info">
               
                <?php echo html_entity_decode($row['categoriaNoticia']);?>
              </a>
            </div>

            <div class="col-6 text-end">
              <u> <?php echo html_entity_decode($row['fechaNoticia']);?></u>
            </div>
          </div>

          <!-- Article title and description -->
          <a href="" class="text-dark">
            <h5><?php echo html_entity_decode($row['tituloNoticia']);?></h5>

            <p>
              <?php echo html_entity_decode($row['copeteNoticia']);?>
            </p>
          </a>

          

           

      
          
          
        </div>
       
        <!-- News block -->
      </div>
      <?php   } ?> 
    

     
        
      </div>

      
  </section>
  <!--Section: Content-->

    </div>
    <div class="container">
    <div class="row">
    <div id="titulo-intro" style="text-align:center;"  class="col-12" data-aos="fade-up" data-aos-duration="1200">
        <a href="noticias.html"><button id="btn-lote" type="button" class="btn btn-primary btn-lg"  data-aos="fade-up"  data-aos-duration="1500">
       Ver todas
       </button></a>
 
    </div>
    </div>
    </div>
  

</div>
<!--Main layout-->




<br><br>

 <a href="https://wa.me/543534195508" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a> 
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
            <p><i class="fa-solid fa-location-dot"></i> <a href="https://goo.gl/maps/uUFwfP8EiYg7QzJk6" target="_blank">Costa Rica esq. Quillén</a></p>
           
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
                2022 Asociación Civil Encuentro Comuntario
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
  </body>
</html>




