<header id="header" class="sticky top-0 z-50 bg-white border-b-4 border-[#0B6E3B]">
  <div class="container mx-auto px-4">
    <div class="flex items-center justify-between h-16">
      
      <!-- Logo -->
      <a href="/Asociacion-Encuentro/" class="flex items-center space-x-2">
        <img src="img/logos/logo-sin_asoc_civil.png" alt="Logo" class="h-14 w-18">
      </a>

      <!-- Desktop Navigation -->
      <nav class="hidden md:flex items-center space-x-8 font-medium">
        <a href="/Asociacion-Encuentro/" class="hover:transition-colors">Inicio</a>

        <div class="relative" id="dropdown">
          <button id="dropdownButton" class="flex items-center gap-1 transition-colors cursor-pointer">
            Proyectos <i class="fas fa-angle-down"></i>
          </button>
          <ul id="dropdownMenu" class="absolute left-0 bg-white rounded-lg shadow-lg w-56 py-2 hidden">
            <li><a href="/Asociacion-Encuentro/Los-Ceibos" class="block px-4 py-2 hover:bg-gray-100">Los Ceibos</a></li>
            <li><a href="/Asociacion-Encuentro/Cuenca-del-Sol" class="block px-4 py-2 hover:bg-gray-100">Cuenca del Sol</a></li>
            <li><a href="/Asociacion-Encuentro/Padre-Mugica" class="block px-4 py-2 hover:bg-gray-100">Padre Mugica</a></li>
            <li><a href="/Asociacion-Encuentro/Puerto-Sauce" class="block px-4 py-2 hover:bg-gray-100">Puerto Sauce</a></li>
          </ul>
        </div>

        <a href="/Asociacion-Encuentro/Lotes-comerciales" class="block px-4 py-2 hover:bg-gray-100">Lotes comerciales</a>
        <a href="/Asociacion-Encuentro/beneficios" class="transition-colors">Beneficios</a>
        <a href="/Asociacion-Encuentro/sobre-nosotros" class="transition-colors">Nosotros</a>
        <a href="/Asociacion-Encuentro/#noticias" class="transition-colors">Noticias</a>
        <a href="/Asociacion-Encuentro/#contacto" class="transition-colors">Contacto</a>
      </nav>

      <!-- Mobile Hamburger -->
      <button id="hamburger" class="md:hidden text-gray-700 text-2xl">
        <i class="fas fa-bars"></i>
      </button>

    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden fixed inset-0 bg-black/50 z-50">
    <div class="fixed top-0 right-0 w-12 h-full bg-white shadow-lg p-6 flex flex-col">
      <button id="close-menu" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800">
        <i class="fas fa-times text-2xl"></i>
      </button>
      <nav class="mt-8 space-y-4 font-medium">
        <a href="/Asociacion-Encuentro/" class="block hover:text-green-600">Inicio</a>
        
        <!-- Accordion for Proyectos -->
        <div>
          <button id="toggle-proyectos" class="flex justify-between items-center w-full hover:text-green-600">
            Proyectos <i class="fas fa-chevron-down"></i>
          </button>
          <ul id="submenu-proyectos" class="hidden pl-4 mt-2 space-y-2 text-sm">
            <li><a href="/Asociacion-Encuentro/Los-Ceibos" class="block hover:text-green-600">Los Ceibos</a></li>
            <li><a href="/Asociacion-Encuentro/Cuenca-del-Sol" class="block hover:text-green-600">Cuenca del Sol</a></li>
            <li><a href="/Asociacion-Encuentro/Padre-Mugica" class="block hover:text-green-600">Padre Mugica</a></li>
            <li><a href="/Asociacion-Encuentro/Puerto-Sauce" class="block hover:text-green-600">Puerto Sauce</a></li>
          </ul>
        </div>
        <a href="/Asociacion-Encuentro/Lotes-comerciales" class="block hover:text-green-600">Lotes comerciales</a>
        <a href="/Asociacion-Encuentro/beneficios" class="block hover:text-green-600">Beneficios</a>
        <a href="/Asociacion-Encuentro/sobre-nosotros" class="block hover:text-green-600">Nosotros</a>
        <a href="/Asociacion-Encuentro/#noticias" class="block hover:text-green-600">Noticias</a>
        <a href="/Asociacion-Encuentro/#contacto" class="block hover:text-green-600">Contacto</a>
      </nav>
    </div>
  </div>
</header>
