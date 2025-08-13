<header id="header" class="sticky top-0 z-50 backdrop-blur transition-colors duration-300 bg-green-600">
  <div class="container mx-auto px-4">
    <div class="flex items-center justify-between h-16">
      
      <!-- Logo -->
      <a href="/Asociacion-Encuentro/" class="flex items-center space-x-2">
        <img src="img/logo.png" alt="Logo" class="h-10 w-auto">
      </a>

      <!-- Desktop Navigation -->
      <nav class="hidden md:flex items-center space-x-8 font-medium">
        <a href="/Asociacion-Encuentro/" class="hover: transition-colors">Inicio</a>
        
        <!-- Dropdown -->
        <div class="relative group" id="dropdown">
          <button id="dropdownButton" class="flex items-center gap-1 transition-colors cursor-pointer">
            Proyectos <i class="fas fa-angle-down"></i>
          </button>
          <ul id="dropdownMenu" class="absolute left-0 mt-2 bg-white rounded-lg shadow-lg w-56 py-2 hidden group-hover:block">
            <li><a href="/Asociacion-Encuentro/Lotes-comerciales" class="block px-4 py-2 hover:bg-gray-100">Lotes comerciales</a></li>
            <li><a href="/Asociacion-Encuentro/Los-Ceibos" class="block px-4 py-2 hover:bg-gray-100">Los Ceibos</a></li>
            <li><a href="/Asociacion-Encuentro/Cuenca-del-Sol" class="block px-4 py-2 hover:bg-gray-100">Cuenca del Sol</a></li>
            <li><a href="/Asociacion-Encuentro/Padre-Mugica" class="block px-4 py-2 hover:bg-gray-100">Padre Mugica</a></li>
            <li><a href="/Asociacion-Encuentro/Puerto-Sauce" class="block px-4 py-2 hover:bg-gray-100">Puerto Sauce</a></li>
          </ul>
        </div>


        <a href="/Asociacion-Encuentro/programa-de-beneficios" class="transition-colors">Programa de Beneficios</a>
        <a href="/Asociacion-Encuentro/sobre-nosotros" class="transition-colors">Sobre Nosotros</a>
        <a href="/Asociacion-Encuentro/#noticias" class="transition-colors">Noticias</a>
        <a href="/Asociacion-Encuentro/#contacto" class="transition-colors">Contacto</a>
      </nav>


    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden fixed inset-0 bg-black/50 z-50">
      <div class="fixed top-0 right-0 w-64 h-full bg-white shadow-lg p-6 flex flex-col">
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
              <li><a href="/Asociacion-Encuentro/proyectos/los-ceibos" class="block hover:text-green-600">Los Ceibos</a></li>
              <li><a href="/Asociacion-Encuentro/proyectos/cuenca-del-sol" class="block hover:text-green-600">Cuenca del Sol</a></li>
              <li><a href="/Asociacion-Encuentro/proyectos/padre-mugica" class="block hover:text-green-600">Padre Mugica</a></li>
              <li><a href="/Asociacion-Encuentro/proyectos/puerto-sauce" class="block hover:text-green-600">Puerto Sauce</a></li>
              <li><a href="/Asociacion-Encuentro/proyectos/lotes-comerciales" class="block hover:text-green-600">Lotes comerciales</a></li>
            </ul>
          </div>

          <a href="/Asociacion-Encuentro/programa-de-beneficios" class="block hover:text-green-600">Programa de Beneficios</a>
          <a href="/Asociacion-Encuentro/sobre-nosotros" class="block hover:text-green-600">Sobre Nosotros</a>
          <a href="/Asociacion-Encuentro/#noticias" class="block hover:text-green-600">Noticias</a>
          <a href="/Asociacion-Encuentro/#contacto" class="block hover:text-green-600">Contacto</a>
        </nav>
      </div>
    </div>

</header>
