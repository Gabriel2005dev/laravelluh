{{-- =========================================================
    FOOTER
========================================================= --}}
<footer id="contato" class="relative w-full overflow-hidden bg-orange-950 text-white">

    {{-- Linha decorativa superior --}}
    <div class="absolute inset-x-0 top-0 h-px bg-white/20"></div>

    <div class="mx-auto w-full max-w-7xl px-6">

        {{-- =====================================================
            PARTE PRINCIPAL
        ====================================================== --}}
        <div class="my-10 grid grid-cols-1 gap-14 md:grid-cols-2 md:gap-x-12 md:gap-y-14 md:justify-items-center lg:grid-cols-[1.5fr_1fr_1fr_1.2fr] lg:justify-items-stretch lg:gap-12">


            {{-- =================================================
                FALE COM A LUANA
            ================================================== --}}
            <div class="w-full max-w-md text-center lg:text-left">

                {{-- Título --}}
                <h3 class="font-title text-2xl font-semibold tracking-[-0.03em] text-white">
                    Fale com a Luana
                </h3>

                {{-- Redes sociais --}}
                <div class="mt-8 flex items-center justify-center gap-3 lg:justify-start">

                    {{-- Instagram --}}
                    <a href="#"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Instagram"
                        class="flex h-11 w-11 items-center justify-center rounded-full border border-white/20 text-white/70 transition-all duration-300 hover:border-white hover:bg-white hover:text-orange-950">

                        <x-fab-instagram class="h-6 w-6" />

                    </a>


                    {{-- Facebook --}}
                    <a href="#"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Facebook"
                        class="flex h-11 w-11 items-center justify-center rounded-full border border-white/20 text-white/70 transition-all duration-300 hover:border-white hover:bg-white hover:text-orange-950">

                        <x-fab-facebook class="h-6 w-6" />

                    </a>


                    {{-- WhatsApp --}}
                    <a href="#"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="WhatsApp"
                        class="flex h-11 w-11 items-center justify-center rounded-full border border-white/20 text-white/70 transition-all duration-300 hover:border-white hover:bg-white hover:text-orange-950">

                        <x-fab-whatsapp class="h-6 w-6" />

                    </a>

                </div>

            </div>



            {{-- =================================================
                NAVEGAÇÃO
            ================================================== --}}
            <div class="w-full text-center lg:text-left">

                <h3 class="font-title text-lg font-semibold text-white">
                    Navegação
                </h3>

                <ul class="mt-6 space-y-2">

                    <li>
                        <a href="#inicio"
                            class="text-sm text-white/60 transition-colors duration-300 hover:text-white">
                            Início
                        </a>
                    </li>

                    <li>
                        <a href="#servicos"
                            class="text-sm text-white/60 transition-colors duration-300 hover:text-white">
                            Serviços
                        </a>
                    </li>

                    <li>
                        <a href="#galeria"
                            class="text-sm text-white/60 transition-colors duration-300 hover:text-white">
                            Galeria
                        </a>
                    </li>

                    <li>
                        <a href="#sobre"
                            class="text-sm text-white/60 transition-colors duration-300 hover:text-white">
                            Sobre nós
                        </a>
                    </li>

                    <li>
                        <a href="#contato"
                            class="text-sm text-white/60 transition-colors duration-300 hover:text-white">
                            Contato
                        </a>
                    </li>

                </ul>

            </div>



            {{-- =================================================
                SERVIÇOS
            ================================================== --}}
            <div class="w-full text-center lg:text-left">

                <h3 class="font-title text-lg font-semibold text-white">
                    Serviços
                </h3>

                <ul class="mt-6 space-y-2">

                    <li>
                        <a href="#servicos"
                            class="text-sm text-white/60 transition-colors duration-300 hover:text-white">
                            Beleza
                        </a>
                    </li>

                    <li>
                        <a href="#servicos"
                            class="text-sm text-white/60 transition-colors duration-300 hover:text-white">
                            Corte de Cabelo
                        </a>
                    </li>

                    <li>
                        <a href="#servicos"
                            class="text-sm text-white/60 transition-colors duration-300 hover:text-white">
                            Manicure
                        </a>
                    </li>

                    <li>
                        <a href="#servicos"
                            class="text-sm text-white/60 transition-colors duration-300 hover:text-white">
                            Sobrancelha
                        </a>
                    </li>

                </ul>

            </div>



            {{-- =================================================
                CONTATO
            ================================================== --}}
            <div class="w-full text-center lg:text-left">

                <h3 class="font-title text-lg font-semibold text-white">
                    Contato
                </h3>

                <div class="mt-6 space-y-2">


                    {{-- WhatsApp --}}
                    <a href="#"
                        class="group flex items-center justify-center gap-3 text-white/60 transition-colors duration-300 hover:text-white lg:justify-start">

                        <x-fas-phone class="h-4 w-4 shrink-0" />

                        <span class="text-sm">
                            (21) 96538-7406
                        </span>

                    </a>


                    {{-- E-mail --}}
                    <a href="mailto:contato@studioluh.com"
                        class="group flex items-center justify-center gap-3 text-white/60 transition-colors duration-300 hover:text-white lg:justify-start">

                        <x-fas-m class="h-4 w-4 shrink-0" />

                        <span class="text-sm">
                            contato@studioluh.com
                        </span>

                    </a>


                    {{-- Localização --}}
                    <div class="flex items-center justify-center gap-3 text-white/60 lg:justify-start">

                        <x-fas-location-dot class="h-4 w-4 shrink-0" />

                        <span class="text-sm">
                            Rua Profeta Jeremias, 10 <br>
                            Parque Império, Duque de Caxias - RJ
                        </span>

                    </div>

                </div>

            </div>

        </div>



        {{-- =====================================================
            PARTE INFERIOR
        ====================================================== --}}
        <div class="my-5 flex flex-col items-center justify-center gap-5 text-center">

            {{-- Copyright --}}
            <p class="text-xs text-white/45 sm:text-sm">
                © {{ date('Y') }} Studio Luh. Todos os direitos reservados.
            </p>

        </div>

    </div>

</footer>