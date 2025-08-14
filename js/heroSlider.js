
document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".mySwiper", {
    loop: true, // Repetir infinito
    autoplay: {
      delay: 5000, // 5 segundos entre imágenes
      disableOnInteraction: false
    },
    effect: "fade", 
    fadeEffect: {
      crossFade: true
    }
  });
});
