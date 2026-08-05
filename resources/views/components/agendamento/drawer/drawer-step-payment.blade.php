{{-- ===========================================================
| ETAPA 03
|--------------------------------------------------------------------------
| FORMA DE PAGAMENTO
|--------------------------------------------------------------------------
| Futuramente:
| • Integração com gateway
| • PIX
| • Dinheiro
| • Cashback
|--------------------------------------------------------------------------
--}}

@php

$payments = [

    [
        'id' => 'pix',
        'title' => 'PIX',
        'description' => 'Pagamento instantâneo.',
        'icon' => 'pix'
    ],

    [
        'id' => 'money',
        'title' => 'Dinheiro',
        'description' => 'Pagamento presencial.',
        'icon' => 'money'
    ],

];

@endphp


<div class="flex flex-col gap-8">


    {{-- =======================================================
        TÍTULO
    ======================================================== --}}

    <div>

        <h3 class="font-title text-3xl text-zinc-900">
            Forma de pagamento
        </h3>

        <p class="mt-2 text-sm leading-6 text-zinc-500">
            Escolha como deseja realizar o pagamento.
        </p>

    </div>



    {{-- =======================================================
        RESUMO
    ======================================================== --}}

    <div class="rounded-3xl border border-orange-200 bg-orange-50 p-6">


        <div class="flex items-center justify-between">

            <span class="text-zinc-500">
                Serviço
            </span>

            <span class="font-semibold text-orange-950" x-text="drawer.servico?.name">
            </span>

        </div>



        <div class="mt-4 flex items-center justify-between">

            <span class="text-zinc-500">
                Data
            </span>

            <span class="font-semibold text-orange-950">

                Dia

                <span x-text="drawer.data"></span>

            </span>

        </div>



        <div class="mt-4 flex items-center justify-between">

            <span class="text-zinc-500">
                Horário
            </span>

            <span class="font-semibold text-orange-950" x-text="drawer.horario">
            </span>

        </div>


    </div>




    {{-- =======================================================
        FORMAS DE PAGAMENTO
    ======================================================== --}}

    <div class="flex flex-col gap-4">


        @foreach($payments as $payment)


            <button

@click="drawer.pagamento='{{ $payment['id'] }}'"

class="rounded-3xl text-left transition-all duration-300"

>



                <div class="flex items-center justify-between">



                    <div class="flex items-center gap-4">


                        {{-- ÍCONE --}}

                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/10">


                            @if($payment['icon'] === 'pix')

                                <x-fab-pix class="h-7 w-7"/>


                            @elseif($payment['icon'] === 'money')

                                <img 
                                src="{{ asset('images/icons/money.png') }}"
                                class="h-7 w-7 object-contain"
                                alt="Dinheiro"
                                >

                            @endif


                        </div>




                        {{-- TEXTO --}}

                        <div>


                            <h4 class="text-lg font-semibold">

                                {{ $payment['title'] }}

                            </h4>


                            <p class="mt-1 text-sm opacity-80">

                                {{ $payment['description'] }}

                            </p>


                        </div>


                    </div>





                    {{-- RADIO --}}

                    <div

class="flex h-6 w-6 items-center justify-center rounded-full border-2 border-zinc-300"

:class="drawer.pagamento=='{{ $payment['id'] }}' ? 'border-orange-950' : 'border-zinc-300'"

>


    <div

    x-show="drawer.pagamento=='{{ $payment['id'] }}'"

    class="h-3 w-3 rounded-full bg-orange-950"

    ></div>


</div>



                </div>



            </button>


        @endforeach



    </div>


</div>