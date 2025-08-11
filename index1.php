<?php
include 'include/config.php'; // O ruta correcta

// Incluimos el header
include 'includes/header.php';

// Detectar qué página se pidió (por URL), por defecto "home"
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if ($page === 'home') {
    $file = "components/landing/home.php";
} else {
    $file = "pages/{$page}.php";
}

// Incluir contenido
if (file_exists($file)) {
    include $file;
} else {
    echo "<h2>Página no encontrada</h2>";
}

// Incluir footer
include 'includes/footer.php';
?>
