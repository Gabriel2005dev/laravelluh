document.addEventListener('DOMContentLoaded', () => {

    // =========================
    // ELEMENTOS
    // =========================

    const gallery = document.getElementById('gallery-scroll');
    const next = document.getElementById('gallery-next');
    const prev = document.getElementById('gallery-prev');
    const fadeRight = document.getElementById('fade-right');

    const buttons = document.querySelectorAll('.gallery-open');
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const closeButton = document.getElementById('lightbox-close');

    const scrollAmount = 380;

    // Se a galeria não existir na página, não executa nada.
    if (!gallery) {
        return;
    }

    // =========================
    // FADE DA GALLERY
    // =========================

    function updateFade() {

        if (!fadeRight) {
            return;
        }

        const maxScroll = gallery.scrollWidth - gallery.clientWidth;
        const position = gallery.scrollLeft;

        if (position < maxScroll - 10) {
            fadeRight.classList.remove('opacity-0');
            fadeRight.classList.add('opacity-100');
        } else {
            fadeRight.classList.remove('opacity-100');
            fadeRight.classList.add('opacity-0');
        }

    }

    // =========================
    // SCROLL DA GALLERY
    // =========================

    function scrollGallery(distance) {

        gallery.scrollBy({
            left: distance,
            behavior: 'smooth'
        });

    }

    if (next) {
        next.addEventListener('click', () => scrollGallery(scrollAmount));
    }

    if (prev) {
        prev.addEventListener('click', () => scrollGallery(-scrollAmount));
    }

    gallery.addEventListener('scroll', updateFade);
    window.addEventListener('resize', updateFade);

    updateFade();

    // =========================
    // LIGHTBOX
    // =========================

    if (!lightbox || !lightboxImage || !closeButton) {
        return;
    }

    function openLightbox(image) {

        lightboxImage.src = image.src;
        lightboxImage.alt = image.alt;

        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');

        document.body.classList.add('overflow-hidden');

    }

    function closeLightbox() {

        lightbox.classList.add('hidden');
        lightbox.classList.remove('flex');

        document.body.classList.remove('overflow-hidden');

    }

    // =========================
    // ABRIR LIGHTBOX
    // =========================

    buttons.forEach(button => {

        button.addEventListener('click', () => {

            const galleryItem = button.closest('.gallery-item');

            if (!galleryItem) {
                return;
            }

            const image = galleryItem.querySelector('.gallery-image');

            if (!image) {
                return;
            }

            openLightbox(image);

        });

    });

    // =========================
    // FECHAR LIGHTBOX
    // =========================

    closeButton.addEventListener('click', closeLightbox);

    lightbox.addEventListener('click', (event) => {

        if (event.target === lightbox) {
            closeLightbox();
        }

    });

    document.addEventListener('keydown', (event) => {

        if (
            event.key === 'Escape' &&
            !lightbox.classList.contains('hidden')
        ) {
            closeLightbox();
        }

    });

});