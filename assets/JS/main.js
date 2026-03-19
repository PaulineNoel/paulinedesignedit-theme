document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.testimonial-card');
    const prevBtn = document.querySelector('.testimonial-btn.prev');
    const nextBtn = document.querySelector('.testimonial-btn.next');

    if (!cards.length || !prevBtn || !nextBtn) {
        console.log('Testimonials slider: missing elements');
        return;
    }

    let currentIndex = 0;

    function updateCards() {
        cards.forEach((card) => {
            card.classList.remove('is-prev', 'is-active', 'is-next');
        });

        const prevIndex = (currentIndex - 1 + cards.length) % cards.length;
        const nextIndex = (currentIndex + 1) % cards.length;

        cards[prevIndex].classList.add('is-prev');
        cards[currentIndex].classList.add('is-active');
        cards[nextIndex].classList.add('is-next');
    }

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % cards.length;
        updateCards();
    });

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + cards.length) % cards.length;
        updateCards();
    });

    updateCards();
});