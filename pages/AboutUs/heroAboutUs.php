<section class="relative min-h-[91vh] flex items-center">
  <!-- Background -->
  <div class="absolute inset-0 z-0">
    <img
      src="img/nosotros/asociacion-encuentro-comunitario-loteo-padre-mugica-slider-homepage.jpg"
      alt="Equipo "
      class="object-cover w-full h-full"
      style="position: absolute; inset: 0;"
    />
    <div class="absolute inset-0 bg-gradient-to-r from-black/20 to-black/10"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 container mx-auto px-4">
    <div class="max-w-4xl">
      <div class="flex items-center space-x-3 mb-6">
        <div>
          <h1 class="text-3xl md:text-5xl font-bold text-white">Sobre Asociacion Encuentro</h1>
          <p class="text-white/80 text-lg">Construyendo el futuro de Villa María</p>
        </div>
      </div>

      <p class="text-xl md:text-2xl text-white/90 mb-8 leading-relaxed max-w-3xl">
        Somos una empresa comprometida con el desarrollo urbano sostenible, creando espacios que transforman
        comunidades y mejoran la calidad de vida de las familias.
      </p>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        <div class="flex items-center space-x-3 text-white">
          <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
            <!-- Aquí puedes poner un SVG inline o usar un ícono con una librería si quieres -->
            <!-- Ejemplo: icono edificio (simplificado) -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M3 21v-2a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4v2" />
              <path d="M7 21V9a4 4 0 0 1 4-4h2a4 4 0 0 1 4 4v12" />
            </svg>
          </div>
          <div>
            <p class="font-bold text-lg">10+ Años</p>
            <p class="text-white/80">de experiencia</p>
          </div>
        </div>
        <div class="flex items-center space-x-3 text-white">
          <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
            <!-- Icono usuarios simplificado -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="9" cy="7" r="4" />
              <path d="M17 11v6a4 4 0 0 1-8 0v-6" />
            </svg>
          </div>
          <div>
            <p class="font-bold text-lg">500+ Familias</p>
            <p class="text-white/80">confiaron en nosotros</p>
          </div>
        </div>
        <div class="flex items-center space-x-3 text-white">
          <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
            <!-- Icono premio simplificado -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" />
              <path d="M8 14s1.5 2 4 2 4-2 4-2" />
            </svg>
          </div>
          <div>
            <p class="font-bold text-lg">Calidad</p>
            <p class="text-white/80">certificada</p>
          </div>
        </div>
      </div>

      <button
        onclick="document.getElementById('historia').scrollIntoView({ behavior: 'smooth' })"
        class="bg-green-600 hover:bg-green-700 text-white text-lg px-8 py-4 rounded-lg flex items-center"
      >
        Conoce nuestra historia
        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M19 9l-7 7-7-7" />
        </svg>
      </button>
    </div>
  </div>
</section>
