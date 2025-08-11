<?php
// Conectar a la base de datos
$conexion = new mysqli("localhost", "u545591534_noticiasasc", "C7n1*LR>h", "u545591534_noticiasasc");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
 
// Obtener datos del formulario
$nombreComercio = $_POST['nombreComercio'];
$rubroComercio = $_POST['rubroComercio'];
$descuentoComercio = $_POST['descuentoComercio'];
$direccionComercio = $_POST['direccionComercio'];
$textoComercio = $_POST['textoComercio'];

// Subir imagen del comercio
$directorio = 'imagenes_comercios/';
if (!is_dir($directorio)) {
    mkdir($directorio, 0755, true); // Crear carpeta si no existe
}

$nombreImagen = $_FILES['imagenComercio']['name'];
$archivoImagen = $directorio . basename($nombreImagen);
$tipoArchivo = strtolower(pathinfo($archivoImagen, PATHINFO_EXTENSION));

// Verificar que el archivo es una imagen
if (getimagesize($_FILES['imagenComercio']['tmp_name']) === false) {
    die("El archivo no es una imagen.");
}

// Mover la imagen subida al directorio
if (move_uploaded_file($_FILES['imagenComercio']['tmp_name'], $archivoImagen)) {
    echo "La imagen se ha subido correctamente.";
} else {
    die("Error al subir la imagen.");
}

// Insertar datos en la base de datos
$query = "INSERT INTO comercios (nombreComercio, rubroComercio, descuentoComercio, direccionComercio, textoComercio, imagenComercio)
          VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($query);
$stmt->bind_param("ssisss", $nombreComercio, $rubroComercio, $descuentoComercio, $direccionComercio, $textoComercio, $nombreImagen);

if ($stmt->execute()) {
    $idComercio = $stmt->insert_id; // Obtener el ID del comercio insertado
    // Crear una carpeta con el ID del comercio
    $carpetaComercio = $directorio . $idComercio;
    if (!is_dir($carpetaComercio)) {
        mkdir($carpetaComercio, 0755, true);
    }
    // Mover la imagen a la carpeta del comercio
    rename($archivoImagen, $carpetaComercio . '/' . $nombreImagen);
    
    echo "Comercio guardado correctamente con ID: $idComercio";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar conexión
$stmt->close();
$conexion->close();
?>
