window.addEventListener('load', () => {
    const typewriter = document.getElementById('typewriter');
    const texts = ['JA ESTEM AÇÍ!!!!', 'JA HEM ARRIBAT!!!!'];
    let currentIndex = 0;

    // Añadimos un cursor parpadeante con CSS
    typewriter.style.borderRight = '0.15em solid #fff';
    typewriter.style.animation = 'blink-caret 0.75s step-end infinite';

    const sleep = (ms) => new Promise(resolve => setTimeout(resolve, ms));

    async function typingEffect() {
        while (true) {
            const text = texts[currentIndex];
            
            // Efecto de escritura
            for (let i = 0; i <= text.length; i++) {
                typewriter.textContent = text.substring(0, i);
                await sleep(Math.random() * 50 + 50); // Velocidad variable más natural
            }
            await sleep(2000); // Pausa al final del texto

            // Efecto de borrado
            for (let i = text.length; i >= 0; i--) {
                typewriter.textContent = text.substring(0, i);
                await sleep(30); // Borrado más rápido pero suave
            }
            await sleep(500); // Pequeña pausa antes del siguiente texto

            currentIndex = (currentIndex + 1) % texts.length;
        }
    }

    // Añadimos estilos para el cursor parpadeante
    const style = document.createElement('style');
    style.textContent = `
        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: #fff }
        }
    `;
    document.head.appendChild(style);

    typingEffect();
});