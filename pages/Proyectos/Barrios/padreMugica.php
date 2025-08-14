<?php
// Datos del barrio único
$data = [
    "hero" => [
        "image" => "img/parallax/parallax-cuencas.jpg",
        "title" => "Barrio",
        "subtitle" => "Nuestro primer proyecto comunitario"
    ],
    "description" => [
        "title" => "Nuestro primer proyecto",
        "text" => "Como consecuencia de la experiencia con el Programa de Acceso al Suelo Urbano (PASU por sus iniciales), decidimos redoblar la apuesta y desarrollar nuestro propio loteo, junto a un gran grupo de socios que acompañó la propuesta.",
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
                "status" => "Completado",
                "done" => true
            ],
            [
                "title" => "Escritura individual",
                "desc" => "Entrega formal de lotes a cada comprador.",
                "status" => "Próximo a finalizar",
                "done" => false
            ]
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

<section id="padre-mugica" class="relative flex flex-col text-black bg-[#f4f4f4]">

    <!-- Hero -->
    <div class="relative w-full h-[60vh] md:h-[91vh] flex items-center justify-center text-white text-center bg-white">
        <!-- Fondo Hero -->
        <div class="absolute inset-0 z-0">
            <img src="<?= $data['hero']['image'] ?>" alt="<?= $data['hero']['title'] ?>" class="object-cover w-full h-full ">
        </div>

        <!-- Contenido Hero -->
        <div class="relative z-10 px-4">
            <h1 class="text-4xl md:text-6xl font-bold"><?= $data['hero']['title'] ?></h1>
            <img src="img/logos/padre-mugica_logo.png" alt="Logo Los Ceibos" class="w-80 md:w-120 mb-6 text-center mx-auto">
            <p class="max-w-3xl mx-auto text-lg md:text-xl"><?= $data['hero']['subtitle'] ?></p>
        </div>
    </div>

    <!-- Contenido restante -->
    <div class="relative z-10 container mx-auto px-4 py-16 space-y-16">

        <!-- Descripción -->
        <div class="rounded-lg p-6 shadow-lg max-w-4xl mx-auto text-center bg-white">
            <h2 class="text-3xl font-bold mb-4"><?= $data['description']['title'] ?></h2>
            <p class="leading-relaxed"><?= $data['description']['text'] ?></p>
        </div>

        <!-- Características -->
        <div>
            <h2 class="text-3xl font-bold text-center mb-6">Características clave</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <?php foreach ($data['features'] as $feature): ?>
                    <div class="p-6 rounded-lg shadow-md text-center bg-white">
                        <div class="text-4xl mb-2"><?= $feature['icon'] ?></div>
                        <h3 class="text-xl font-semibold mb-2"><?= $feature['title'] ?></h3>
                        <p><?= $feature['desc'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Línea de tiempo -->
        <div>
            <h2 class="text-3xl font-bold text-center mb-8">Progreso del proyecto</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php foreach ($data['timeline']['steps'] as $step): ?>
                    <?php
                        if($step['status'] === 'Completado') {
                            $borderColor = 'border-green-500';
                            $badgeBg = 'bg-green-500 text-white';
                        } elseif($step['status'] === 'Próximo a finalizar') {
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