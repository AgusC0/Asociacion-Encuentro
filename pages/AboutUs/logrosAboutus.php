<section class="py-20 bg-gradient-to-br from-green-600 to-blue-600">
  <div class="container mx-auto px-4 max-w-7xl">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Nuestros Logros</h2>
      <p class="text-xl text-white/90 max-w-3xl mx-auto">
        Números que reflejan nuestro compromiso y la confianza que las familias depositan en nosotros.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <?php
      // Array con los datos
      $stats = [
        [
          "icon" => "trending-up",
          "number" => "10+",
          "label" => "Años de experiencia",
          "description" => "Construyendo confianza desde 2008",
        ],
        [
          "icon" => "home",
          "number" => "430",
          "label" => "Lotes entregados  ",
          "description" => "Lotes entregados exitosamente",
        ],
        [
          "icon" => "users",
          "number" => "500+",
          "label" => "Familias satisfechas",
          "description" => "Clientes que confiaron en nosotros",
        ],
        [
          "icon" => "map-pin",
          "number" => "1,200",
          "label" => "Lotes desarrollados",
          "description" => "Espacios creados para nuevos hogares",
        ],
      ];

      // Función simple para íconos SVG inline (puedes cambiar por tu librería o imágenes)
      function renderIcon($name) {
        switch ($name) {
          case "trending-up":
            return '<svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 17l6-6 4 4 8-8" />
                    </svg>';
          case "home":
            return '<svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 9l9-7 9 7v11a2 2 0 01-2 2h-4a2 2 0 01-2-2v-5H9v5a2 2 0 01-2 2H3a2 2 0 01-2-2V9z" />
                    </svg>';
          case "users":
            return '<svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M12 12a4 4 0 110-8 4 4 0 010 8z" />
                    </svg>';
          case "map-pin":
            return '<svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5s-3 1.343-3 3 1.343 3 3 3z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 21s-7-4.5-7-10a7 7 0 1114 0c0 5.5-7 10-7 10z" />
                    </svg>';
          default:
            return '';
        }
      }

      foreach ($stats as $stat) :
      ?>
        <div class="border-0 bg-white/10 backdrop-blur-sm rounded-lg hover:bg-white/20 transition-all shadow-lg">
          <div class="p-8 text-center">
            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
              <?= renderIcon($stat["icon"]) ?>
            </div>
            <div class="text-4xl md:text-5xl font-bold text-white mb-2"><?= htmlspecialchars($stat["number"]) ?></div>
            <h3 class="text-xl font-bold text-white mb-2"><?= htmlspecialchars($stat["label"]) ?></h3>
            <p class="text-white/80 text-sm"><?= htmlspecialchars($stat["description"]) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
