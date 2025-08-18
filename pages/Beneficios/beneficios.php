<?php
include('include/config.php');
include('../pagination.php'); 
?>

<!-- Contenido de la sección -->
<div id="parallax-comercio">
      <h1 data-aos="fade-up" data-aos-duration="1000"><strong>PROGRAMA DE BENEFICIOS</strong></h1>
</div> 

<div class="container mt-5">
<p class="beneficios-texto">
    Desde Encuentro Comunitario generamos acuerdos con comercios locales para brindarle beneficios y promociones. 
    Estos son los convenios vigentes durante el mes corriente. Para poder utilizarlos, debe presentar ante el comercio 
    el último comprobante de pago emitido por la Asociación.
</p>
</div>

<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "u545591534_noticiasasc", "C7n1*LR>h", "u545591534_noticiasasc");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
$conexion->set_charset("utf8mb4");

// Obtener los datos de los comercios
$query = "SELECT nombreComercio, descuentoComercio, id, imagenComercio, textoComercio, direccionComercio FROM comercios";
$resultado = $conexion->query($query);
?>

<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php
        if ($resultado->num_rows > 0) {
            while ($comercio = $resultado->fetch_assoc()) {
        ?>
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="imagenes_comercios/<?php echo $comercio['id']; ?>/<?php echo htmlspecialchars($comercio['imagenComercio'], ENT_QUOTES, 'UTF-8'); ?>" class="card-img-top" alt="Logo del comercio" data-bs-toggle="modal" data-bs-target="#comercioModal" data-nombre="<?php echo htmlspecialchars($comercio['nombreComercio'], ENT_QUOTES, 'UTF-8'); ?>" data-descuento="<?php echo htmlspecialchars($comercio['descuentoComercio'], ENT_QUOTES, 'UTF-8'); ?>" data-texto="<?php echo nl2br(htmlspecialchars($comercio['textoComercio'], ENT_QUOTES, 'UTF-8')); ?>" data-direccion="<?php echo htmlspecialchars($comercio['direccionComercio'], ENT_QUOTES, 'UTF-8'); ?>" data-imagen="imagenes_comercios/<?php echo $comercio['id']; ?>/<?php echo htmlspecialchars($comercio['imagenComercio'], ENT_QUOTES, 'UTF-8'); ?>">

                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo htmlspecialchars($comercio['nombreComercio'], ENT_QUOTES, 'UTF-8'); ?></h5>
                            <p class="card-discount"><?php echo htmlspecialchars($comercio['descuentoComercio'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <button class="btn-comercio" data-bs-toggle="modal" data-bs-target="#comercioModal" data-nombre="<?php echo htmlspecialchars($comercio['nombreComercio'], ENT_QUOTES, 'UTF-8'); ?>" data-descuento="<?php echo htmlspecialchars($comercio['descuentoComercio'], ENT_QUOTES, 'UTF-8'); ?>" data-texto="<?php echo nl2br(htmlspecialchars($comercio['textoComercio'], ENT_QUOTES, 'UTF-8')); ?>" data-direccion="<?php echo htmlspecialchars($comercio['direccionComercio'], ENT_QUOTES, 'UTF-8'); ?>" data-imagen="imagenes_comercios/<?php echo $comercio['id']; ?>/<?php echo htmlspecialchars($comercio['imagenComercio'], ENT_QUOTES, 'UTF-8'); ?>">Ver más</button>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>No hay comercios disponibles.</p>";
        }
        ?>
    </div>
</div>

<!-- Modal comercio -->
<div class="modal fade" id="comercioModal" tabindex="-1" aria-labelledby="comercioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="comercioModalNombre"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img id="comercioModalImagen" src="" alt="Logo del comercio" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <p><strong>Descuento:</strong> <span id="comercioModalDescuento"></span></p>
                        <p><strong>Dirección:</strong> <span id="comercioModalDireccion"></span></p>
                        <p><span id="comercioModalTexto"></span></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>