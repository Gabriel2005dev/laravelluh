<section
    class="
        pb-20
    "
>

<div
    class="
        mx-auto
        max-w-7xl
        px-2
    "
>

    {{-- =====================================================
        TÍTULO
    ====================================================== --}}

    <h1
        class="
            flex
            p-5
            text-center
            text-3xl
            font-semibold
            text-zinc-900
        "
    >
        Escolha seu serviço
    </h1>


    {{-- =====================================================
        GRID DE SERVIÇOS
    ====================================================== --}}

    <div
        class="
            grid
            grid-cols-1
            gap-3
            sm:grid-cols-2
            lg:grid-cols-2
        "
    >

        @php

           $services = [

    /*
    |--------------------------------------------------------------------------
    | CABELO - FINALIZAÇÃO
    |--------------------------------------------------------------------------
    */

    [
        'category' => 'cabelo',
        'subcategory' => 'cabelo-finalizacao',
        'image' => 'escova-prancha.jpg',
        'name' => 'Escova e Prancha',
        'description' => 'Finalização com escova e prancha',
        'time' => '40 min',
        'price' => 'A partir de R$35'
    ],

    [
        'category' => 'cabelo',
        'subcategory' => 'cabelo-finalizacao',
        'image' => 'corte.jpg',
        'name' => 'Corte',
        'description' => 'Corte personalizado',
        'time' => '40 min',
        'price' => 'R$35'
    ],



    /*
    |--------------------------------------------------------------------------
    | CABELO - TRATAMENTOS
    |--------------------------------------------------------------------------
    */

    [
        'category' => 'cabelo',
        'subcategory' => 'cabelo-hidratacao',
        'image' => 'hidratacao.jpg',
        'name' => 'Hidratação',
        'description' => 'Tratamento profundo dos fios',
        'time' => '40 min',
        'price' => 'A partir de R$40'
    ],

    [
        'category' => 'cabelo',
        'subcategory' => 'cabelo-hidratacao',
        'image' => 'nutricao.jpg',
        'name' => 'Nutrição',
        'description' => 'Reposição de nutrientes capilares',
        'time' => '50 min',
        'price' => 'A partir de R$45'
    ],

    [
        'category' => 'cabelo',
        'subcategory' => 'cabelo-hidratacao',
        'image' => 'reconstrucao.jpg',
        'name' => 'Reconstrução',
        'description' => 'Recuperação da fibra capilar',
        'time' => '1h',
        'price' => 'A partir de R$50'
    ],

    [
        'category' => 'cabelo',
        'subcategory' => 'cabelo-hidratacao',
        'image' => 'cauterizacao.jpg',
        'name' => 'Cauterização',
        'description' => 'Selagem e recuperação dos fios',
        'time' => '1h20',
        'price' => 'A partir de R$60'
    ],

    [
        'category' => 'cabelo',
        'subcategory' => 'cabelo-hidratacao',
        'image' => 'cronograma-capilar.jpg',
        'name' => 'Cronograma Capilar',
        'description' => 'Tratamento completo personalizado',
        'time' => '2h',
        'price' => 'A partir de R$130'
    ],



    /*
    |--------------------------------------------------------------------------
    | CABELO - COLORAÇÃO
    |--------------------------------------------------------------------------
    */

    [
        'category' => 'cabelo',
        'subcategory' => 'cabelo-coloracao',
        'image' => 'coloracao.jpg',
        'name' => 'Coloração',
        'description' => 'Transformação da cor dos fios',
        'time' => '2h',
        'price' => 'A partir de R$30'
    ],

    [
        'category' => 'cabelo',
        'subcategory' => 'cabelo-coloracao',
        'image' => 'matizador.jpg',
        'name' => 'Matizador',
        'description' => 'Correção e realce da tonalidade',
        'time' => '40 min',
        'price' => 'A partir de R$40'
    ],



    /*
    |--------------------------------------------------------------------------
    | CABELO - ALISAMENTOS
    |--------------------------------------------------------------------------
    */

    [
        'category' => 'cabelo',
        'subcategory' => 'cabelo-alisamento',
        'image' => 'botox-formol.jpg',
        'name' => 'Botox com Formol',
        'description' => 'Redução de volume e alinhamento',
        'time' => '2h',
        'price' => 'A partir de R$70'
    ],

    [
        'category' => 'cabelo',
        'subcategory' => 'cabelo-alisamento',
        'image' => 'botox-sem-formol.jpg',
        'name' => 'Botox sem Formol',
        'description' => 'Alinhamento sem formol',
        'time' => '2h',
        'price' => 'A partir de R$70'
    ],

    [
        'category' => 'cabelo',
        'subcategory' => 'cabelo-alisamento',
        'image' => 'progressiva-formol.jpg',
        'name' => 'Progressiva com Formol',
        'description' => 'Alisamento prolongado',
        'time' => '3h',
        'price' => 'A partir de R$100'
    ],

    [
        'category' => 'cabelo',
        'subcategory' => 'cabelo-alisamento',
        'image' => 'progressiva-sem-formol.jpg',
        'name' => 'Progressiva sem Formol',
        'description' => 'Alinhamento natural dos fios',
        'time' => '3h',
        'price' => 'A partir de R$100'
    ],



    /*
    |--------------------------------------------------------------------------
    | UNHAS - MANICURE
    |--------------------------------------------------------------------------
    */

    [
        'category' => 'unha',
        'subcategory' => 'unha-manicure',
        'image' => 'manicure.jpg',
        'name' => 'Manicure',
        'description' => 'Cuidados completos das mãos',
        'time' => '40 min',
        'price' => 'R$20'
    ],

    [
        'category' => 'unha',
        'subcategory' => 'unha-manicure',
        'image' => 'pedicure.jpg',
        'name' => 'Pedicure',
        'description' => 'Cuidados completos dos pés',
        'time' => '40 min',
        'price' => 'R$25'
    ],

    [
        'category' => 'unha',
        'subcategory' => 'unha-manicure',
        'image' => 'manicure-pedicure.jpg',
        'name' => 'Manicure + Pedicure Simples',
        'description' => 'Serviço completo tradicional',
        'time' => '1h',
        'price' => 'R$35'
    ],

    [
        'category' => 'unha',
        'subcategory' => 'unha-manicure',
        'image' => 'manicure-decorada.jpg',
        'name' => 'Manicure + Pedicure Decorada',
        'description' => 'Decoração personalizada',
        'time' => '1h20',
        'price' => 'R$45'
    ],

    [
        'category' => 'unha',
        'subcategory' => 'unha-manicure',
        'image' => 'gel.jpg',
        'name' => 'Esmaltação em Gel',
        'description' => 'Maior durabilidade e brilho',
        'time' => '1h',
        'price' => 'R$35'
    ],



    /*
    |--------------------------------------------------------------------------
    | UNHAS - ALONGAMENTO
    |--------------------------------------------------------------------------
    */

    [
        'category' => 'unha',
        'subcategory' => 'unha-alongamento',
        'image' => 'acrigel.jpg',
        'name' => 'Colocação de Acrigel',
        'description' => 'Alongamento resistente',
        'time' => '2h',
        'price' => 'R$80'
    ],

    [
        'category' => 'unha',
        'subcategory' => 'unha-alongamento',
        'image' => 'postica-realista.jpg',
        'name' => 'Postiça Realista',
        'description' => 'Aplicação natural',
        'time' => '1h',
        'price' => 'R$40'
    ],

    [
        'category' => 'unha',
        'subcategory' => 'unha-alongamento',
        'image' => 'banho-gel.jpg',
        'name' => 'Banho de Gel',
        'description' => 'Fortalecimento das unhas',
        'time' => '1h20',
        'price' => 'R$60'
    ],

    [
        'category' => 'unha',
        'subcategory' => 'unha-alongamento',
        'image' => 'manutencao-acrigel.jpg',
        'name' => 'Manutenção de Acrigel',
        'description' => 'Manutenção do alongamento',
        'time' => '1h20',
        'price' => 'R$60'
    ],



    /*
    |--------------------------------------------------------------------------
    | UNHAS - EXTRAS
    |--------------------------------------------------------------------------
    */

    [
        'category' => 'unha',
        'subcategory' => 'unha-extras',
        'image' => 'encapsulada.jpg',
        'name' => 'Unha Encapsulada',
        'description' => 'Decoração encapsulada (par)',
        'time' => '40 min',
        'price' => 'R$20'
    ],

];

        @endphp


        {{-- =====================================================
            RENDERIZAÇÃO DOS SERVIÇOS
        ====================================================== --}}

        @foreach($services as $service)


<div

x-show="
(
    !categoriaSelecionada
    ||
    categoriaSelecionada === '{{ $service['category'] }}'
)
&&
(
    !subcategoriaSelecionada
    ||
    subcategoriaSelecionada === '{{ $service['subcategory'] }}'
)
"

x-transition


>


<x-agendamento.card-service
    :service="$service"
/>


</div>


@endforeach

    </div>

</div>
</section>
