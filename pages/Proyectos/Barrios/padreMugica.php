<?php
// Datos del barrio único
$data = [
    "hero" => [
        "image" => "/img/barrio-padre-mugica.jpg",
        "title" => "Barrio Padre Mugica",
        "subtitle" => "Nuestro primer proyecto comunitario"
    ],
    "description" => [
        "title" => "Nuestro primer proyecto",
        "text" => "Como consecuencia de la experiencia con el Programa de Acceso al Suelo Urbano (PASU por sus iniciales), decidimos redoblar la apuesta y desarrollar nuestro propio loteo, junto a un gran grupo de socios que acompañó la propuesta.",
        "images" => [
            "/img/barrio-1.jpg",
            "/img/barrio-2.jpg",
            "/img/barrio-3.jpg"
        ]
    ],
    "features" => [
        [
            "icon" => "🏗️",
            "title" => "El comienzo",
            "desc" => "Lo primero que hicimos fue reacondicionar la ya existente Asociación Civil Encuentro Comunitario. Posteriormente comenzamos a buscar interesados en llevar a cabo una gran compra comunitaria de tierra, dando así con una extensa parcela de tierra ubicada en las inmediaciones del cruce de ruta 2 y ruta 9."
        ],
        [
            "icon" => "🏡",
            "title" => "Nacimiento del barrio",
            "desc" => "Se dió a luz el Barrio Padre Mugica, el cual albergaría a más de 800 familias."
        ],
        [
            "icon" => "🔧",
            "title" => "Acompañamos el proyecto",
            "desc" => "En una primera etapa realizamos las obras nexo correspondientes del loteo: apertura y consolidado de calles, tendido eléctrico, conexión a los servicios, entre otros. Posteriormente, en una segunda etapa, llevamos a cabo el proceso de escrituración para que cada familia pueda tener su lote a su nombre."
        ]
    ],
    "location" => [
        "advantages" => [
            "Cercanía a rutas principales",
            "Servicios completos disponibles",
            "Área segura y planificada"
        ]
    ],
    "timeline" => [
        [
            "title" => "Planificación",
            "desc" => "Definimos el proyecto y los objetivos.",
            "done" => true
        ],
        [
            "title" => "Obras",
            "desc" => "Apertura de calles y tendido de servicios.",
            "done" => true
        ],
        [
            "title" => "Escrituración",
            "desc" => "Entrega formal de los lotes a cada familia.",
            "done" => false
        ]
    ],
    "financing" => [
        "headline" => "Opciones de financiamiento",
        "features" => [
            "Financiación en cuotas accesibles",
            "Asesoramiento personalizado",
            "Trámites legales incluidos"
        ]
    ]
];
?>

<section id="padre-mugica" class="relative min-h-screen flex flex-col text-white">
    <!-- Imagen de fondo del Hero -->
    <div class="absolute inset-0 z-0">
        <img src="<?= $data['hero']['image'] ?>" alt="<?= $data['hero']['title'] ?>" class="object-cover w-full h-full">
        <div class="absolute inset-0 bg-black/60"></div>
    </div>

    <!-- Contenido -->
    <div class="relative z-10 container mx-auto px-4 py-16 space-y-16">

        <!-- Hero -->
        <div class="text-center space-y-4">
            <h1 class="text-4xl md:text-6xl font-bold"><?= $data['hero']['title'] ?></h1>
            <p class="max-w-3xl mx-auto text-lg md:text-xl"><?= $data['hero']['subtitle'] ?></p>
        </div>

        <!-- Descripción -->
        <div class="bg-white/10 rounded-lg p-6 shadow-lg max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4"><?= $data['description']['title'] ?></h2>
            <p class="leading-relaxed"><?= $data['description']['text'] ?></p>
            <div class="grid md:grid-cols-3 gap-4 mt-6">
                <?php foreach ($data['description']['images'] as $img): ?>
                    <img src="<?= $img ?>" class="w-full rounded-lg shadow-md" alt="">
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Características -->
        <div>
            <h2 class="text-3xl font-bold text-center mb-6">Características clave</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <?php foreach ($data['features'] as $feature): ?>
                    <div class="bg-white/10 p-6 rounded-lg shadow-md text-center">
                        <div class="text-4xl mb-2"><?= $feature['icon'] ?></div>
                        <h3 class="text-xl font-semibold mb-2"><?= $feature['title'] ?></h3>
                        <p><?= $feature['desc'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Ubicación -->
        <div>
            <h2 class="text-3xl font-bold text-center mb-4">Ubicación</h2>
            <iframe src="" width="100%" height="300" allowfullscreen loading="lazy" class="rounded-lg shadow-md mb-4"></iframe>
            <ul class="list-disc list-inside max-w-lg mx-auto">
                <?php foreach ($data['location']['advantages'] as $adv): ?>
                    <li><?= $adv ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Línea de tiempo -->
        <div>
            <h2 class="text-3xl font-bold text-center mb-8">Progreso del proyecto</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <?php foreach ($data['timeline'] as $step): ?>
                    <div class="p-6 bg-white/10 rounded-lg shadow text-center <?= $step['done'] ? 'border-l-4 border-green-500' : '' ?>">
                        <h3 class="font-bold"><?= $step['title'] ?></h3>
                        <p class="text-sm mb-2"><?= $step['desc'] ?></p>
                        <span class="inline-block px-3 py-1 text-sm rounded-full <?= $step['done'] ? 'bg-green-500 text-white' : 'bg-gray-300 text-black' ?>">
                            <?= $step['done'] ? 'Completado' : 'Pendiente' ?>
                        </span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Financiamiento -->
        <div class="text-center">
            <h2 class="text-3xl font-bold mb-6"><?= $data['financing']['headline'] ?></h2>
            <ul class="list-disc list-inside max-w-lg mx-auto">
                <?php foreach ($data['financing']['features'] as $f): ?>
                    <li><?= $f ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</section>