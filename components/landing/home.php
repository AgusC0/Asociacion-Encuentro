<section id="inicio" class="relative min-h-screen flex items-center">
  <!-- Background Slider -->
  <div class="swiper mySwiper absolute inset-0 z-0">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="img/slide/1.jpg" alt="aaa" class="object-cover w-full h-full" loading="eager" style="position:absolute; inset:0; width:100%; height:100%;" />
      </div>
      <div class="swiper-slide">
        <img src="img/slide/CAR_6240.jpg" alt="Imagen 2" class="object-cover w-full h-full" style="position:absolute; inset:0; width:100%; height:100%;" />
      </div>
      <div class="swiper-slide">
        <img src="img/slide/3.jpg" alt="Imagen 3" class="object-cover w-full h-full" style="position:absolute; inset:0; width:100%; height:100%;" />
      </div>
      <div class="swiper-slide">
        <img src="img/slide/_NAT6780.jpg" alt="Imagen 4" class="object-cover w-full h-full" style="position:absolute; inset:0; width:100%; height:100%;" />
      </div>
      <div class="swiper-slide">
        <img src="img/slide/2.jpg" alt="Imagen 5" class="object-cover w-full h-full" style="position:absolute; inset:0; width:100%; height:100%;" />
      </div>
    </div>

    <!-- Paginación y Navegación -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Overlay -->
  <div class="absolute inset-0 "></div>

  <!-- Content -->
  <div class="relative z-10 container mx-auto px-16">
    <div class="max-w-3xl">
      <div class="flex items-center space-x-2 mb-6">
        <span class="text-white text-2xl font-bold">Asociacion Encuentro</span>
      </div>

      <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight text-left">
        Tu nuevo hogar te está esperando
      </h1>

      <p class="text-xl text-white/90 mb-8 leading-relaxed">
        Descubre lotes exclusivos en el desarrollo inmobiliario más moderno de Villa María. Servicios subterráneos,
        financiación disponible y áreas de esparcimiento únicas.
      </p>

      <div class="flex flex-col sm:flex-row gap-4 mb-12">
        <a href="/Asociacion-Encuentro/Lotes-comerciales" 
          class="bg-green-600 hover:bg-green-700 text-white text-lg px-8 py-4 rounded inline-flex items-center">
          Explorar Lotes
          <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
        </a>

        <a href="#contacto"
          class="border border-white text-white hover:bg-white hover:text-gray-900 text-lg px-8 py-4 rounded bg-transparent"
        >
          Ver Ubicación
        </a>
      </div>
    </div>
  </div>
</section>