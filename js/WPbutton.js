(function() {
  const btn = document.getElementById('whatsapp-button');
  const snackbar = document.getElementById('whatsapp-snackbar');

  // Detecta si es móvil (user agent + media query)
  const isMobileUA = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
  const isMobileScreen = window.matchMedia("(max-width: 640px)").matches; // sm Tailwind = 640px
  const isMobile = isMobileUA || isMobileScreen;

  // Número y mensaje fijo para toda la web
  const phone = "543534195508"; // sin signos ni espacios
  const message = "Hola Asociación Encuentro, quería consultar algo.";

  const whatsappUrl = isMobile
    ? `https://wa.me/${phone}?text=${encodeURIComponent(message)}`
    : `https://api.whatsapp.com/send?phone=${phone}&text=${encodeURIComponent(message)}`;

  const helpText = "Contactá con Asociación Encuentro por WhatsApp";

  btn.setAttribute('title', helpText);

  let clickedOnce = false;

  btn.addEventListener('click', () => {
    if (isMobile) {
      if (!clickedOnce) {
        snackbar.textContent = helpText;
        snackbar.classList.remove('hidden');
        clickedOnce = true;
        setTimeout(() => {
          snackbar.classList.add('hidden');
        }, 2500);
      } else {
        window.open(whatsappUrl, "_blank");
        clickedOnce = false;
      }
    } else {
      window.open(whatsappUrl, "_blank");
    }
  });
})();
