<section id="contacto" class="py-20 bg-gray-50">
  <div class="container mx-auto px-4 max-w-7xl">
    <!-- Título -->
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Contacto</h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">
        ¡Dejanos tu mensaje o consultanos cualquier duda!
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
      <!-- Mapa embebido -->
      <div class="rounded-lg overflow-hidden shadow-lg lg:h-[400px]">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13472.916800425359!2d-63.2038877!3d-32.4130181!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe9f7d1499f29c855!2sAsociaci%C3%B3n%20Civil%20%22Encuentro%20Comunitario%22!5e0!3m2!1ses-419!2sar!4v1659233518034!5m2!1ses-419!2sar"
          class="w-full h-full border-0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Mapa Ubicación Encuentro Comunitario"
        ></iframe>
      </div>

      <!-- Formulario + Datos -->
      <div class="lg:col-span-2 space-y-8">
        <!-- Formulario -->
        <form method="post" action="mensaje-enviado.php" class="bg-white p-8 rounded-lg shadow-lg space-y-6">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre y Apellido *</label>
              <input
                type="text"
                id="nombre"
                name="nombre"
                required
                placeholder="Tu nombre completo"
                class="w-full rounded-md border border-gray-300 px-4 py-2 shadow-sm focus:border-green-600 focus:ring focus:ring-green-300"
              />
            </div>
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
              <input
                type="email"
                id="email"
                name="email"
                required
                placeholder="tu@email.com"
                class="w-full rounded-md border border-gray-300 px-4 py-2 shadow-sm focus:border-green-600 focus:ring focus:ring-green-300"
              />
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label for="telefono" class="block text-sm font-medium text-gray-700 mb-1">Teléfono *</label>
              <input
                type="tel"
                id="telefono"
                name="telefono"
                required
                placeholder="+54 9 353 123 4567"
                class="w-full rounded-md border border-gray-300 px-4 py-2 shadow-sm focus:border-green-600 focus:ring focus:ring-green-300"
              />
            </div>
            <div>
              <label for="interes" class="block text-sm font-medium text-gray-700 mb-1">Interés</label>
              <select
                id="interes"
                name="interes"
                class="w-full rounded-md border border-gray-300 px-4 py-2 shadow-sm focus:border-green-600 focus:ring focus:ring-green-300"
              >
                <option value="" disabled selected>Seleccionar</option>
                <option value="lote">Comprar lote</option>
                <option value="info">Información general</option>
                <option value="visita">Agendar visita</option>
                <option value="financiacion">Financiación</option>
              </select>
            </div>
          </div>

          <div>
            <label for="mensaje" class="block text-sm font-medium text-gray-700 mb-1">Mensaje *</label>
            <textarea
              id="mensaje"
              name="mensaje"
              rows="4"
              maxlength="3000"
              required
              placeholder="Escribí aquí tu mensaje..."
              class="w-full rounded-md border border-gray-300 px-4 py-2 shadow-sm focus:border-green-600 focus:ring focus:ring-green-300"
            ></textarea>
          </div>

          <button
            type="submit"
            class="w-full py-3 bg-green-600 text-white font-semibold rounded-md hover:bg-green-700 transition"
          >
            Enviar Consulta
          </button>
        </form>

        <!-- Contenedor Flex para Información y Horarios lado a lado -->
        <div class="flex gap-8">
          <!-- Información de Contacto -->
          <div class="bg-white rounded-lg shadow-lg p-6 flex-1 space-y-6 ">
            <h3 class="text-2xl font-bold text-gray-900">Información de Contacto</h3>

            <div class="flex items-center space-x-3"> 
              <!-- Icono Ubicación -->
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12.414a2 2 0 00-2.828 0l-4.243 4.243"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a4 4 0 11-8 0 4 4 0 018 0z"/>
              </svg>
              <div>
                <p class="font-semibold">Ubicación</p>
                <p class="text-gray-600">Bv. Argentino 1571, Villa María</p>
              </div>
            </div>

            <div class="flex items-center space-x-3">
              <!-- Icono Asesoramiento (Teléfono) -->
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h1l2-3h8l2 3h1v7a2 2 0 01-2 2H5a2 2 0 01-2-2v-7z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M7 10v4M17 10v4M7 14h10" />
              </svg>
              <div>
                <p class="font-semibold">Asesoramiento</p>
                <p class="text-gray-600">+54 9 353 419-5508</p>
              </div>
            </div>

            <div class="flex items-center space-x-3">
              <!-- Icono Email -->
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 12l-4-4m0 0l-4 4m4-4v12" />
              </svg>
              <div>
                <p class="font-semibold">Email</p>
                <p class="text-gray-600">encuentrocomunitarioedpn@gmail.com</p>
              </div>
            </div>

            <div class="text-center mt-6">
              <a href="https://maps.app.goo.gl/deqp62poi44kKMYB6" target="_blank" class="inline-block bg-green-600 text-white py-3 px-6 rounded-md hover:bg-green-700 transition">
                Cómo llegar
              </a>
            </div>
          </div>

          <!-- Horarios de Atención -->
          <div class="bg-white rounded-lg shadow-lg p-6 flex-1 space-y-4">
            <h3 class="text-2xl font-bold text-gray-900">Horarios de Atención</h3>

            <div class="flex items-center space-x-3">
              <!-- Icono reloj -->
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2"/>
              </svg>
              <div>
                <p class="font-semibold">Lunes a Viernes</p>
                <p class="text-gray-600">9:00 - 18:00 hs</p>
              </div>
            </div>

            <div class="flex items-center space-x-3">
              <!-- Icono reloj -->
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2"/>
              </svg>
              <div>
                <p class="font-semibold">Sábados</p>
                <p class="text-gray-600">9:00 - 13:00 hs</p>
              </div>
            </div>
            <!-- Botón WhatsApp separado abajo -->
            <div class="p-2 mt-8">
            <a href="#" id="whatsapp-button" target="_blank" class="flex items-center justify-center space-x-2 w-full py-3 bg-green-600 text-white font-semibold rounded-md hover:bg-green-700 transition">
                <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                <span>Contactar por WhatsApp</span>
            </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
