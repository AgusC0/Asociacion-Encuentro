// contador.js
document.addEventListener("DOMContentLoaded", () => {
  const statsContainer = document.getElementById("statsContainer");

  // Datos de las estadísticas
  const stats = [
    { label: "Lotes Totales", value: 250 },
    { label: "Lotes Vendidos", value: 1000 }, // Aquí el que sube hasta 1000
    { label: "Clientes Felices", value: 180 },
    { label: "Proyectos Completados", value: 75 }
  ];

  // Crear los elementos de estadísticas
  stats.forEach(stat => {
    const statBox = document.createElement("div");
    statBox.className = "bg-white rounded-lg shadow-md p-6 text-center";

    statBox.innerHTML = `
      <div class="text-3xl md:text-4xl font-bold text-green-600 mb-2 counter" data-target="${stat.value}">0</div>
      <p class="text-gray-600">${stat.label}</p>
    `;

    statsContainer.appendChild(statBox);
  });

  // Animación de los contadores
  const counters = document.querySelectorAll(".counter");
  counters.forEach(counter => {
    let end = parseInt(counter.dataset.target, 10);
    let duration = 6000; // milisegundos
    let startTime = null;

    function animateCounter(timestamp) {
      if (!startTime) startTime = timestamp;
      let progress = timestamp - startTime;
      let current = Math.min(Math.floor((progress / duration) * end), end);
      counter.textContent = current.toLocaleString("es-AR");
      if (current < end) {
        requestAnimationFrame(animateCounter);
      }
    }

    requestAnimationFrame(animateCounter);
  });
});
