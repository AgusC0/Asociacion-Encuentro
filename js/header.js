const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');
const closeMenu = document.getElementById('close-menu');
const toggleProyectos = document.getElementById('toggle-proyectos');
const submenuProyectos = document.getElementById('submenu-proyectos');

// Abrir menú móvil
hamburger.addEventListener('click', () => {
  mobileMenu.classList.remove('hidden');
  mobileMenu.classList.add('open');
});

// Cerrar menú móvil
closeMenu.addEventListener('click', () => {
  mobileMenu.classList.remove('open');
  setTimeout(() => mobileMenu.classList.add('hidden'), 300); // espera la transición
});

// Cerrar al tocar fuera del panel
mobileMenu.addEventListener('click', (e) => {
  if (e.target === mobileMenu) {
    mobileMenu.classList.remove('open');
    setTimeout(() => mobileMenu.classList.add('hidden'), 300);
  }
});

// Toggle submenu Proyectos
toggleProyectos.addEventListener('click', () => {
  submenuProyectos.classList.toggle('hidden');
});
