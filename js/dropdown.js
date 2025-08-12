// dropdown.js

function initDropdown(dropdownId) {
  const dropdown = document.getElementById(dropdownId);
  if (!dropdown) return;

  // Dropdown desktop
  const button = dropdown.querySelector('#dropdownButton');
  const menu = dropdown.querySelector('#dropdownMenu');

  if (button && menu) {
    function openMenu() {
      menu.classList.remove('hidden');
      button.classList.add('active');
    }

    function closeMenu() {
      menu.classList.add('hidden');
      button.classList.remove('active');
    }

    button.addEventListener('click', (e) => {
      e.stopPropagation();
      if (menu.classList.contains('hidden')) {
        openMenu();
      } else {
        closeMenu();
      }
    });

    document.addEventListener('click', (e) => {
      if (!dropdown.contains(e.target)) {
        closeMenu();
      }
    });
  }

  // Mobile menu
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const closeMenuBtn = document.getElementById('close-menu');

  if (menuBtn && mobileMenu && closeMenuBtn) {
    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.remove('hidden');
      document.body.style.overflow = 'hidden'; // evitar scroll fondo
    });

    closeMenuBtn.addEventListener('click', () => {
      mobileMenu.classList.add('hidden');
      document.body.style.overflow = ''; // restaurar scroll
    });

    // Cerrar mobile menu al click fuera del panel
    mobileMenu.addEventListener('click', (e) => {
      if (e.target === mobileMenu) {
        mobileMenu.classList.add('hidden');
        document.body.style.overflow = '';
      }
    });
  }

  // Submenu Proyectos mobile (acordeón)
  const toggleProyectosBtn = document.getElementById('toggle-proyectos');
  const submenuProyectos = document.getElementById('submenu-proyectos');

  if (toggleProyectosBtn && submenuProyectos) {
    toggleProyectosBtn.addEventListener('click', () => {
      const isHidden = submenuProyectos.classList.contains('hidden');
      if (isHidden) {
        submenuProyectos.classList.remove('hidden');
        toggleProyectosBtn.querySelector('i').classList.remove('fa-chevron-down');
        toggleProyectosBtn.querySelector('i').classList.add('fa-chevron-up');
      } else {
        submenuProyectos.classList.add('hidden');
        toggleProyectosBtn.querySelector('i').classList.remove('fa-chevron-up');
        toggleProyectosBtn.querySelector('i').classList.add('fa-chevron-down');
      }
    });
  }
}

// Para iniciar desde el HTML:
document.addEventListener('DOMContentLoaded', () => {
  initDropdown('dropdown');
});
