<section id="inicio" class="relative min-h-screen flex items-center">
  <!-- Background Image -->
  <div class="absolute inset-0 z-0">
    <img
      src="images/hero-desktop.jpg"
      alt="aaa"
      class="object-cover w-full h-full"
      loading="eager"
      style="position:absolute; inset:0; width:100%; height:100%;"
    />
    <div class="absolute inset-0 bg-black/40"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 container mx-auto px-4">
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

      <!-- Features -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="flex items-center space-x-3 text-white">
          <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.38 0 2.5-1.12 2.5-2.5S13.38 6 12 6s-2.5 1.12-2.5 2.5 1.12 2.5 2.5 2.5z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 21s8-4.5 8-10a8 8 0 10-16 0c0 5.5 8 10 8 10z"/>
            </svg>
          </div>
          <div>
            <p class="font-semibold">Ubicación Premium</p>
            <p class="text-sm text-white/80">Villa María, Córdoba</p>
          </div>
        </div>

        <div class="flex items-center space-x-3 text-white">
          <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M13 13h7v7a2 2 0 01-2 2h-3v-7H7" />
            </svg>
          </div>
          <div>
            <p class="font-semibold">Servicios Completos</p>
            <p class="text-sm text-white/80">Subterráneos incluidos</p>
          </div>
        </div>

        <div class="flex items-center space-x-3 text-white">
          <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18" />
            </svg>
          </div>
          <div>
            <p class="font-semibold">Espacios Verdes</p>
            <p class="text-sm text-white/80">Áreas de recreación</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
