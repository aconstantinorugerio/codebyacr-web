// =======================================
// CARRUSEL INFINITO DE PROYECTOS
// =======================================

document.addEventListener('DOMContentLoaded', () => {

    const track = document.querySelector('.projects-track');
    const nextBtn = document.getElementById('nextProject');
    const prevBtn = document.getElementById('prevProject');

    if (!track || !nextBtn || !prevBtn || track.dataset.carouselInitialized) return;

    const originalCards = Array.from(track.querySelectorAll('.project-card'));
    const totalCards = originalCards.length;

    if (totalCards < 2) return;

    track.dataset.carouselInitialized = 'true';

    const cloneCard = card => {
        const clone = card.cloneNode(true);
        clone.setAttribute('aria-hidden', 'true');
        return clone;
    };

    // Clonar todas las tarjetas al inicio
    const beforeClones = document.createDocumentFragment();

    originalCards.forEach(card => {
        beforeClones.appendChild(cloneCard(card));
    });

    track.prepend(beforeClones);

    // Clonar todas las tarjetas al final
    const afterClones = document.createDocumentFragment();

    originalCards.forEach(card => {
        afterClones.appendChild(cloneCard(card));
    });

    track.appendChild(afterClones);

    const carouselCards = Array.from(track.children);
    // Comenzar en la primera tarjeta original
    let currentIndex = totalCards;
    let isMoving = false;

    function updateSlider() {

        const activeCard = carouselCards[currentIndex];

        if (!activeCard) return;

        track.style.transform =
            `translateX(-${activeCard.offsetLeft}px)`;
    }

    function moveNext() {

        if (isMoving) return;

        isMoving = true;
        currentIndex++;

        updateSlider();
    }

    function movePrev() {

        if (isMoving) return;

        isMoving = true;
        currentIndex--;

        updateSlider();
    }

    // Detectar el final de cada transición
    track.addEventListener('transitionend', (event) => {

        if (event.target !== track || event.propertyName !== 'transform') return;

        // Si llegamos a los clones del final, volver al original
        if (currentIndex >= totalCards * 2) {

            currentIndex = totalCards;

            track.style.transition = 'none';
            updateSlider();

            void track.offsetHeight;

            track.style.transition = '';
        }

        // Si llegamos a los clones del inicio, volver al original
        else if (currentIndex < totalCards) {

            currentIndex = totalCards * 2 - 1;

            track.style.transition = 'none';
            updateSlider();

            void track.offsetHeight;

            track.style.transition = '';
        }

        isMoving = false;
    });

    nextBtn.addEventListener('click', moveNext);
    prevBtn.addEventListener('click', movePrev);

    // Recalcular la posición cuando cambia el tamaño de pantalla
    window.addEventListener('resize', () => {

        if (currentIndex >= totalCards * 2) {
            currentIndex -= totalCards;
        } else if (currentIndex < totalCards) {
            currentIndex += totalCards;
        }

        track.style.transition = 'none';
        updateSlider();

        void track.offsetHeight;

        track.style.transition = '';
        isMoving = false;
    });

    // Posicionar inicialmente el carrusel
    track.style.transition = 'none';
    updateSlider();

    void track.offsetHeight;

    track.style.transition = '';

});


// Envio de correo 
// =======================================
// FORMULARIO DE CONTACTO AJAX
// =======================================

document.addEventListener('DOMContentLoaded', () => {

    console.log('JS cargado');

    const form = document.getElementById('contactForm');

    if (!form) {
        console.log('Formulario NO encontrado');
        return;
    }

    console.log('Formulario encontrado');

    form.addEventListener('submit', function (e) {

        e.preventDefault();

        console.log('Submit ejecutado');

        const formData = new FormData(form);

       fetch(form.action, {

    method: 'POST',

    headers: {
        'X-CSRF-TOKEN': document.querySelector(
            'meta[name="csrf-token"]'
        ).content,

        'Accept': 'application/json'
    },

    body: formData

})

.then(response => response.json())

.then(data => {

    console.log(data);

    document.getElementById('mensajeRespuesta').innerHTML = `
        <div class="alert alert-success">
            <i class="fa-solid fa-circle-check me-2"></i>
            ${data.message}
        </div>
    `;

    form.reset();

})

.catch(error => {

    console.error(error);

    document.getElementById('mensajeRespuesta').innerHTML = `
        <div class="alert alert-danger">
            Ocurrió un error al enviar el formulario.
        </div>
    `;

});

    });

});
