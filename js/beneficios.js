// Inicializar AOS
AOS.init();

// Configurar modal para mostrar detalles del comercio
var comercioModal = document.getElementById('comercioModal');
comercioModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var nombre = button.getAttribute('data-nombre');
    var descuento = button.getAttribute('data-descuento');
    var texto = button.getAttribute('data-texto');
    var direccion = button.getAttribute('data-direccion');
    var imagen = button.getAttribute('data-imagen');

    document.getElementById('comercioModalNombre').textContent = nombre;
    document.getElementById('comercioModalDescuento').textContent = descuento;
    document.getElementById('comercioModalTexto').innerHTML = texto;
    document.getElementById('comercioModalDireccion').textContent = direccion;
    document.getElementById('comercioModalImagen').src = imagen;
});
