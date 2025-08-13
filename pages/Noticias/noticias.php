<section class="container py-5">
  <!-- Encabezado -->
  <header class="mb-8 text-center">
    <span class="d-inline-block rounded-pill bg-success bg-opacity-10 px-3 py-1 text-success fw-medium">
      Noticias
    </span>
    <h1 class="mt-3 fw-bold display-6">Últimas novedades</h1>
    <p class="mx-auto mt-2 text-muted" style="max-width: 650px;">
      Mantenete al día con nuestras actividades, convocatorias y logros.
    </p>
  </header>

  <!-- Grid de noticias -->
  <div class="row g-4">
    <?php while($crow = mysqli_fetch_array($nquery)){ ?>       
      <div class="col-sm-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100 overflow-hidden">
          <!-- Imagen -->
          <a href="noticia.php?pid=<?php echo html_entity_decode($crow['id']); ?>">
            <img 
              src="../internoencuentro/vistas/modulos/privado/productimages/<?php echo html_entity_decode($crow['id']); ?>/<?php echo html_entity_decode($crow['productImage1']); ?>" 
              alt="<?php echo html_entity_decode($crow['tituloNoticia']); ?>" 
              class="card-img-top" 
              style="height: 220px; object-fit: cover;"
            >
          </a>

          <!-- Contenido -->
          <div class="card-body d-flex flex-column">
            <small class="text-muted mb-2">
              <i class="fa-solid fa-calendar-days"></i> <?php echo html_entity_decode($crow['fechaNoticia']); ?>
              <span class="mx-1">•</span>
              <?php echo html_entity_decode($crow['categoriaNoticia']); ?>
            </small>

            <h5 class="fw-bold mb-2">
              <a href="noticia.php?pid=<?php echo html_entity_decode($crow['id']); ?>" class="text-dark text-decoration-none">
                <?php echo html_entity_decode($crow['tituloNoticia']); ?>
              </a>
            </h5>

            <p class="text-muted flex-grow-1">
              <?php echo html_entity_decode($crow['copeteNoticia']); ?>
            </p>

            <!-- Botón leer más -->
            <a href="noticia.php?pid=<?php echo html_entity_decode($crow['id']); ?>" 
               class="mt-3 text-primary fw-medium text-decoration-none">
              Leer más →
            </a>
          </div>
        </div>
      </div>
    <?php } ?>  
  </div>

  <!-- Paginación -->
  <div class="mt-5 d-flex justify-content-center">
    <?php echo $paginationCtrls; ?>
  </div>
</section>
