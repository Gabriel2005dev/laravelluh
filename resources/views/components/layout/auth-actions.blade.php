<div
    class="
        hidden
        items-center
        gap-3
        lg:flex
    "
>

    @guest

        {{-- Login --}}
        <a
            href="{{ route('login') }}"
            class="
                group
                inline-flex
                items-center
                justify-center
                rounded-full
                border-2
                border-orange-950
                bg-orange-950
                px-7
                py-2
                text-sm
                font-semibold
                text-white
                transition-all
                duration-300
            "
        >

            <span
                class="
                    transition-transform
                    duration-300
                    group-hover:-translate-y-1
                "
            >
                Entrar
            </span>

        </a>


        @if (Route::has('register'))

            {{-- Cadastro --}}
            <a
                href="{{ route('register') }}"
                class="
                    group
                    inline-flex
                    items-center
                    justify-center
                    rounded-full
                    border-2
                    border-orange-950
                    px-7
                    py-2
                    text-sm
                    font-semibold
                    text-orange-950
                    transition-all
                    duration-300
                "
            >

                <span
                    class="
                        transition-transform
                        duration-300
                        group-hover:-translate-y-1
                    "
                >
                    Criar conta
                </span>

            </a>

        @endif

    @endguest


    @auth

        {{-- Avatar + Dropdown --}}
        <x-layout.profile-dropdown />

    @endauth

</div>