document.addEventListener('DOMContentLoaded', () => {

    const track = document.querySelector('.projects-track');
    const cards = document.querySelectorAll('.project-card');
    const nextBtn = document.getElementById('nextProject');
    const prevBtn = document.getElementById('prevProject');

    if (!track || cards.length === 0) return;

    const visibleCards = 3;
    let currentIndex = 0;

    const cardWidth = cards[0].offsetWidth + 25;

    function updateSlider() {

        track.style.transform =
            `translateX(-${currentIndex * cardWidth}px)`;

    }

    nextBtn.addEventListener('click', () => {

        currentIndex += visibleCards;

        if (currentIndex >= cards.length) {

            currentIndex = 0;

        }

        updateSlider();

    });

    prevBtn.addEventListener('click', () => {

        currentIndex -= visibleCards;

        if (currentIndex < 0) {

            currentIndex = Math.max(0, cards.length - visibleCards);

        }

        updateSlider();

    });

});
const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(".nav-link");

window.addEventListener("scroll", () => {

    let current = "";

    sections.forEach(section => {

        const sectionTop = section.offsetTop - 120;
        const sectionHeight = section.clientHeight;

        if (scrollY >= sectionTop) {

            current = section.getAttribute("id");
        }
    });

    navLinks.forEach(link => {

        link.classList.remove("active");

        if (link.getAttribute("href") === "#" + current) {

            link.classList.add("active");
        }
    });
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