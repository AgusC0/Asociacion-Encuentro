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
    <title>Programa de Beneficios | Encuentro Comuntario</title>
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
    <style>
body{
   max-width: 100% !important;
   overflow-x: hidden !important;
}
/* Estilo de las tarjetas */
/* Estilo de las tarjetas */
.card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    background-color: #f7f7f7; /* Fondo gris suave */
    border-radius: 10px;
    height: 100%; /* Para que todas las tarjetas ocupen el mismo alto */
}

/* Efecto al pasar el mouse */
.card:hover {
    transform: translateY(-5px); /* Efecto de levantar */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Sombra más intensa */
}

/* Imagen */
.card-img-top {
    height: 200px;
    object-fit: cover;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

/* Estilo del cuerpo de la tarjeta */
.card-body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    flex-grow: 1; /* Esto hace que el contenido del cuerpo ocupe todo el espacio disponible */
}

/* Título del comercio */
.card-title {
    font-size: 1.25rem;
    font-weight: bold;
    color: rgba(13, 133, 72, 1); /* Color verde */
    margin-bottom: 10px;
    text-align: center;
}

/* Descuento */
.card-discount {
    font-size: 1.5rem;
    font-weight: bold;
    color: #000;
    margin-bottom: 15px;
    text-align: center;
}
/* Botón ver más */
.btn-comercio {
    font-size: 1rem;
    padding: 10px 20px;
    background-color: #0d8548;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-comercio:hover {
    background-color: #0d9450;
}

    </style>
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
<div id="parallax-comercio">
      <h1 data-aos="fade-up" data-aos-duration="1000"><strong>PROGRAMA DE BENEFICIOS</strong></h1>
</div> 
<div id="parallax-world-of-ugg-comercio">
  
  <section>
    <div class="parallax-one-comercio">
      <h1 data-aos="fade-up" data-aos-duration="1000"><strong>PROGRAMA DE BENEFICIOS</strong></h1>
      
    </div>
  </section>
</div>
<div class="container mt-5">
<p style="text-align: center; font-family: 'Raleway', sans-serif; margin: 4% 0;">
    Desde Encuentro Comunitario generamos acuerdos con comercios locales para brindarle beneficios y promociones. 
    Estos son los convenios vigentes durante el mes corriente. Para poder utilizarlos, debe presentar ante el comercio 
    el último comprobante de pago emitido por la Asociación.
</p>
</div>
<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "u545591534_noticiasasc", "C7n1*LR>h", "u545591534_noticiasasc");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


$conexion->set_charset("utf8mb4");

// Obtener los datos de los comercios
$query = "SELECT nombreComercio, descuentoComercio, id, imagenComercio, textoComercio, direccionComercio FROM comercios";
$resultado = $conexion->query($query);
?>

<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php
        if ($resultado->num_rows > 0) {
            while ($comercio = $resultado->fetch_assoc()) {
        ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <!-- Imagen del comercio -->
                        <img src="imagenes_comercios/<?php echo $comercio['id']; ?>/<?php echo htmlspecialchars($comercio['imagenComercio'], ENT_QUOTES, 'UTF-8'); ?>" class="card-img-top" alt="Logo del comercio" data-bs-toggle="modal" data-bs-target="#comercioModal" data-nombre="<?php echo htmlspecialchars($comercio['nombreComercio'], ENT_QUOTES, 'UTF-8'); ?>" data-descuento="<?php echo htmlspecialchars($comercio['descuentoComercio'], ENT_QUOTES, 'UTF-8'); ?>" data-texto="<?php echo nl2br(htmlspecialchars($comercio['textoComercio'], ENT_QUOTES, 'UTF-8')); ?>" data-direccion="<?php echo htmlspecialchars($comercio['direccionComercio'], ENT_QUOTES, 'UTF-8'); ?>" data-imagen="imagenes_comercios/<?php echo $comercio['id']; ?>/<?php echo htmlspecialchars($comercio['imagenComercio'], ENT_QUOTES, 'UTF-8'); ?>">

                        <div class="card-body text-center">
                            <!-- Nombre del comercio centrado -->
                            <h5 class="card-title"><?php echo htmlspecialchars($comercio['nombreComercio'], ENT_QUOTES, 'UTF-8'); ?></h5>
                            
                            <!-- Descuento centrado -->
                            <p class="card-discount"><?php echo htmlspecialchars($comercio['descuentoComercio'], ENT_QUOTES, 'UTF-8'); ?></p>
                            
                            <!-- Botón ver más -->
                            <button class="btn-comercio" data-bs-toggle="modal" data-bs-target="#comercioModal" data-nombre="<?php echo htmlspecialchars($comercio['nombreComercio'], ENT_QUOTES, 'UTF-8'); ?>" data-descuento="<?php echo htmlspecialchars($comercio['descuentoComercio'], ENT_QUOTES, 'UTF-8'); ?>" data-texto="<?php echo nl2br(htmlspecialchars($comercio['textoComercio'], ENT_QUOTES, 'UTF-8')); ?>" data-direccion="<?php echo htmlspecialchars($comercio['direccionComercio'], ENT_QUOTES, 'UTF-8'); ?>" data-imagen="imagenes_comercios/<?php echo $comercio['id']; ?>/<?php echo htmlspecialchars($comercio['imagenComercio'], ENT_QUOTES, 'UTF-8'); ?>">Ver más</button>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>No hay comercios disponibles.</p>";
        }
        ?>
    </div>
</div>


<br><br>

<!-- Modal para mostrar detalles del comercio -->
<div class="modal fade" id="comercioModal" tabindex="-1" aria-labelledby="comercioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="comercioModalNombre"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img id="comercioModalImagen" src="" alt="Logo del comercio" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <p><strong>Descuento:</strong> <span id="comercioModalDescuento"></span></p>
                        <p><strong>Dirección:</strong> <span id="comercioModalDireccion"></span></p>
                        <p><span id="comercioModalTexto"></span></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Scripts de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Configurar el modal para cargar los detalles al abrirlo
    var comercioModal = document.getElementById('comercioModal');
    comercioModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;

        var nombre = button.getAttribute('data-nombre');
        var descuento = button.getAttribute('data-descuento');
        var texto = button.getAttribute('data-texto');
        var direccion = button.getAttribute('data-direccion');
        var imagen = button.getAttribute('data-imagen');

        // Decodificar los saltos de línea y caracteres especiales
        var decodedTexto = texto.replace(/<br\s*[\/]?>/gi, '\n');

        // Actualizar el contenido del modal
        document.getElementById('comercioModalNombre').textContent = nombre;
        document.getElementById('comercioModalDescuento').textContent = descuento;
        document.getElementById('comercioModalTexto').innerHTML = decodedTexto;
        document.getElementById('comercioModalDireccion').textContent = direccion;
        document.getElementById('comercioModalImagen').src = imagen;
    });
</script>


 
 
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




