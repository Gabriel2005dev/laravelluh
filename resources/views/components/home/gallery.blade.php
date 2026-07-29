{{-- ============================================================
    SECTION: GALERIA
    ============================================================ --}}

<section
    x-data="{
        activeImage: 0,

        images: [
            {
                src: '{{ asset('images/gallery/gallery-01.png') }}',
                title: 'Cabelos & Tratamentos',
                rating: '5.0'
            },
            {
                src: '{{ asset('images/gallery/gallery-02.jpg') }}',
                title: 'Design de Sobrancelhas',
                rating: '4.9'
            },
            {
                src: '{{ asset('images/gallery/gallery-03.jpg') }}',
                title: 'Manicure & Pedicure',
                rating: '5.0'
            },
            {
                src: '{{ asset('images/gallery/gallery-04.jpg') }}',
                title: 'Outros Serviços',
                rating: '4.8'
            },
            {
                src: '{{ asset('images/gallery/gallery-05.jpg') }}',
                title: 'Escova & Finalização',
                rating: '4.9'
            },
            {
                src: '{{ asset('images/gallery/gallery-06.jpg') }}',
                title: 'Spa das Mãos',
                rating: '5.0'
            }
        ],

        next() {
            this.activeImage =
                (this.activeImage + 1) % this.images.length
        },

        previous() {
            this.activeImage =
                (this.activeImage - 1 + this.images.length) % this.images.length
        }
    }"
    class="relative w-full overflow-hidden bg-white"
