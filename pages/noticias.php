<?php
include('include/config.php');
include('pagination.php'); 
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- head -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Noticias | Asociación Civil Encuentro Comuntario</title>
    <link rel="icon" type="image/png" href="img/favicon.png" /> 
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

  </head>
  <body>
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
 
    

    
<div class="container">
<div class="row">
   
  
  
  
</div>
</div>
<div id="parallax-noticias">
      <h1 data-aos="fade-up" data-aos-duration="1000"><strong>NOTICIAS</strong></h1>
</div> 
<div id="parallax-world-of-ugg-noticias">
  
  <section>
    <div class="parallax-one-noticias">
      <h1 data-aos="fade-up" data-aos-duration="1000"><strong>NOTICIAS</strong></h1>
      
    </div>
  </section>
</div>

<div class="container">
<div class="row">
   
<div id="area-noticias-2" style="height:auto;" class="col-lg-8 col-md-12 mb-4 mb-lg-0">
 
                <div class="event-list">
               
 
<div class="row row-cols-1 row-cols-md-2 g-4">
<?php
	while($crow = mysqli_fetch_array($nquery)){
?>       
  <div class="col">
    <div class="card" style="height:500px;">
      <a class="text-decoration-none" href="noticia.php?pid=<?php echo html_entity_decode($crow['id']);?>"><img src="../internoencuentro/vistas/modulos/privado/productimages/<?php echo html_entity_decode($crow['id']);?>/<?php echo html_entity_decode($crow['productImage1']);?>" style="height:200px; width:100%; object-fit:cover;" class="card-img-top" alt="Encuentro Comunitario" /></a>
       <div class="card-body">
       <br>
        <h4 class="card-title h5 h4-sm col-12"><i class="fa-solid fa-calendar-days"></i> <span class="fw-normal"><?php echo html_entity_decode($crow['fechaNoticia']);?></span><i class="fas fa-caret-right" aria-hidden="true"></i><span class="fw-normal"><?php echo html_entity_decode($crow['categoriaNoticia']);?></span> </h4>
        <a class="text-decoration-none" style="color:#000;" href="noticia.php?pid=<?php echo html_entity_decode($crow['id']);?>"><h5 class="fw-bold card-title"><?php echo html_entity_decode($crow['tituloNoticia']);?></h5></a>
        <p class="card-text fw-normal">
         <?php echo html_entity_decode($crow['copeteNoticia']);?>
        </p>
      </div>
    </div>
  </div>
<?php
	}		
?>  
</div>
<br> 
<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
       <br>                    
               

                </div>
            
  </div>
  <div id="area-noticias-2b" class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <div id="aside-1">
    <?php 
     $query=mysql_query("select * from category");
     while($row=mysql_fetch_array($query))
    {?>      
     <a class="text-decoration-none text-dark" href="noticias-categoria.php?cat=<?php echo html_entity_decode($row['categoryName']);?>"/><p><i class="fas fa-caret-right" aria-hidden="true"></i> <?php echo html_entity_decode($row['categoryName']);?></p></a>
    <?php   } ?>  
    </div> 
    <div id="aside-2">
   
    </div>
    
  </div>
   

  
  


</div>
</div>
 
 
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




