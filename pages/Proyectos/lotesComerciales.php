<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$desarrollos = [
    [
        "id" => 1,
        "title" => "Puerto Sauce",
        "description" => "Ubicado en Ruta 2 a metros de Ruta 158, Puerto Sauce se posiciona de cara al futuro encontrándose próximo a la nueva circunvalación.",
        "image" => "img/comerciales/asociacion-encuentro-comunitario-lotes-comerciales-puerto-sauce.jpg",
        "btn_text" => "Cómo llegar",
        "btn_link" => "https://maps.app.goo.gl/77VkLL9ZseQ1RHgQ8",
    ],
    [
        "id" => 2,
        "title" => "Cuenca del Sol",
        "description" => "Cuenca del Sol se encuentra en una gran área en actual expansión y a 500 metros de la Autopista Córdoba-Rosario.",
        "image" => "img/comerciales/asociacion-encuentro-comunitario-lotes-comerciales-cuenca-del-sol.jpg",
        "btn_text" => "Cómo llegar",
        "btn_link" => "https://maps.app.goo.gl/WvcHpTVFxC9XqwLy5",
    ],
    [
        "id" => 3,
        "title" => "Futuros proyectos",
        "description" => "Desde Encuentro Comunitario nos encontramos constantemente generando nuevos proyectos para desarrollar la región residencial y comercialmente.",
        "image" => "img/comerciales/asociacion-encuentro-comunitario-lotes-comerciales-nuevos-futuros-desarrollos.jpg",
        "btn_text" => "Encuentro Comunitario",
        "btn_link" => "https://maps.app.goo.gl/FYS7BZxkpBwBBBrR6",
    ],
];

$caracteristicas = [
    [
        "icon" => "img/comerciales/iconos/superficie.svg",
        "alt" => "Superficie",
        "text" => "Desde 700 m², hasta 1400 m²",
    ],
    [
        "icon" => "img/comerciales/iconos/ubicacion.svg",
        "alt" => "Ubicación",
        "text" => "Ubicación estratégica en zona en desarrollo de Villa Nueva",
    ],
    [
        "icon" => "img/comerciales/iconos/rutas.svg",
        "alt" => "Accesos",
        "text" => "Ingreso sobre Ruta Provincial nº 2, a pocos metros de Ruta Nacional nº 158",
    ],
    [
        "icon" => "img/comerciales/iconos/pagos.svg",
        "alt" => "Financiación",
        "text" => "Mínima entrega, con cómodas facilidades de financiación",
    ],
    [
        "icon" => "img/comerciales/iconos/rio.svg",
        "alt" => "Proyecto con bajada al río",
        "text" => "Emplazados en un proyecto que cuenta con bajada al río",
    ],
    [
        "icon" => "img/comerciales/iconos/barrio.svg",
        "alt" => "Nuevo barrio",
        "text" => "Nuevo barrio con más de 500 lotes residenciales (+450 vendidos)",
    ],
];
?>

<!-- Hero -->
<section class="relative min-h-[91vh] flex items-center bg-gray-900">
  <div class="absolute inset-0 z-0">
    <img src="img/comerciales/asociacion-encuentro-comunitario-slider-lotes-comerciales.jpg" alt="Fondo Proyectos" class="object-cover w-full h-full" />
    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
  </div>
  <div class="relative z-10 container mx-auto px-4">
    <div class="max-w-3xl text-left">
      <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight">
        Invertí en el desarrollo de la región
      </h1>
      <p class="text-white/80 mt-2 text-lg">Te ofrecemos lotes comerciales con ubicación privilegiada</p>
    </div>
  </div>
</section>

<!-- Intro -->
<section class="container mx-auto max-w-4xl px-4 py-16 text-center text-negro">
  <p class="text-lg leading-relaxed">
    Contamos con lotes desde 700 m² hasta 1400 m² ubicados en los desarrollos Puerto Sauce y Cuenca del Sol,
    proyectos que suman más de 1000 lotes residenciales comercializados entre ambos.
  </p>
  <p class="mt-4 text-xl font-semibold">
    ¡Invertí en un terreno con grandes posibilidades de capitalización e inversión!
  </p>
