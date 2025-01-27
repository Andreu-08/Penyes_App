document.addEventListener('DOMContentLoaded', () => {
    // Obtener referencias a los elementos necesarios
    const modalOverlay = document.getElementById('modal-overlay');
    const modalLogin = document.getElementById('modal-login');
    const openLoginModal = document.getElementById('open-login-modal');
    const closeLoginModal = document.getElementById('close-login-modal');

    // Función para mostrar el modal
    const showModal = () => {
        modalOverlay.classList.remove('hidden');
        modalLogin.classList.remove('hidden');
        modalLogin.classList.add('flex'); // Asegura que se muestre como un contenedor flex
    };

    // Función para ocultar el modal
    const hideModal = () => {
        modalOverlay.classList.add('hidden');
        modalLogin.classList.add('hidden');
        modalLogin.classList.remove('flex'); // Oculta el contenedor flex
    };

    // Abrir el modal al hacer clic en el botón "Login"
    openLoginModal.addEventListener('click', (event) => {
        event.preventDefault(); // Evita el comportamiento predeterminado del enlace
        showModal();
    });

    // Cerrar el modal al hacer clic en el botón de cierre
    closeLoginModal.addEventListener('click', () => {
        hideModal();
    });

    // Cerrar el modal al hacer clic en el fondo semitransparente
    modalOverlay.addEventListener('click', () => {
        hideModal();
    });

    // Cerrar el modal con la tecla "Esc"
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !modalOverlay.classList.contains('hidden')) {
            hideModal();
        }
    });
});
