async function cargarBeneficios() {
  try {
    const res = await fetch('api/beneficios.php'); // Cambia esta URL a la de tu backend real
    if (!res.ok) throw new Error('Error al cargar beneficios');
    const beneficios = await res.json();

    const container = document.getElementById('beneficiosContainer');
    container.innerHTML = ''; // limpio el contenido previo

    beneficios.forEach(b => {
      const div = document.createElement('div');
      div.className = 'bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow p-8 flex flex-col items-center text-center';
      div.innerHTML = `
        <div class="w-12 h-12 bg-gradient-to-br from-green-600 to-blue-600 rounded-lg flex items-center justify-center mb-4 text-2xl">
          ${b.icono}
        </div>
        <h3 class="text-lg font-semibold text-gray-900 mb-2">${b.titulo}</h3>
        <p class="text-gray-600 text-sm">${b.descripcion}</p>
      `;
      container.appendChild(div);
    });
  } catch (error) {
    console.error(error);
  }
}

cargarBeneficios();