</section>

<!-- Desarrollos -->
<section class="container mx-auto max-w-7xl px-4 py-16">
  <div class="max-w-3xl mx-auto text-center mb-12">
    <span class="inline-block rounded-full bg-blue-100 px-3 py-1 text-sm font-medium text-blue-700">
      Nuestros Desarrollos
    </span>
    <h2 class="mt-3 text-3xl font-bold tracking-tight md:text-4xl">Proyectos en marcha</h2>
  </div>

  <div class="grid gap-8 md:grid-cols-3">
    <?php 
    foreach($desarrollos as $d){
      echo '<div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden flex flex-col hover:shadow-2xl transition-shadow duration-300">';
      echo '<img src="'.$d['image'].'" alt="'.$d['title'].'" class="w-full h-48 object-cover">';
      echo '<div class="p-6 flex flex-col flex-grow">';
      echo '<h3 class="text-center text-xl font-bold mt-5">'.$d['title'].'</h3>';
      echo '<div class="border-t border-gray-300 my-3 mx-auto w-12"></div>';
      echo '<p class="text-center text-gray-700 dark:text-gray-300 flex-grow" style="height:7em; overflow:hidden;">'.$d['description'].'</p>';
      echo '<a href="'.$d['btn_link'].'" target="_blank" class="btn-primary mt-5 block text-center py-3 rounded bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">'.$d['btn_text'].'</a>';
      echo '</div></div>';
    }
    ?>
  </div>
</section>

<!-- Video -->
<section class="container mx-auto px-4 py-16">
  <div class="w-full max-w-6xl mx-auto rounded-lg shadow-lg overflow-hidden" style="height: 700px;">
    <iframe class="w-full h-full" src="https://www.youtube.com/embed/u_vlN3OYk24" frameborder="0" allowfullscreen></iframe>
  </div>
</section>

<!-- Seguridad y características -->
<section class="container mx-auto max-w-7xl px-4 py-16 grid md:grid-cols-5 gap-8">
  <div class="md:col-span-2 flex flex-col justify-center">
    <h3 class="text-2xl font-bold mb-6">Invertir en Puerto Sauce junto a Encuentro Comunitario te brinda seguridad y respaldo</h3>
    <p class="mb-6 text-negro">
      Formá parte de nuestros proyectos de desarrollo comercial de la región Villamariense, la cual concentra un enorme tráfico y una ubicación clave tanto a nivel provincial como nacional.
    </p>
    <a href="https://wa.me/543534195505" target="_blank" class="btn-primary inline-block px-6 py-3 rounded bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">
      Hablar con un asesor
    </a>
  </div>

  <div class="md:col-span-3 grid grid-cols-3 gap-6">
    <?php
    foreach($caracteristicas as $c){
      echo '<div class="flex flex-col items-center text-center">';
      echo '<img src="'.$c['icon'].'" alt="'.$c['alt'].'" class="w-24 h-24 mb-2">';
      echo '<p class="text-negro">'.$c['text'].'</p>';
      echo '</div>';
    }
    ?>
    <div class="col-span-full text-center mt-6">
      <a href="descargas/Puerto-Sauce-Lotes-comerciales.pdf" target="_blank" class="btn-primary px-8 py-3 rounded bg-blue-600 text-white font-semibold hover:bg-blue-700 transition inline-block">
        Descargar PDF
      </a>
    </div>
  </div>
</section>

<!-- Mapa -->
<section class="w-full mt-5" style="height:90vh;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13472.916800425359!2d-63.2038877!3d-32.4130181!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95cc433ac1ad6bb1%3A0xe9f7d1499f29c855!2sAsociaci%C3%B3n%20Civil%22Encuentro%20Comunitario%22!5e0!3m2!1ses-419!2sar!4v1698210040311!5m2!1ses-419!2sar" class="w-full h-full border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
