{{-- =========================
     GALLERY
========================= --}}
<section class="w-full bg-white py-12 sm:py-16">





    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

    


        {{-- =========================
             CABEÇALHO DA GALLERY
        ========================= --}}
        <div
            class="
            mb-10 flex items-center justify-center gap-3 sm:justify-between"
        >


          {{-- Título --}}
<div class="flex items-center gap-3">

   


    {{-- Texto --}}
    <div>

        <h2
            class="
                text-xl
                font-bold
                tracking-tight
                text-orange-950
                font-title

                sm:text-2xl
            "
        >
            Nosso trabalho
        </h2>

    </div>

</div>



            {{-- =========================
                 BOTÕES DESKTOP
            ========================= --}}
            <div
                class="
                    hidden
                    items-center
                    gap-3
                    md:flex
                "
            >

                {{-- Botão anterior --}}
                <button
                    id="gallery-prev"
                    type="button"
                    aria-label="Imagem anterior"
                    class="
                        flex
                        h-11
                        w-11
                        items-center
                        justify-center

                        rounded-full
                        border
                        border-zinc-200
                        bg-white
                        shadow-md

                        transition
                        duration-300

                        hover:bg-zinc-100
                    "
                >

                    <x-lucide-chevron-left class="h-5 w-5"/>

                </button>


                {{-- Botão próximo --}}
                <button
                    id="gallery-next"
                    type="button"
                    aria-label="Próximas imagens"
                    class="
                        flex
                        h-11
                        w-11
                        items-center
                        justify-center

                        rounded-full
                        bg-orange-950
                        text-white
                        shadow-md

                        transition
                        duration-300

                        hover:scale-105
                    "
                >

                    <x-lucide-chevron-right class="h-5 w-5"/>

                </button>

            </div>


        </div>



        {{-- =========================
             ÁREA DA GALLERY
        ========================= --}}
        <div class="relative">


            {{-- =========================
                 FADE DIREITO
            ========================= --}}
            <div
                id="fade-right"
                class="
                    pointer-events-none
                    absolute
                    right-0
                    top-0
                    z-20

                    h-full

                    w-16

                    opacity-0

                    bg-gradient-to-l
                    from-white
                    via-white/70
                    to-transparent

                    transition-opacity
                    duration-700
                    ease-in-out

                    sm:w-28

                    lg:w-44
                "
            ></div>



            {{-- =========================
                 SCROLL DA GALLERY
            ========================= --}}
            <div
                id="gallery-scroll"
                class="
                    overflow-x-auto
                    scroll-smooth
                    scrollbar-none
                    touch-pan-x
                "
            >

                <div
                    class="
                        grid
                        grid-flow-col
                        grid-rows-2

                        gap-3
                        w-max

                        sm:gap-4

                        lg:gap-5
                    "
                >


                    {{-- =========================
                         12 IMAGENS
                    ========================= --}}
                    @for ($i = 1; $i <= 12; $i++)

                        <div
                            class="
                                gallery-item

                                group
                                relative

                                overflow-hidden

                                bg-zinc-100

                                h-48
                                w-40

                                sm:h-60
                                sm:w-52

                                lg:h-72
                                lg:w-64
                            "
                        >


                            {{-- Imagem --}}
                            <img
                                src="{{ asset('images/gallery/gallery-' . str_pad($i, 2, '0', STR_PAD_LEFT) . '.jpg') }}"
                                alt="Imagem da galeria {{ $i }}"
                                loading="lazy"

                                class="
                                    gallery-image

                                    h-full
                                    w-full

                                    object-cover

                                    transition
                                    duration-700

                                    group-hover:scale-110
                                "
                            >



                            {{-- =========================
                                 BOTÃO ABRIR IMAGEM
                            ========================= --}}
                            <button
                                type="button"
                                aria-label="Ampliar imagem {{ $i }}"

                                class="
                                    gallery-open

                                    absolute
                                    right-3
                                    top-3

                                    flex
                                    h-10
                                    w-10

                                    items-center
                                    justify-center

                                    rounded-full

                                    bg-white/90

                                    text-zinc-800

                                    opacity-0

                                    shadow-lg

                                    backdrop-blur

                                    transition-all
                                    duration-300

                                    group-hover:opacity-100
                                "
                            >

                                <x-lucide-expand class="h-5 w-5"/>

                            </button>


                        </div>

                    @endfor


                </div>


            </div>


        </div>



       {{-- =========================
     INSTAGRAM
========================= --}}
<div
    class="
        mt-8
        flex
        w-full
        items-center
        justify-end
        gap-3

        sm:mt-10
    "
>

    {{-- Texto --}}
    <p
        class="
            text-right
            text-xs
            font-medium
            text-orange-950

            sm:text-sm
        "
    >
        Veja mais no nosso Instagram
    </p>




   {{-- Botão Instagram --}}
