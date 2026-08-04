<div
    class="
        relative
        overflow-visible
        rounded-3xl
        bg-white
        transition-all
        duration-300
        mt-10


    "
>



    {{-- Ícone da categoria --}}
    <div
        class="
            absolute
            left-1/2
            top-0
            -translate-x-1/2
            -translate-y-1/2

            flex
            h-16
            w-16
            items-center
            justify-center
    

            rounded-full
            border
            border-orange-950
            bg-white
            z-20
        "
    >


    </div>

    

    <div class="grid grid-cols-2 gap-3">
        

        {{-- Imagem --}}
        <div class="h-90 rounded-3xl bg-rose-200  border border-rose-200 ">
            

            {{-- Basta trocar o nome da imagem abaixo --}}
            <img
                src="{{ asset('images/home/bannerhero.png') }}"
                alt="{{ $service['name'] }}"
                class="
                    w-full
                    h-full
                    object-cover
                    rounded-l-3xl
                "
            >

        </div>

        {{-- Conteúdo --}}
<div class=" rounded-3xl border border-orange-950">

    <div class="flex h-full flex-col p-6">

        {{-- Título --}}
        <h3 class="text-2xl font-semibold text-zinc-900">
            {{ $service['name'] }}
        </h3>

        {{-- Descrição --}}
        <p class="mt-2 text-sm leading-6 text-zinc-600">
            {{ $service['description'] }}
        </p>

        {{-- Informações --}}
        <div class="mt-6 space-y-3">

            <div class="flex items-center justify-between rounded-xl border border-zinc-200 px-4 py-3">
                <span class="text-sm font-medium text-zinc-500">
                    Duração
                </span>

                <span class="text-sm font-semibold text-zinc-900">
                    {{ $service['time'] }}
                </span>
            </div>

            <div class="flex items-center justify-between rounded-xl border border-zinc-200 px-4 py-3">
                <span class="text-sm font-medium text-zinc-500">
                    Preço
                </span>

                <span class="text-xl font-bold text-orange-950">
                    {{ $service['price'] }}
                </span>
            </div>

        </div>

        {{-- Botão --}}
        <a
            href="#agendamento"
            class="
                mt-auto
                w-full
                rounded-xl
                bg-orange-950
                py-3
                text-center
                text-sm
                font-semibold
                text-white
                transition
                hover:bg-orange-900
            "
        >
            Agendar agora
        </a>

    </div>

</div>


    </div>

</div>