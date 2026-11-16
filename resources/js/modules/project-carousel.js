document.addEventListener('DOMContentLoaded', () => {
    const track = document.querySelector('.projects-track');
    const nextButton = document.getElementById('nextProject');
    const previousButton = document.getElementById('prevProject');

    if (!track || !nextButton || !previousButton || track.dataset.carouselInitialized) {
        return;
    }

    const originalCards = Array.from(track.querySelectorAll('.project-card'));
    const totalCards = originalCards.length;

    if (totalCards < 2) {
        return;
    }

    track.dataset.carouselInitialized = 'true';

    const cloneCards = () => originalCards.map(card => {
        const clone = card.cloneNode(true);
        clone.setAttribute('aria-hidden', 'true');
        return clone;
    });

    track.prepend(...cloneCards());
    track.append(...cloneCards());

    const carouselCards = Array.from(track.children);
    let currentIndex = totalCards;
    let isMoving = false;

    const updatePosition = () => {
        const activeCard = carouselCards[currentIndex];

        if (!activeCard) return;

        track.style.transform = `translateX(-${activeCard.offsetLeft}px)`;
    };

    const move = direction => {
        if (isMoving) return;

        isMoving = true;
        currentIndex += direction;
        updatePosition();
    };

    track.addEventListener('transitionend', event => {
        if (event.target !== track || event.propertyName !== 'transform') return;

        if (currentIndex >= totalCards * 2) {
            currentIndex = totalCards;
        } else if (currentIndex < totalCards) {
            currentIndex = totalCards * 2 - 1;
        } else {
            isMoving = false;
            return;
        }

        track.style.transition = 'none';
        updatePosition();
        void track.offsetHeight;
        track.style.transition = '';
        isMoving = false;
    });

    nextButton.addEventListener('click', () => move(1));
    previousButton.addEventListener('click', () => move(-1));

    window.addEventListener('resize', () => {
        if (currentIndex >= totalCards * 2) {
            currentIndex -= totalCards;
        } else if (currentIndex < totalCards) {
            currentIndex += totalCards;
        }

        track.style.transition = 'none';
        updatePosition();
        void track.offsetHeight;
        track.style.transition = '';
        isMoving = false;
    });

    track.style.transition = 'none';
    updatePosition();
    void track.offsetHeight;
    track.style.transition = '';
});
