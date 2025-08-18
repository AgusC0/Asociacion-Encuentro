
<!doctype html>
<html lang="es">
  <head>
    <!-- head -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Encuentro Comunitario | Desarrollos urbanísticos en Villa María, Villa Nueva y la región - Loteos Cuenca del Sol y Puerto Sauce - Barrio Padre Mugica</title>
    <meta name="description" content="Cumpliendo el sueño de la familia trabajadora" /> 
    <link rel="icon" type="image/png" href="img/favicon.png" /> 
    <meta property="og:image" content="img/enlace.jpg" />
    <?php include('include/style-css.php');?>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <p style="display:none;">js</p>
    <script>
    AOS.init();
    </script>
    
    <!-- GOOGLE ANALYTICS -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PW7BJD56BM"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-PW7BJD56BM');
    </script>
    
    <!-- GOOGLE TAG MANAGER -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W5Q3MC4H');</script>
    <!-- End Google Tag Manager -->

    <!-- CSS -->
    <link rel="stylesheet" href="css/estilosOficiales.css" />

  </head>
  <body>
    <!-- GOOGLE TAG MANAGER -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5Q3MC4H"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
   

    
    <!-- header -->
    <?php include 'components/header.php'; ?>

    <!-- landing -->
    <!-- Contenido dinámico -->
    <?php include 'router.php'; ?>


    <!-- Botón flotante WhatsApp -->
    <a href="#" id="whatsapp-button" target="_blank" 
      class="fixed bottom-1 right-3 text-green-500 z-50 hover:text-green-600 transition-transform hover:scale-110 text-[60px]">
      <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
    </a>

    <div id="whatsapp-snackbar" class="fixed bottom-20 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-75 text-white px-4 py-2 rounded-md text-sm hidden z-50">
      Contactar por WhatsApp
    </div>

    <!-- footer -->
    <?php include 'components/footer.php'; ?>


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
    <!-- contador que aumenta -->
    <script src="js/contador.js"></script>

     <!-- beneficios -->
    <script src="js/beneficios.js" defer></script>

    <!-- whatsapp -->
    <script src="js/WPbutton.js" defer></script>

    <!-- dropdown -->
    <script src="path/to/dropdown.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        initDropdown('dropdown');
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
      const swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: { delay: 5000, disableOnInteraction: false },
        pagination: { el: ".swiper-pagination", clickable: true },
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        effect: "fade",
        fadeEffect: { crossFade: true },
      });
    </script>

    <script src="js/header.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  </body>
</html>




