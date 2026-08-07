@guest

    {{-- ============================================= --}}
    {{-- USUÁRIO DESLOGADO --}}
    {{-- ============================================= --}}

    <div
        class="
            flex
            flex-col
            gap-3
        "
    >

        {{-- Login --}}
        <a
            href="{{ route('login') }}"
            class="
                flex
                w-full
                items-center
                justify-center
                rounded-full
                border-2
                border-orange-950
                bg-orange-950
                px-6
                py-3
                text-sm
                font-semibold
                text-white
                transition-all
                duration-300
            "
        >
            Entrar
        </a>


        @if (Route::has('register'))

            {{-- Cadastro --}}
            <a
                href="{{ route('register') }}"
                class="
                    flex
                    w-full
                    items-center
                    justify-center
                    rounded-full
                    border-2
                    border-orange-950
                    px-6
                    py-3
                    text-sm
                    font-semibold
                    text-orange-950
                    transition-all
                    duration-300
                "
            >
                Criar conta
            </a>

        @endif

    </div>

@endguest


@auth

    {{-- ============================================= --}}
    {{-- USUÁRIO LOGADO --}}
    {{-- ============================================= --}}

    {{-- Informações do usuário --}}
    <div
        class="
            flex
            items-center
            gap-3
            rounded-2xl
            bg-orange-950/5
            p-4
        "
    >

        {{-- Avatar --}}
        <div
            class="
                flex
                h-12
                w-12
                shrink-0
                items-center
                justify-center
                rounded-full
                bg-gradient-to-br
                from-pink-200
                via-rose-300
                to-pink-400
                font-bold
                text-white
                shadow-sm
            "
        >

            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}

        </div>


        {{-- Dados --}}
        <div
            class="
                min-w-0
                flex-1
            "
        >

            <p
                class="
                    truncate
                    text-sm
                    font-semibold
                    text-zinc-900
                "
            >
                {{ Auth::user()->name }}
            </p>


            <p
                class="
                    truncate
                    text-xs
                    text-zinc-500
                "
            >
                {{ Auth::user()->email }}
            </p>

        </div>

    </div>

    {{-- Meu Painel --}}
    <a
        href="{{ route('dashboard') }}"
        @click="open = false"
        class="
            mt-4
            flex
            items-center
            justify-between
            rounded-xl
            px-4
            py-4
            text-sm
            font-medium
            text-zinc-700
            transition-all
            duration-200
            hover:bg-zinc-100
        "
    >

        <span>
            Meu Painel
        </span>


        <x-lucide-chevron-right
            class="
                h-5
                w-5
                text-zinc-400
            "
        />

    </a>



    {{-- Meu Perfil --}}
    <a
        href="{{ route('profile.edit') }}"
        @click="open = false"
        class="
            mt-4
            flex
            items-center
            justify-between
            rounded-xl
            px-4
            py-4
            text-sm
            font-medium
            text-zinc-700
            transition-all
            duration-200
            hover:bg-zinc-100
        "
    >

        <span>
            Meu Perfil
        </span>


        <x-lucide-chevron-right
            class="
                h-5
                w-5
                text-zinc-400
            "
        />

    </a>


    {{-- Sair --}}
    <form
        method="POST"
        action="{{ route('logout') }}"
    >

        @csrf

        <button
            type="submit"
            class="
                flex
                w-full
                items-center
                justify-between
                rounded-xl
                px-4
                py-4
                text-left
                text-sm
                font-medium
                text-red-600
                transition-all
                duration-200
                hover:bg-red-50
            "
        >

            <span>
                Sair
            </span>


            <x-lucide-log-out
                class="h-5 w-5"
            />

        </button>

    </form>

@endauth