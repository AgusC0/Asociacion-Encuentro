<?php
// Datos del barrio Cuenca del Sol
$data = [
    "hero" => [
        "video" => "img/carlos-andrada.mp4",
        "title" => "Cuenca del Sol",
        "subtitle" => "Tu oportunidad de tener tu lote propio"
    ],
    "description" => [
        "title" => "CONCEPTO",
        "text" => "Cuenca del Sol es un proyecto que cuenta con lotes de 300 m² en la ciudad de Villa María, Córdoba. Cuentan con cableado subterráneo y amplios espacios verdes.",
        "features" => [
            [
                "icon" => "📍",
                "title" => "Ubicación",
                "desc" => "Ubicado próximamente en zona Hotel Amerian sobre Ruta 158"
            ],
            [
                "icon" => "📐",
                "title" => "Tamaño de lotes",
                "desc" => "Lotes desde 300 m²"
            ],
            [
                "icon" => "🏬",
                "title" => "Lotes comerciales",
                "desc" => "Cuenta con lotes comerciales"
            ]
        ]
    ],
    "location" => [
        "text" => "Este nuevo proyecto se encuentra ubicado en las inmediaciones del Hotel Amerian de Villa María, zona en gran crecimiento y desarrollo. Estará rodeado de estaciones de servicio, supermercados, el acceso a Villa María desde la Autopista Córdoba-Rosario y se encontrará por delante de la nueva circunvalación que rodea a nuestras ciudades.",
        "advantages" => [
            "Zona con gran potencial de crecimiento y expansión",
            "A 5 minutos del centro villamariense",
            "Ubicación estratégica sobre Ruta 158"
        ]
    ],
    "timeline" => [
        "bgColor" => "bg-white/10 text-black",
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
        "headline" => "Financiación",
        "features" => [
            "Entrega inicial del 30% del valor del lote",
            "Financiamiento hasta en 30 cuotas",
            "Cuotas ajustadas por IPC, costo de construcción y cemento"
        ]
    ],
    "maps" => "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13479.658566385448!2d-63.2357486!3d-32.3678353!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95cc5dfd5de01975%3A0xa5736e028ebd3152!2sCuenca%20del%20Sol!5e0!3m2!1ses-419!2sar!4v1689969670604!5m2!1ses-419!2sar"
];
?>

<!-- Hero con imagen -->
<section id="cuenca-del-sol-hero" class="relative min-h-screen flex items-center justify-center text-white bg-white">
    <img src="img/slide/2.jpg" alt="Cuenca del Sol" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="relative text-center px-4">
        <h1 class="text-4xl md:text-6xl font-bold"><?= $data['hero']['title'] ?></h1>
        <p class="text-lg md:text-xl mt-2"><?= $data['hero']['subtitle'] ?></p>
    </div>
</section>

<!-- Descripción -->
<section id="cuenca-del-sol-description" class="relative bg-f4f4f4 py-16 text-black">
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
        <div class="mt-6">
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/zo8_ig227n8" title="YouTube video" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</section>

<!-- Ubicación -->
<section id="cuenca-del-sol-location" class="relative bg-white py-12 text-black">
    <div class="container mx-auto px-4 max-w-3xl text-center">
        <h2 class="text-3xl font-bold mb-4">UBICACIÓN</h2>
        <p class="mb-6"><?= $data['location']['text'] ?></p>
        <div class="grid md:grid-cols-3 gap-6 text-left">
            <?php foreach ($data['location']['advantages'] as $adv): ?>
                <div class="p-4 bg-f4f4f4 rounded-lg shadow-md">
                    <p>✅ <?= $adv ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="mt-6">
            <iframe src="<?= $data['maps'] ?>" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<!-- Línea de tiempo -->
<section id="cuenca-del-sol-timeline" class="relative bg-f4f4f4 text-black py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-8">ETAPAS</h2>
        <div class="grid md:grid-cols-3 gap-6"> <!-- Cambié a 3 columnas -->
            <?php foreach ($data['timeline']['steps'] as $step): ?>
                <div class="p-6 rounded-lg shadow text-center bg-white <?= $step['done'] ? 'border-l-4 border-green-500' : 'border-l-4 border-gray-300' ?>">
                    <h3 class="font-bold"><?= $step['title'] ?></h3>
                    <p class="text-sm mb-2"><?= $step['desc'] ?></p>
                    <span class="inline-block px-3 py-1 text-sm rounded-full <?= $step['done'] ? 'bg-green-500 text-white' : 'bg-gray-300 text-black' ?>">
                        <?= $step['status'] ?? ($step['done'] ? 'Completado' : 'Pendiente') ?>
                    </span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Financiamiento -->
<section id="cuenca-del-sol-financing" class="relative bg-white py-16 text-center">
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
