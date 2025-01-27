document.addEventListener('DOMContentLoaded', () => {
    // Obtener referencias a los elementos necesarios
    const modalRegisterOverlay = document.getElementById('modal-register-overlay');
    const modalRegister = document.getElementById('modal-register');
    const openRegisterModal = document.getElementById('open-register-modal');
    const closeRegisterModal = document.getElementById('close-register-modal');

    // Función para mostrar el modal
    const showModal = () => {
        modalRegisterOverlay.classList.remove('hidden');
        modalRegister.classList.remove('hidden');
        modalRegister.classList.add('flex'); // Asegura que se muestre como un contenedor flex
    };

    // Función para ocultar el modal
    const hideModal = () => {
        modalRegisterOverlay.classList.add('hidden');
        modalRegister.classList.add('hidden');
        modalRegister.classList.remove('flex'); // Oculta el contenedor flex
    };

    // Abrir el modal al hacer clic en el botón "Register"
    openRegisterModal.addEventListener('click', (event) => {
        event.preventDefault(); // Evita el comportamiento predeterminado del enlace
        showModal();
    });

    // Cerrar el modal al hacer clic en el botón de cierre
    closeRegisterModal.addEventListener('click', () => {
        hideModal();
    });

    // Cerrar el modal al hacer clic en el fondo semitransparente
    modalRegisterOverlay.addEventListener('click', () => {
        hideModal();
    });

    // Cerrar el modal con la tecla "Esc"
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !modalRegisterOverlay.classList.contains('hidden')) {
            hideModal();
        }
    });

    // Añadir nuevo manejador para el enlace desde el login
    const openRegisterFromLogin = document.getElementById('open-register-from-login');
    if (openRegisterFromLogin) {
        openRegisterFromLogin.addEventListener('click', (event) => {
            event.preventDefault();
            // Primero cerrar el modal de login
            const modalLogin = document.getElementById('modal-login');
            const modalOverlay = document.getElementById('modal-overlay');
            modalLogin.classList.add('hidden');
            modalOverlay.classList.add('hidden');
            modalLogin.classList.remove('flex');
            
            // Luego abrir el modal de registro
            showModal();
        });
    }
});
