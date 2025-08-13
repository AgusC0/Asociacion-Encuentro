<?php
// Simulamos las noticias como un arreglo. En la realidad vendría de DB.
$noticias = [
  [
    "id" => 1,
    "titulo" => "Tendencias en Urbanización Sostenible 2024",
    "resumen" => "Descubre las últimas tendencias en desarrollo urbano sostenible y cómo Norterra las implementa.",
    "categoria" => "Sostenibilidad",
    "autor" => "Equipo Encuentro Comunitario",
    "fecha" => "15 Mar 2024",
    "imagen" => "images/sustainable-urban-green-buildings.png",
    "link" => "/noticia.php?id=1"
  ],
  [
    "id" => 2,
    "titulo" => "Guía Completa para Comprar tu Primer Lote",
    "resumen" => "Todo lo que necesitas saber antes de invertir en un lote: documentación, financiación y más.",
    "categoria" => "Inversión",
    "autor" => "María González",
    "fecha" => "10 Mar 2024",
    "imagen" => "images/real-estate-land-guide.png",
    "link" => "/noticia.php?id=2"
  ],
  [
    "id" => 3,
    "titulo" => "Los Beneficios de Vivir en Desarrollos Planificados",
    "resumen" => "Conoce las ventajas de elegir un barrio planificado como Encuentro Comunitario para tu nueva casa.",
    "categoria" => "Lifestyle",
    "autor" => "Carlos Ruiz",
    "fecha" => "5 Mar 2024",
    "imagen" => "images/planned-community-lifestyle.png",
    "link" => "/noticia.php?id=3"
  ],
];
?>

<section id="noticias" class="py-20 bg-gray-50">
  <div class="container mx-auto px-4 max-w-7xl">
    <!-- Título -->
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Noticias</h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">
        Mantente informado con las últimas noticias y novedades de Encuentro Comunitario.
      </p>
    </div>

    <!-- Grid de noticias -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
      <?php foreach ($noticias as $noticia): ?>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
          <div class="relative h-48">
            <img 
              src="<?= htmlspecialchars($noticia['imagen']) ?>" 
              alt="<?= htmlspecialchars($noticia['titulo']) ?>" 
              class="w-full h-full object-cover"
              loading="lazy"
            />
            <span class="absolute top-4 left-4 bg-green-600 text-white text-xs uppercase px-3 py-1 rounded">
              <?= htmlspecialchars($noticia['categoria']) ?>
            </span>
          </div>
          <div class="p-6">
            <h3 class="text-lg font-semibold line-clamp-2 mb-3"><?= htmlspecialchars($noticia['titulo']) ?></h3>
            <p class="text-gray-600 line-clamp-3 mb-4"><?= htmlspecialchars($noticia['resumen']) ?></p>
            <div class="flex justify-between text-sm text-gray-500 mb-6">
              <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.21 0 4.27.567 6.06 1.556"/>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <span><?= htmlspecialchars($noticia['autor']) ?></span>
              </div>
              <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M3 11h18M5 21h14a2 2 0 002-2v-7H3v7a2 2 0 002 2z"/>
                </svg>
                <span><?= htmlspecialchars($noticia['fecha']) ?></span>
              </div>
            </div>
            <a href="<?= htmlspecialchars($noticia['link']) ?>" class="block w-full text-center bg-transparent border border-green-600 text-green-600 font-semibold rounded-md py-2 hover:bg-green-600 hover:text-white transition">
              Leer más
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Botón para ver todas las noticias -->
    <div class="text-center">
      <a a href="/Asociacion-Encuentro/noticias" class="inline-block px-8 py-3 bg-green-600 text-white font-semibold rounded-md hover:bg-green-700 transition">
        Ver todas las noticias
      </a>
    </div>
  </div>
</section>
