// Elementos
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');
const closeMenu = document.getElementById('close-menu');
const toggleProyectos = document.getElementById('toggle-proyectos');
const submenuProyectos = document.getElementById('submenu-proyectos');

// Abrir menú móvil
hamburger.addEventListener('click', () => {
  mobileMenu.classList.remove('hidden');
  document.body.style.overflow = 'hidden'; // bloquea scroll
});

// Cerrar menú móvil
closeMenu.addEventListener('click', () => {
  mobileMenu.classList.add('hidden');
  document.body.style.overflow = 'auto'; // restaura scroll
});

// Cerrar al hacer click fuera del panel
mobileMenu.addEventListener('click', (e) => {
  if (e.target === mobileMenu) {
    mobileMenu.classList.add('hidden');
    document.body.style.overflow = 'auto'; // restaura scroll
  }
});



