<?php
// Obtener la ruta solicitada (sin dominio ni query)
$request = $_SERVER['REQUEST_URI'];

// Limpiar la ruta para quedarnos con la ruta relativa (sin barras al principio ni query)
$path = trim(parse_url($request, PHP_URL_PATH), '/');

// Dividir la ruta en partes
$parts = explode('/', $path);

// Si la ruta está vacía o es la raíz del proyecto → home
if ($path === '' || $path === 'index.php' || $path === 'Asociacion-Encuentro' || $path === 'Asociacion-Encuentro/index.php') {
    include 'components/landing/home.php';
    include 'components/landing/details_project.php';
    include 'components/landing/benficios.php';
    include 'components/landing/contact.php';
    include 'components/landing/noticiasMock.php';
    return;
}

// Si el primer segmento es "Asociacion-Encuentro" hay que mirar el siguiente para la ruta real
if ($parts[0] === 'Asociacion-Encuentro') {
    $route = $parts[1] ?? '';
} else {
    $route = $parts[0];
}

switch ($route) {
    case 'proyectos':
        if (isset($parts[2]) && is_numeric($parts[2])) {
            $proyectoId = (int) $parts[2];
            include 'pages/proyectos.php';
        } else {
            include 'pages/Proyectos/lotesComerciales.php';
        }
        break;

    case 'sobre-nosotros':
        include "pages/AboutUs/heroAboutUs.php";
        include "pages/AboutUs/historiaAboutUs.php";
        include "pages/AboutUs/logrosAboutUs.php";
        include "pages/AboutUs/trayectoriaAboutUs.php";
        break;

    default:
        include 'pages/404.php';
        break;
}

