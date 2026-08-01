{{-- =========================
     GALLERY
========================= --}}
<section id="galeria" class="w-full bg-white py-12 sm:py-12 lg:py-6">

    <div class="mx-auto max-w-7xl px-6">

        {{-- =========================
             CABEÇALHO
        ========================= --}}
        <div class="mb-20 flex items-center justify-center lg:justify-between">

            <h2 class="font-title text-xl font-bold tracking-tight text-orange-950 sm:text-4xl">
                Meus trabalhos
            </h2>

            {{-- Botões Desktop --}}
            <div class="hidden items-center gap-3 lg:flex">

                <button
                    id="gallery-prev"
                    type="button"
                    aria-label="Imagem anterior"
                    class="flex h-11 w-11 items-center justify-center rounded-full border border-zinc-200 bg-white shadow-md transition duration-300 hover:bg-zinc-100"
                >
                    <x-lucide-chevron-left class="h-5 w-5"/>
                </button>

                <button
                    id="gallery-next"
                    type="button"
                    aria-label="Próximas imagens"
                    class="flex h-11 w-11 items-center justify-center rounded-full bg-orange-950 text-white shadow-md transition duration-300 hover:scale-105"
                >
                    <x-lucide-chevron-right class="h-5 w-5"/>
                </button>

            </div>

        </div>

        {{-- =========================
             GALLERY
        ========================= --}}
        <div class="relative">

            {{-- Fade Direito --}}
            <div
                id="fade-right"
                class="pointer-events-none absolute right-0 top-0 z-20 h-full w-16 opacity-0 bg-gradient-to-l from-white via-white/70 to-transparent transition-opacity duration-700 ease-in-out sm:w-28 lg:w-44"
            ></div>

            {{-- Scroll --}}
            <div
                id="gallery-scroll"
                class="overflow-x-auto scroll-smooth scrollbar-none touch-pan-x"
            >

                <div class="grid grid-flow-col grid-rows-2 w-max gap-3 sm:gap-4 lg:gap-5">

                    @for ($i = 1; $i <= 12; $i++)

                        <div class="gallery-item group relative h-48 w-40 overflow-hidden bg-zinc-100 sm:h-60 sm:w-52 lg:h-72 lg:w-64">

                            <img
                                src="{{ asset('images/gallery/gallery-' . str_pad($i, 2, '0', STR_PAD_LEFT) . '.jpg') }}"
                                alt="Imagem da galeria {{ $i }}"
                                loading="lazy"
                                class="gallery-image h-full w-full object-cover transition duration-700 group-hover:scale-110"
                            >

                            <button
                                type="button"
                                aria-label="Ampliar imagem {{ $i }}"
                                class="gallery-open absolute right-3 top-3 flex h-10 w-10 items-center justify-center rounded-full bg-white/90 text-zinc-800 opacity-0 shadow-lg backdrop-blur transition-all duration-300 group-hover:opacity-100"
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
        <div class="mt-10 flex w-full items-center justify-end gap-3">

            <p class="font-body text-right text-xs font-medium text-orange-950 sm:text-sm">
                Veja mais no nosso Instagram
            </p>

            <a
                href="https://www.instagram.com/"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Visite nosso Instagram"
                class="group flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-orange-950 shadow-md transition-all duration-300 hover:scale-105"
            >
                <x-fab-instagram class="h-6 w-6 text-white"/>
            </a>

        </div>

    </div>

</section>

{{-- =========================
     LIGHTBOX
========================= --}}
<div
    id="lightbox"
    class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80 p-6"
>

    <button
        id="lightbox-close"
        type="button"
        aria-label="Fechar imagem"
        class="absolute right-6 top-6 flex items-center justify-center text-white transition duration-300 hover:scale-110"
    >
        <x-lucide-x class="h-8 w-8"/>
    </button>

    <img
        id="lightbox-image"
        alt="Imagem ampliada da galeria"
        class="max-h-full max-w-full object-contain"
    >

</div>