>

    {{-- ========================================================
        CONTEÚDO PRINCIPAL
        ======================================================== --}}

    <div class="mx-auto w-full max-w-7xl px-4 py-16 sm:px-6 sm:py-20 lg:px-8 lg:py-24">

        {{-- ====================================================
            GRID PRINCIPAL
            ESQUERDA = TEXTO
            DIREITA = IMAGEM PRINCIPAL
            ==================================================== --}}

        <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">


            {{-- ==================================================
                COLUNA ESQUERDA
                ================================================== --}}

            <div class="max-w-xl">

                {{-- Pequeno título superior --}}
                <div class="mb-6 flex items-center gap-4">

                    <span
                        class="
                        text-xs
                        font-semibold
                        uppercase
                        tracking-[0.25em]
                        text-orange-950
                        "
                    >
                        Nossa galeria
                    </span>

                    <span
                        class="
                        h-px
                        w-12
                        bg-orange-950/40
                        "
                    ></span>

                </div>


                {{-- Título principal --}}
                <h2
                    class="
                    max-w-lg
                    text-4xl
                    font-semibold
                    leading-[0.95]
                    tracking-[-0.04em]
                    text-zinc-950

                    sm:text-5xl

                    lg:text-6xl
                    "
                >
                    Cada detalhe
                    <br>

                    conta a nossa

                    <span
                        class="
                        font-serif
                        font-normal
                        italic
                        text-orange-950
                        "
                    >
                        essência.
                    </span>
                </h2>


                {{-- Descrição --}}
                <p
                    class="
                    mt-7
                    max-w-md
                    text-sm
                    leading-7
                    text-zinc-500

                    sm:text-base
                    "
                >
                    Nossa galeria é um reflexo do cuidado, da dedicação
                    e da paixão por realçar a sua beleza.
                    Explore nossos trabalhos e inspire-se.
                </p>


                {{-- Botões --}}
                <div
                    class="
                    mt-8
                    flex
                    flex-wrap
                    items-center
                    gap-4
                    "
                >

                    {{-- Botão principal --}}
                    <a
                        href="#galeria-completa"
                        class="
                        inline-flex
                        h-12
                        items-center
                        justify-center
                        rounded-full
                        bg-orange-950
                        px-7
                        text-sm
                        font-semibold
                        text-white
                        transition
                        duration-300
                        hover:bg-orange-900
                        "
                    >
                        Ver mais trabalhos
                    </a>


                    {{-- Botão circular --}}
                    <a
                        href="#galeria-completa"
                        aria-label="Ver mais trabalhos"
                        class="
                        flex
                        h-12
                        w-12
                        items-center
                        justify-center
                        rounded-full
                        border
                        border-orange-950
                        text-orange-950
                        transition
                        duration-300
                        hover:bg-orange-950
                        hover:text-white
                        "
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            class="h-5 w-5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 12h14"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m13 6 6 6-6 6"
                            />
                        </svg>

                    </a>

                </div>

            </div>


            {{-- ==================================================
                COLUNA DIREITA
                IMAGEM PRINCIPAL
                ================================================== --}}

            <div class="relative">

                {{-- Moldura da imagem --}}
                <div
                    class="
                    relative
                    aspect-[4/3]
                    w-full
                    overflow-hidden
                    rounded-t-full
                    bg-zinc-100
                    shadow-xl
                    shadow-orange-950/10

            
                    "
                >

                    {{-- Imagem principal --}}
                    <template x-for="(image, index) in images" :key="image.src">

                        <img
                            x-show="activeImage === index"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 scale-105"
                            x-transition:enter-end="opacity-100 scale-100"
                            :src="image.src"
                            :alt="image.title"
                            class="
                            absolute
                            inset-0
                            h-full
                            w-full
                            object-cover
                            "
                        >

                    </template>


                    {{-- Gradient inferior da imagem principal --}}
                    <div
                        class="
                        pointer-events-none
                        absolute
                        inset-x-0
                        bottom-0
                        h-40
                        bg-gradient-to-t
                        from-orange-950
                        via-orange-950/60
                        to-transparent
                        "
                    ></div>


                    {{-- Informações da imagem principal --}}
                    <div
                        class="
                        absolute
                        inset-x-0
                        bottom-0
                        z-10
                        flex
                        items-end
                        justify-between
                        gap-4
                        p-5

                        sm:p-7
                        "
                    >

                        {{-- Nome --}}
                        <div>

                            <p
                                class="
                                text-xs
                                font-medium
                                uppercase
                                tracking-wider
                                text-white/70
                                "
                                x-text="images[activeImage].title"
                            ></p>

                        </div>


                        {{-- Avaliação --}}
                        <div
                            class="
                            flex
                            shrink-0
                            items-center
                            gap-3
                            "
                        >

                            <div class="flex items-center gap-1">

                                <template x-for="star in 5" :key="star">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="
                                        h-4
                                        w-4
                                        text-white
                                        "
                                    >
                                        <path
                                            d="M12 2.75l2.854 5.782 6.383.928-4.619 4.502 1.09 6.357L12 17.318l-5.708 3.001 1.09-6.357-4.619-4.502 6.383-.928L12 2.75z"
                                        />
                                    </svg>

                                </template>

                            </div>


                            <span
                                class="
                                text-sm
                                font-semibold
                                text-white
                                "
                                x-text="images[activeImage].rating"
                            ></span>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- ====================================================
            GALERIA / CARROSSEL
            ==================================================== --}}

        <div
            id="galeria-completa"
            class="
            mt-16
            rounded-t-full
            bg-[#fffafa]
            px-4
            py-8

            sm:mt-20
            sm:px-7
            sm:py-10

            lg:mt-24
            lg:px-8
            "
        >

            {{-- Cabeçalho da galeria --}}
            <div
                class="
                mb-8
                flex
                items-end
                justify-between
                gap-6
                "
            >

                {{-- Título --}}
                <div>

                    <div class="flex items-center gap-3">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            class="
                            h-5
                            w-5
                            text-pink-400
                            "
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 3l1.3 4.2L17 8.5l-3.7 1.3L12 14l-1.3-4.2L7 8.5l3.7-1.3L12 3Z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M19 14l.7 2.3L22 17l-2.3.7L19 20l-.7-2.3L16 17l2.3-.7L19 14Z"
                            />
                        </svg>

                        <h3
                            class="
                            text-xl
                            font-semibold
                            tracking-tight
                            text-zinc-950

                            sm:text-2xl
                            "
                        >
                            Nossos trabalhos
                        </h3>

                    </div>


                    <p
                        class="
                        mt-2
                        text-sm
                        text-zinc-500
                        "
                    >
                        Beleza real, resultados que falam por si.
                    </p>

                </div>


                {{-- Navegação desktop --}}
                <div class="hidden items-center gap-3 sm:flex">

                    {{-- Anterior --}}
                    <button
                        type="button"
                        @click="previous()"
                        aria-label="Imagem anterior"
                        class="
                        flex
                        h-11
                        w-11
                        items-center
                        justify-center
                        rounded-full
                        border
                        border-orange-950/20
                        text-orange-950
                        transition
                        duration-300
                        hover:bg-orange-950
                        hover:text-white
                        "
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            class="h-5 w-5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M19 12H5"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m11 18-6-6 6-6"
                            />
                        </svg>

                    </button>


                    {{-- Próximo --}}
                    <button
                        type="button"
                        @click="next()"
                        aria-label="Próxima imagem"
                        class="
                        flex
                        h-11
                        w-11
                        items-center
                        justify-center
                        rounded-full
                        border
                        border-orange-950/20
                        text-orange-950
                        transition
                        duration-300
                        hover:bg-orange-950
                        hover:text-white
                        "
                    >

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            class="h-5 w-5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 12h14"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m13 6 6 6-6 6"
                            />
                        </svg>

                    </button>

                </div>

            </div>


            {{-- ==================================================
                CARROSSEL HORIZONTAL
                ================================================== --}}

            <div
                class="
                -mx-4
                overflow-x-auto
                px-4
                pb-3
                scrollbar-hide

                sm:-mx-7
                sm:px-7

                lg:-mx-8
                lg:px-8
                "
            >

                <div
                    class="
                    flex
                    w-max
                    gap-4
                    "
                >

                    {{-- Cards --}}
                    <template
                        x-for="(image, index) in images"
                        :key="image.src"
                    >

                        <button
                            type="button"
                            @click="activeImage = index"
                            class="
                            group
                            relative
                            h-56
                            w-44
                            shrink-0
                            overflow-hidden
                            rounded-t-full
                            bg-zinc-100
                            text-left
                            shadow-sm
                            transition
                            duration-300
                            hover:-translate-y-1
                            hover:shadow-xl
                            sm:h-64
                            sm:w-48
                            "
                            :class="activeImage === index
                                ? 'ring-2 ring-pink-400 ring-offset-2'
                                : ''"
                        >

                            {{-- Imagem --}}
                            <img
                                :src="image.src"
                                :alt="image.title"
                                class="
                                absolute
                                inset-0
                                h-full
                                w-full
                                object-cover
                                transition
                                duration-500
                                group-hover:scale-105
                                "
                            >


                            {{-- Gradient orange-950 --}}
                            <div
                                class="
                                absolute
                                inset-x-0
                                bottom-0
                                h-32
                                bg-gradient-to-t
                                from-orange-950
                                via-orange-950/70
                                to-transparent
                                "
                            ></div>


                            {{-- Conteúdo do card --}}
                            <div
                                class="
                                absolute
                                inset-x-0
                                bottom-0
                                z-10
                                p-4
                                "
                            >

                                {{-- Nome do serviço --}}
                                <p
                                    class="
                                    line-clamp-2
                                    text-xs
                                    font-medium
                                    leading-5
                                    text-white
                                    "
                                    x-text="image.title"
                                ></p>


                                {{-- Estrelas --}}
                                <div
                                    class="
                                    mt-2
                                    flex
                                    items-center
                                    gap-1
                                    "
                                >

                                    <template x-for="star in 5" :key="star">

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                            class="
                                            h-3.5
                                            w-3.5
                                            text-white
                                            "
                                        >
                                            <path
                                                d="M12 2.75l2.854 5.782 6.383.928-4.619 4.502 1.09 6.357L12 17.318l-5.708 3.001 1.09-6.357-4.619-4.502 6.383-.928L12 2.75z"
                                            />
                                        </svg>

                                    </template>


                                    {{-- Nota --}}
                                    <span
                                        class="
                                        ml-1
                                        text-xs
                                        font-semibold
                                        text-white
                                        "
                                        x-text="image.rating"
                                    ></span>

                                </div>

                            </div>

                        </button>

                    </template>

                </div>

            </div>


            {{-- ==================================================
                INDICAÇÃO DE INTERAÇÃO
                ================================================== --}}

            <div
                class="
                mt-6
                flex
                items-center
                justify-center
                gap-2
                text-center
                text-xs
                text-zinc-400
                "
            >

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.7"
                    class="
                    h-5
                    w-5
                    text-pink-400
                    "
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 3v6"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8 7h8"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8 11h8"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9 15h6"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10 19h4"
                    />

                </svg>

                <span>
                    Clique em uma imagem para ver em destaque
                </span>

            </div>

        </div>

    </div>

</section>