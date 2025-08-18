<section id="trayectoria" class="py-20 bg-white">
  <div class="container mx-auto px-4 max-w-5xl">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Nuestra Trayectoria</h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">
        Un recorrido de crecimiento, aprendizaje y logros que nos han llevado a ser referentes en desarrollo comunitario.
      </p>
    </div>

    <div class="relative">
      <!-- Línea central SOLO en desktop -->
      <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-gradient-to-b from-green-600 to-blue-600 hidden md:block"></div>

      <?php
      $milestones = [
        [
          "year" => "2008",
          "title" => "Fundación de la Asociación Encuentro",
          "description" => "Nace la Asociación Encuentro con el compromiso de impulsar proyectos sociales y urbanísticos en Villa María.",
          "side" => "left"
        ],
        [
          "year" => "2018",
          "title" => "Reconocimiento Local",
          "description" => "Recibimos el reconocimiento por nuestra contribución al desarrollo urbano sostenible en Villa María.",
          "side" => "right"
        ],
        [
          "year" => "2024",
          "title" => "Nuevos Proyectos en Marcha",
          "description" => "Impulsamos desarrollos con servicios subterráneos y amplias áreas verdes para mejorar la calidad de vida comunitaria.",
          "side" => "left"
        ],
      ];

      foreach ($milestones as $m) :
        $isLeft = $m["side"] === "left";
      ?>
        <div class="relative flex flex-col md:flex-row mb-16 <?= $isLeft ? "md:justify-start" : "md:justify-end" ?>">
          <!-- Punto central -->
          <div class="absolute left-1/2 md:transform md:-translate-x-1/2 w-6 h-6 bg-gradient-to-br from-green-600 to-blue-600 rounded-full border-4 border-white shadow-lg z-20"></div>

          <!-- Contenedor texto -->
          <div class="bg-white border rounded-lg shadow-lg p-6 
                      w-full md:max-w-[calc(50%-2rem)] 
                      <?= $isLeft ? "md:mr-auto md:text-left" : "md:ml-auto md:text-right" ?>">
            <div class="flex items-center space-x-3 mb-4 <?= $isLeft ? "" : "flex-row-reverse space-x-reverse" ?>">
              <div class="w-10 h-10 bg-gradient-to-br from-green-600 to-blue-600 rounded-lg flex items-center justify-center text-white font-bold text-lg">
                <?= htmlspecialchars($m["year"]) ?>
              </div>
              <h3 class="text-xl font-bold text-green-600"><?= htmlspecialchars($m["title"]) ?></h3>
            </div>
            <p class="text-gray-700 leading-relaxed"><?= htmlspecialchars($m["description"]) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Proyectos -->
    <div class="mt-16 max-w-6xl mx-auto">
      <h3 class="text-3xl font-bold text-gray-900 mb-8 text-center">Proyectos Destacados</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
        $projects = [
          [
            "name" => "Cuenca del Sol",
            "description" => "Lotes de 300 m² con cableado subterráneo y espacios verdes, ubicados próximamente en zona Hotel Amerian sobre Ruta 158 en Villa María.",
            "details" => [
              "Lotes desde 300 m²",
              "Lotes comerciales disponibles",
              "Ubicación estratégica con rápido acceso al centro y zona en crecimiento"
            ],
            "financing" => "Entrega mínima del 30%, financiación en hasta 30 cuotas ajustadas por índices oficiales."
          ],
          [
            "name" => "Los Ceibos",
            "description" => "Proyecto residencial con lotes desde 200 m² y 300 m², servicios completos y colaboración con el IMVI y CGT para facilitar el acceso a la tierra propia.",
            "details" => [
              "Más de 650 lotes",
              "Ubicación sobre calle Buenos Aires, zona con crecimiento comercial y residencial",
              "Acceso cercano a autopista Córdoba-Rosario"
            ],
            "financing" => "Entrega mínima del 15%, cuotas hasta 30 pagos con ajuste por índices oficiales."
          ],
          [
            "name" => "Puerto Sauce",
            "description" => "Nuevo desarrollo en Villa Nueva con lotes desde 250 m² y bajada al Río Ctalamochita, ubicado sobre Ruta Provincial 2.",
            "details" => [
              "Ubicado a metros de la nueva circunvalación y RN 158",
              "Acceso fácil a Villa María y Villa Nueva",
              "Zona con gran potencial de crecimiento"
            ],
            "financing" => "Entrega mínima del 25%, cuotas hasta 30 pagos con actualización basada en índices oficiales."
          ],
        ];
        foreach ($projects as $proj) : ?>
          <div class="flex flex-col border rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
            <h4 class="text-2xl font-bold text-green-700 mb-4"><?= htmlspecialchars($proj["name"]) ?></h4>
            <p class="mb-4 text-gray-700"><?= htmlspecialchars($proj["description"]) ?></p>
            <?php if (!empty($proj["details"])) : ?>
              <ul class="list-disc list-inside mb-4 text-gray-600">
                <?php foreach ($proj["details"] as $detail) : ?>
                  <li><?= htmlspecialchars($detail) ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
            <p class="italic text-gray-600"><strong>Financiación:</strong> <?= htmlspecialchars($proj["financing"]) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
