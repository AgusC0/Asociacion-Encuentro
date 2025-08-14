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
    "timeline" => [
        "steps" => [
            [
                "title" => "Compra de tierra",
                "desc" => "Primera etapa: adquisición comunitaria del terreno.",
                "status" => "Completado",
                "done" => true
            ],
            [
                "title" => "Obras de urbanización",
                "desc" => "Segunda etapa: apertura de calles, tendido eléctrico subterráneo y obras nexo.",
                "status" => "En curso",
                "done" => true
            ],
            [
                "title" => "Escritura individual",
                "desc" => "Entrega formal de lotes a cada comprador.",
                "status" => "Pendiente",
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
        <h1 class="text-4xl md:text-6xl font-bold text-white"><?= $data['hero']['title'] ?></h1>
        <p class="text-lg md:text-xl mt-2 text-white"><?= $data['hero']['subtitle'] ?></p>
    </div>
</section>

<!-- Descripción -->
<section id="puerto-sauce-description" class="relative bg-f4f4f4 text-black py-16">
    <div class="container mx-auto px-4 text-center max-w-4xl">
        <h2 class="text-3xl font-bold mb-4"><?= $data['description']['title'] ?></h2>
        <p class="leading-relaxed mb-6"><?= $data['description']['text'] ?></p>
        <div class="grid md:grid-cols-3 gap-6">
            <?php foreach ($data['description']['features'] as $feature): ?>
                <div class="p-6 rounded-lg shadow-md text-center bg-white">
                    <div class="text-4xl mb-2"><?= $feature['icon'] ?></div>
                    <h3 class="text-xl font-semibold mb-2"><?= $feature['title'] ?></h3>
                    <p><?= $feature['desc'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Línea de tiempo -->
<section id="puerto-sauce-timeline" class="relative bg-f4f4f4 text-black py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-8">Etapas del proyecto</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <?php foreach ($data['timeline']['steps'] as $step): ?>
                <?php
                    // Definir color de borde y badge según status
                    if($step['status'] === 'Completado') {
                        $borderColor = 'border-green-500';
                        $badgeBg = 'bg-green-500 text-white';
                    } elseif($step['status'] === 'En curso') {
                        $borderColor = 'border-green-300';
                        $badgeBg = 'bg-green-300 text-black';
                    } else {
                        $borderColor = 'border-gray-300';
                        $badgeBg = 'bg-gray-300 text-black';
                    }
                ?>
                <div class="p-6 rounded-lg shadow text-center border-l-4 <?= $borderColor ?> bg-white">
                    <h3 class="font-bold"><?= $step['title'] ?></h3>
                    <p class="text-sm mb-2"><?= $step['desc'] ?></p>
                    <span class="inline-block px-3 py-1 text-sm rounded-full <?= $badgeBg ?>">
                        <?= $step['status'] ?>
                    </span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Financiamiento -->
<section id="puerto-sauce-financing" class="relative bg-f4f4f4 py-16 text-center text-black">
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