<a
    href="https://www.instagram.com/"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Visite nosso Instagram"

    class="
        group
        flex
        h-11
        w-11
        shrink-0
        items-center
        justify-center

        rounded-full


        bg-orange-950

        shadow-md

        transition-all
        duration-300

        hover:scale-105

    "
>

    {{-- Ícone Instagram --}}
  <x-fab-instagram class="w-6 h-6 text-white" />

</a>

</div>


    </div>


</section>




{{-- =========================
     LIGHTBOX
========================= --}}
<div
    id="lightbox"

    class="
        fixed
        inset-0

        z-50

        hidden

        items-center
        justify-center

        bg-black/80

        p-6
    "
>


    {{-- =========================
         BOTÃO FECHAR
    ========================= --}}
    <button
        id="lightbox-close"
        type="button"
        aria-label="Fechar imagem"

        class="
            absolute
            right-6
            top-6

            flex
            items-center
            justify-center

            text-white

            transition
            duration-300

            hover:scale-110
        "
    >

        <x-lucide-x class="h-8 w-8"/>

    </button>



    {{-- =========================
         IMAGEM LIGHTBOX
    ========================= --}}
    <img
        id="lightbox-image"
        alt="Imagem ampliada da galeria"

        class="
            max-h-full
            max-w-full

            object-contain
        "
    >


</div>




{{-- =========================
     ESTILOS
========================= --}}
<style>

    /* Remove scrollbar horizontal */
    .scrollbar-none::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-none {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

</style>




{{-- =========================
     JAVASCRIPT
========================= --}}
<script>

document.addEventListener('DOMContentLoaded', () => {


    // =========================
    // ELEMENTOS DA GALLERY
    // =========================

    const gallery =
        document.getElementById('gallery-scroll');


    const next =
        document.getElementById('gallery-next');


    const prev =
        document.getElementById('gallery-prev');


    const fadeRight =
        document.getElementById('fade-right');


    // Quantidade de scroll
    const amount = 380;



    // =========================
    // ATUALIZAR FADE DIREITO
    // =========================

    function updateFade() {

        if (!gallery || !fadeRight) {
            return;
        }


        const maxScroll =
            gallery.scrollWidth - gallery.clientWidth;


        const position =
            gallery.scrollLeft;



        if (position < maxScroll - 10) {

            fadeRight.classList.remove('opacity-0');

            fadeRight.classList.add('opacity-100');

        } else {

            fadeRight.classList.remove('opacity-100');

            fadeRight.classList.add('opacity-0');

        }

    }



    // =========================
    // BOTÃO PRÓXIMO
    // =========================

    if (next) {

        next.addEventListener('click', () => {

            gallery.scrollBy({

                left: amount,

                behavior: 'smooth'

            });

        });

    }



    // =========================
    // BOTÃO ANTERIOR
    // =========================

    if (prev) {

        prev.addEventListener('click', () => {

            gallery.scrollBy({

                left: -amount,

                behavior: 'smooth'

            });

        });

    }



    // =========================
    // EVENTOS DO SCROLL
    // =========================

    gallery.addEventListener(
        'scroll',
        updateFade
    );


    window.addEventListener(
        'resize',
        updateFade
    );


    updateFade();





    // =========================
    // LIGHTBOX
    // =========================

    const buttons =
        document.querySelectorAll('.gallery-open');


    const lightbox =
        document.getElementById('lightbox');


    const lightboxImage =
        document.getElementById('lightbox-image');


    const close =
        document.getElementById('lightbox-close');





    // =========================
    // ABRIR LIGHTBOX
    // =========================

    buttons.forEach(button => {

        button.addEventListener('click', () => {


            const galleryItem =
                button.closest('.gallery-item');


            const image =
                galleryItem.querySelector('.gallery-image');


            lightboxImage.src =
                image.src;


            lightboxImage.alt =
                image.alt;


            lightbox.classList.remove('hidden');

            lightbox.classList.add('flex');


            document.body.classList.add('overflow-hidden');


        });

    });





    // =========================
    // FECHAR PELO BOTÃO X
    // =========================

    close.addEventListener('click', () => {


        lightbox.classList.add('hidden');

        lightbox.classList.remove('flex');


        document.body.classList.remove('overflow-hidden');


    });





    // =========================
    // FECHAR CLICANDO NO FUNDO
    // =========================

    lightbox.addEventListener('click', (event) => {


        if (event.target === lightbox) {


            lightbox.classList.add('hidden');

            lightbox.classList.remove('flex');


            document.body.classList.remove('overflow-hidden');


        }

    });





    // =========================
    // FECHAR COM ESC
    // =========================

    document.addEventListener('keydown', (event) => {


        if (
            event.key === 'Escape' &&
            !lightbox.classList.contains('hidden')
        ) {


            lightbox.classList.add('hidden');

            lightbox.classList.remove('flex');


            document.body.classList.remove('overflow-hidden');


        }

    });


});

</script>