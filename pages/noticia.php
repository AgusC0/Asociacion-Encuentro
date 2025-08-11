<?php
include('include/config.php');
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- head -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
      $pid=intval($_GET['pid']);
      $query=mysql_query("select * from noticias where id='$pid'");
      while($row=mysql_fetch_array($query))
    {?>  
    <title><?php echo html_entity_decode($row['tituloNoticia']);?> | Encuentro Comuntario</title>
    <meta property="og:url" content="https://www.encuentrocomunitario.com.ar/noticia.php?pid=<?php echo html_entity_decode ($row['id']);?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo html_entity_decode($row['tituloNoticia']);?> | Encuentro Comuntario" />
    <meta property="og:description" content="<?php echo html_entity_decode($row['copeteNoticia']);?>" />
    <meta property="og:image" content="https://www.encuentrocomunitario.com.ar/internoencuentro/vistas/modulos/privado/productimages/<?php echo html_entity_decode($row['id']);?>/<?php echo html_entity_decode($row['productImage1']);?>" />
    <?php   } ?> 
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

 

<div class="container" style="margin-top:6%;">
<div class="row">
   
<div id="area-noticias-2" style="height:auto; background:#fff;" class="col-lg-8 col-md-12 mb-4 mb-lg-0">
 
<div class="event-list">
<?php
$pid=intval($_GET['pid']);
$query=mysql_query("select * from noticias where id='$pid'");
while($row=mysql_fetch_array($query))
{?>          

  <!-- Page content-->
        <div class="container mt-12">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Post content-->
                    <article style="height:auto; background:#fff;">
                        <h2 class="fw-bolder mb-4 mt-5" style="margin-top:13%;"><strong><?php echo html_entity_decode($row['tituloNoticia']);?></strong></h2>  
                        <p class="fs-5 mb-4"><i><?php echo html_entity_decode($row['copeteNoticia']);?></i></p>
                        <figure class="mb-4"><img style="width:100%; height:auto;"class="img-fluid rounded" src="../internoencuentro/vistas/modulos/privado/productimages/<?php echo html_entity_decode($row['id']);?>/<?php echo html_entity_decode($row['productImage1']);?>" alt="..." /></figure>
                        


                        <h4 class="card-title h5 h4-sm"><i class="fa-solid fa-calendar-days"></i><span><?php echo html_entity_decode($row['fechaNoticia']);?></span><i class="fas fa-caret-right" aria-hidden="true"></i><a class="text-decoration-none text-dark" href="noticias-categoria.php?cat=<?php echo html_entity_decode($row['categoriaNoticia']);?>"/><span><?php echo html_entity_decode($row['categoriaNoticia']);?></span></a> </h4>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4"><?php echo html_entity_decode($row['cuerpoNoticia']);?></p> <br>
                          
                              <?php

                                        $img2 = html_entity_decode($row['productImage2']);
                                        $id = ($row['id']);
                                        $supported_image = array('gif','jpg','jpeg','png');

                                        $src_file_name = html_entity_decode($row['productImage2']);

                                        $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION));

    

	                                    if (in_array($ext, $supported_image))
                                        {
                                         echo  "<figure class='mb-4'><img style='width:100%; height:auto;'class='img-fluid rounded' src='../internoencuentro/vistas/modulos/privado/productimages/$id/$img2' alt='...' /></figure>" ;
                                        } else {
                                         echo  ''  ;
                                        }

                            ?>
                              <?php
                                        $img3 = html_entity_decode($row['productImage3']);
                                        $id = ($row['id']);
                                        
                                        $supported_image = array('gif','jpg','jpeg','png');

                                        $src_file_name = html_entity_decode($row['productImage3']);

                                        $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION));

    

	                                    if (in_array($ext, $supported_image))
                                        {
                                         echo  "<figure class='mb-4'><img style='width:100%; height:auto;'class='img-fluid rounded' src='../internoencuentro/vistas/modulos/privado/productimages/$id/$img3' alt='...' /></figure>" ;
                                        } else {
                                         echo  ''  ;
                                        }

                            ?>
                              <?php

                                        $img4 = html_entity_decode($row['productImage4']);
                                        $id = ($row['id']);
                                        $supported_image = array('gif','jpg','jpeg','png');

                                        $src_file_name = html_entity_decode($row['productImage4']);

                                        $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION));

    

	                                    if (in_array($ext, $supported_image))
                                        {
                                         echo  "<figure class='mb-4'><img style='width:100%; height:auto;'class='img-fluid rounded' src='../internoencuentro/vistas/modulos/privado/productimages/$id/$img4' alt='...' /></figure>" ;
                                        } else {
                                         echo  ''  ;
                                        }

                            ?>
                              <?php

                                        $img5 = html_entity_decode($row['productImage5']);
                                        $id = ($row['id']);
                                        $supported_image = array('gif','jpg','jpeg','png');

                                        $src_file_name = html_entity_decode($row['productImage5']);

                                        $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION));

    

	                                    if (in_array($ext, $supported_image))
                                        {
                                         echo  "<figure class='mb-4'><img style='width:100%; height:auto;'class='img-fluid rounded' src='../internoencuentro/vistas/modulos/privado/productimages/$id/$img5' alt='...' /></figure>" ;
                                        } else {
                                         echo  ''  ;
                                        }

                            ?>
                              <?php

                                        $img6 = html_entity_decode($row['productImage6']);
                                        $id = ($row['id']);
                                        $supported_image = array('gif','jpg','jpeg','png');

                                        $src_file_name = html_entity_decode($row['productImage6']);

                                        $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION));

    

	                                    if (in_array($ext, $supported_image))
                                        {
                                         echo  "<figure class='mb-4'><img style='width:100%; height:auto;'class='img-fluid rounded' src='../internoencuentro/vistas/modulos/privado/productimages/$id/$img6' alt='...' /></figure>" ;
                                        } else {
                                         echo  ''  ;
                                        }

                            ?>
                              <?php

                                        $img7 = html_entity_decode($row['productImage7']);
                                        $id = ($row['id']);
                                        $supported_image = array('gif','jpg','jpeg','png');

                                        $src_file_name = html_entity_decode($row['productImage7']);

                                        $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION));

    

	                                    if (in_array($ext, $supported_image))
                                        {
                                         echo  "<figure class='mb-4'><img style='width:100%; height:auto;'class='img-fluid rounded' src='../internoencuentro/vistas/modulos/privado/productimages/$id/$img7' alt='...' /></figure>" ;
                                        } else {
                                         echo  ''  ;
                                        }

                            ?>
                              <?php

                                        $img8 = html_entity_decode($row['productImage8']);
                                        $id = ($row['id']);
                                        $supported_image = array('gif','jpg','jpeg','png');

                                        $src_file_name = html_entity_decode($row['productImage8']);

                                        $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION));

    

	                                    if (in_array($ext, $supported_image))
                                        {
                                         echo  "<figure class='mb-4'><img style='width:100%; height:auto;'class='img-fluid rounded' src='../internoencuentro/vistas/modulos/privado/productimages/$id/$img8' alt='...' /></figure>" ;
                                        } else {
                                         echo  ''  ;
                                        }

                            ?>
                              <?php

                                        $img9 = html_entity_decode($row['productImage9']);
                                        $id = ($row['id']);
                                        $supported_image = array('gif','jpg','jpeg','png');

                                        $src_file_name = html_entity_decode($row['productImage9']);

                                        $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION));

    

	                                    if (in_array($ext, $supported_image))
                                        {
                                         echo  "<figure class='mb-4'><img style='width:100%; height:auto;'class='img-fluid rounded' src='../internoencuentro/vistas/modulos/privado/productimages/$id/$img9' alt='...' /></figure>" ;
                                        } else {
                                         echo  ''  ;
                                        }

                            ?>
                        
                        </section>
<!-- Load Facebook SDK for JavaScript - compartir en Facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your share button code -->
<div class="fb-share-button" 
data-href="https://www.encuentrocomunitario.com.ar/noticia.php?pid=<?php echo html_entity_decode ($row['id']);?>" 
data-layout="button_count">
    
</div>&nbsp&nbsp
<strong><a href="https://api.whatsapp.com/send?text=https://www.encuentrocomunitario.com.ar/noticia.php?pid=<?php echo html_entity_decode ($row['id']);?>" data-text="BOTÓN COMPARTIR EN WHATSAPP EN MI PÁGINA WEB" data-action="share/whatsapp/share" class="miestilo" style="border: none; margin: 10px 0; font-size: 16px; color:#0d8548; text-decoration:none;">
 <i class="fa fa-whatsapp whatsapp-icon" aria-hidden="true"></i> Compartir en WhatsApp
</a></strong> <br><br><br>
                    </article>

                </div>
            
            </div>
        </div>
                   
<?php   } ?>                      
               

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




