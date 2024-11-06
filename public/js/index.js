function mostrarModal() {
    document.getElementById('miModal').style.display = 'flex';
}

  // Función para cerrar la ventana modal
function cerrarModal() {
    document.getElementById('miModal').style.display = 'none';
}

  // Llamada a la función al cargar la página
window.onload = mostrarModal;

