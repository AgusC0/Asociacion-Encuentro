// dropdown.js

function initDropdown(dropdownId) {
  const dropdown = document.getElementById(dropdownId);
  if (!dropdown) return;

  // Botón y menú
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
}

// Iniciar
document.addEventListener('DOMContentLoaded', () => {
  initDropdown('dropdown');
});
