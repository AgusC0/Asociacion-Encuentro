<?php
// Datos del barrio Los Ceibos
$data = [
    "hero" => [
        "video" => "videos/los-ceibos.mp4",
        "title" => "Proyecto Los Ceibos",
        "subtitle" => "Tu oportunidad de tener tu lote propio"
    ],
    "description" => [
        "title" => "Lotes en Villa María",
        "text" => "Los Ceibos es un proyecto que ofrece lotes desde 200 m² en una zona en crecimiento de Villa María, Córdoba. Con servicios completos y acceso a la tierra propia, este proyecto es ideal para quienes buscan invertir en su futuro hogar.",
        "images" => [
            "img/ceibos-1.jpg",
            "img/ceibos-2.jpg",
            "img/ceibos-3.jpg"
        ],
        "bgColor" => "bg-gray-900/80"
    ],
    "features" => [
        "bgColor" => "bg-white/10 text-black",
        "items" => [
            [
                "icon" => "📍",
                "title" => "Ubicación estratégica",
                "desc" => "Próximamente sobre acceso a Villa María por calle Buenos Aires. Zona en gran crecimiento residencial con comercios esenciales cercanos."
            ],
            [
                "icon" => "🏘️",
                "title" => "Lotes disponibles",
                "desc" => "Más de 650 lotes de 200 m² y 300 m² listos para tu inversión o futura casa."
            ],
            [
                "icon" => "⚡",
                "title" => "Servicios completos",
                "desc" => "Red de energía eléctrica subterránea, agua con conexión domiciliaria, alumbrado público, cordón cuneta y fibra óptica."
            ]
        ]
    ],
    "location" => [
        "bgColor" => "bg-gray-800/80",
        "text" => "Este nuevo proyecto se encuentra ubicado en las inmediaciones del acceso a Villa María sobre Calle Buenos Aires, zona en gran crecimiento residencial y comercial. Se facilita el acceso al centro y cuenta con comercios esenciales a pocos minutos.",
        "advantages" => [
            "Zona con gran potencial de crecimiento y expansión",
            "Comercios esenciales a pocos minutos",
            "A metros del acceso a la autopista Cba-Rosario"
        ]
    ],
    "timeline" => [
        "bgColor" => "bg-white/10 text-black",
        "steps" => [
            [
                "title" => "Compra de tierra",
                "desc" => "Primera etapa: adquisición comunitaria del terreno.",
                "done" => true
            ],
            [
                "title" => "Obras de urbanización",
                "desc" => "Segunda etapa: apertura de calles, tendido eléctrico subterráneo y obras nexo.",
                "done" => false
            ],
            [
                "title" => "Escritura individual",
                "desc" => "Entrega formal de lotes a cada comprador.",
                "done" => false
            ]
        ]
    ],
    "financing" => [
        "bgColor" => "#F4F4F4",
        "headline" => "Financiación flexible",
        "features" => [
            "Entrega inicial del 15% del valor del lote",
            "Financiamiento hasta en 30 cuotas",
            "Cuotas ajustadas por IPC, costo de construcción y cemento"
        ]
    ]
];
?>

<!-- Hero con video -->
<section id="los-ceibos-hero" class="relative min-h-screen flex items-center justify-center text-white">
    <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover">
        <source src="<?= $data['hero']['video'] ?>" type="video/mp4">
    </video>
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative text-center px-4">
        <h1 class="text-4xl md:text-6xl font-bold"><?= $data['hero']['title'] ?></h1>
        <p class="text-lg md:text-xl mt-2"><?= $data['hero']['subtitle'] ?></p>
    </div>
</section>

<!-- Descripción con fondo sólido -->
<section id="los-ceibos-description" class="relative <?= $data['description']['bgColor'] ?> text-white py-16">
    <div class="container mx-auto px-4 text-center max-w-4xl">
        <h2 class="text-3xl font-bold mb-4"><?= $data['description']['title'] ?></h2>
        <p class="leading-relaxed mb-6"><?= $data['description']['text'] ?></p>
        <div class="grid md:grid-cols-3 gap-4">
            <?php foreach ($data['description']['images'] as $img): ?>
                <img src="<?= $img ?>" class="w-full rounded-lg shadow-md" alt="">
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Características -->
<section id="los-ceibos-features" class="relative <?= $data['features']['bgColor'] ?> py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-6">Características clave</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <?php foreach ($data['features']['items'] as $feature): ?>
                <div class="p-6 rounded-lg shadow-md text-center">
                    <div class="text-4xl mb-2"><?= $feature['icon'] ?></div>
                    <h3 class="text-xl font-semibold mb-2"><?= $feature['title'] ?></h3>
                    <p><?= $feature['desc'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Ubicación compacta -->
<section id="los-ceibos-location" class="relative <?= $data['location']['bgColor'] ?> py-12 text-white">
    <div class="container mx-auto px-4 max-w-3xl text-center">
        <h2 class="text-3xl font-bold mb-4">Ubicación</h2>
        <p class="mb-4"><?= $data['location']['text'] ?></p>
        <ul class="list-disc list-inside">
            <?php foreach ($data['location']['advantages'] as $adv): ?>
                <li><?= $adv ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<!-- Línea de tiempo -->
<section id="los-ceibos-timeline" class="relative <?= $data['timeline']['bgColor'] ?> py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-8">Etapas del proyecto</h2>
        <div class="grid md:grid-cols-3 gap-6">
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
<section id="los-ceibos-financing" class="relative <?= $data['financing']['bgColor'] ?> py-16 text-center">
    <div class="container mx-auto px-4 max-w-lg">
        <h2 class="text-3xl font-bold mb-6"><?= $data['financing']['headline'] ?></h2>
        <ul class="list-disc list-inside">
            <?php foreach ($data['financing']['features'] as $f): ?>
                <li class="mb-2"><?= $f ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
