<?php
// Datos del barrio Puerto Sauce
$data = [
    "hero" => [
        "video" => "img/puertosauce.mp4",
        "title" => "",
        "subtitle" => ""
    ],
    "description" => [
        "title" => "Concepto",
        "text" => "Puerto Sauce es un nuevo desarrollo urbanístico que llega con el objetivo de diversificar el acceso a la tierra y aportar crecimiento a la localidad de Villa Nueva. Estará ubicado sobre la Ruta Provincial 2, frente a la rotonda que da acceso a la nueva circunvalación. A pocos metros, se encuentra el cruce con la Ruta Nacional 158, principal acceso a la localidad de Villa María y una de las grandes arterias de nuestro país.",
        "images" => [],
        "features" => [
            [
                "icon" => "📍",
                "title" => "Ubicación estratégica",
                "desc" => "Ubicado sobre RP2, a metros de RN 158"
            ],
            [
                "icon" => "📐",
                "title" => "Tamaño de lotes",
                "desc" => "Lotes desde 250 m²"
            ],
            [
                "icon" => "💧",
                "title" => "Bajada al río",
                "desc" => "Loteo con bajada al Río Ctalamochita"
            ]
        ]
    ],
    "location" => [
        "text" => "El desarrollo está emplazado en una zona de gran potencial de crecimiento, donde algunos puntos a destacar son: la nueva circunvalación, el Río Ctalamochita, el acceso a ambas localidades (Ruta 158 a Villa María y Ruta 2 a Villa Nueva). Partiendo desde el ingreso al loteo, solo te tomará 15 minutos llegar hasta la Plaza Centenario, corazón de Villa María; mientras que del otro lado del río, te tomará solamente 6 minutos llegar a Plaza Capitán de los Andes, ubicada en pleno centro Villanovense.",
        "advantages" => [
            "Zona con gran potencial de crecimiento y expansión",
            "A 15 minutos de Plaza Centenario y 6 minutos de Plaza Capitán de los Andes",
            "Rodeado de dos importantes vías de acceso"
        ]
    ],
    "timeline" => [
        "steps" => [
            [
                "title" => "Adquisición de la tierra",
                "desc" => "Primera etapa: compra comunitaria de la tierra.",
                "done" => true
            ],
            [
                "title" => "Obras e infraestructura",
                "desc" => "Segunda etapa: apertura y consolidado de calles, cableado eléctrico subterráneo, obras nexo.",
                "done" => false
            ]
        ]
    ],
    "financing" => [
        "headline" => "Financiación flexible",
        "features" => [
            "Entrega inicial del 25% del valor del lote",
            "Financiamiento hasta en 30 cuotas",
            "Cuotas ajustadas por IPC, costo de construcción y cemento"
        ]
    ]
];
?>

<!-- Hero con video -->
<section id="puerto-sauce-hero" class="relative min-h-screen flex items-center justify-center text-white">
    <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover">
        <source src="<?= $data['hero']['video'] ?>" type="video/mp4">
    </video>
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="relative text-center px-4">
        <h1 class="text-4xl md:text-6xl font-bold"><?= $data['hero']['title'] ?></h1>
        <p class="text-lg md:text-xl mt-2"><?= $data['hero']['subtitle'] ?></p>
    </div>
</section>

<!-- Descripción -->
<section id="puerto-sauce-description" class="relative bg-gray-900/80 text-white py-16">
    <div class="container mx-auto px-4 text-center max-w-4xl">
        <h2 class="text-3xl font-bold mb-4"><?= $data['description']['title'] ?></h2>
        <p class="leading-relaxed mb-6"><?= $data['description']['text'] ?></p>
        <div class="grid md:grid-cols-3 gap-6">
            <?php foreach ($data['description']['features'] as $feature): ?>
                <div class="p-6 rounded-lg shadow-md text-center bg-white/10">
                    <div class="text-4xl mb-2"><?= $feature['icon'] ?></div>
                    <h3 class="text-xl font-semibold mb-2"><?= $feature['title'] ?></h3>
                    <p><?= $feature['desc'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Ubicación -->
<section id="puerto-sauce-location" class="relative bg-gray-800/80 py-12 text-white">
    <div class="container mx-auto px-4 max-w-3xl text-center">
        <h2 class="text-3xl font-bold mb-4">Ubicación</h2>
        <p class="mb-6"><?= $data['location']['text'] ?></p>
        <div class="grid md:grid-cols-3 gap-6 text-left">
            <?php foreach ($data['location']['advantages'] as $adv): ?>
                <div class="p-4 bg-white/10 rounded-lg shadow-md">
                    <p>✅ <?= $adv ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Línea de tiempo -->
<section id="puerto-sauce-timeline" class="relative bg-white/10 text-black py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-8">Etapas del proyecto</h2>
        <div class="grid md:grid-cols-2 gap-6">
            <?php foreach ($data['timeline']['steps'] as $step): ?>
                <div class="p-6 rounded-lg shadow text-center <?= $step['done'] ? 'border-l-4 border-green-500' : '' ?>">
                    <h3 class="font-bold"><?= $step['title'] ?></h3>
                    <p class="text-sm mb-2"><?= $step['desc'] ?></p>
                    <span class="inline-block px-3 py-1 text-sm rounded-full <?= $step['done'] ? 'bg-green-500 text-white' : 'bg-gray-300 text-black' ?>">
                        <?= $step['done'] ? 'Completado' : 'Pendiente' ?>
                    </span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Financiamiento -->
<section id="puerto-sauce-financing" class="relative bg-gray-100 py-16 text-center">
    <div class="container mx-auto px-4 max-w-lg">
        <h2 class="text-3xl font-bold mb-6"><?= $data['financing']['headline'] ?></h2>
        <ul class="list-disc list-inside text-left">
            <?php foreach ($data['financing']['features'] as $f): ?>
                <li class="mb-2"><?= $f ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="https://wa.me/543534195508" target="_blank">
            <button class="mt-6 px-6 py-3 bg-green-600 text-white font-bold rounded-lg hover:bg-green-700 transition">
                ¡Contactate y reservá tu lote!
            </button>
        </a>
    </div>
</section>
