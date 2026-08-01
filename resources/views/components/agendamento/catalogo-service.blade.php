<section
class="
pt-36
pb-20
"
>


<div
class="
mx-auto
max-w-7xl
px-6
"
>


<h1
class="
text-3xl
font-semibold
text-zinc-900
mb-10
"
>
Escolha seu serviço
</h1>




<div
class="
grid
grid-cols-1
sm:grid-cols-2
lg:grid-cols-3
gap-6
"
>



@php

$services = [


/*
|--------------------------------------------------------------------------
| CABELO - CORTE
|--------------------------------------------------------------------------
*/


[
'category'=>'hair',
'subcategory'=>'hair-cut',
'image'=>'corte-feminino.jpg',
'name'=>'Corte Feminino',
'description'=>'Corte personalizado feminino',
'time'=>'40 min',
'price'=>'R$80'
],


[
'category'=>'hair',
'subcategory'=>'hair-cut',
'image'=>'corte-masculino.jpg',
'name'=>'Corte Masculino',
'description'=>'Corte moderno masculino',
'time'=>'30 min',
'price'=>'R$50'
],


[
'category'=>'hair',
'subcategory'=>'hair-cut',
'image'=>'corte-infantil.jpg',
'name'=>'Corte Infantil',
'description'=>'Corte para crianças',
'time'=>'30 min',
'price'=>'R$40'
],


[
'category'=>'hair',
'subcategory'=>'hair-cut',
'image'=>'corte-hidratacao.jpg',
'name'=>'Corte + Hidratação',
'description'=>'Corte com tratamento capilar',
'time'=>'1h20',
'price'=>'R$130'
],



/*
|--------------------------------------------------------------------------
| CABELO - ESCOVA
|--------------------------------------------------------------------------
*/


[
'category'=>'hair',
'subcategory'=>'hair-brush',
'image'=>'escova-lisa.jpg',
'name'=>'Escova Lisa',
'description'=>'Escova tradicional',
'time'=>'40 min',
'price'=>'R$60'
],


[
'category'=>'hair',
'subcategory'=>'hair-brush',
'image'=>'escova-modelada.jpg',
'name'=>'Escova Modelada',
'description'=>'Modelagem dos fios',
'time'=>'50 min',
'price'=>'R$80'
],


[
'category'=>'hair',
'subcategory'=>'hair-brush',
'image'=>'escova-babyliss.jpg',
'name'=>'Escova + Babyliss',
'description'=>'Finalização especial',
'time'=>'1h',
'price'=>'R$100'
],


[
'category'=>'hair',
'subcategory'=>'hair-brush',
'image'=>'escova-premium.jpg',
'name'=>'Escova Premium',
'description'=>'Tratamento e finalização',
'time'=>'1h20',
'price'=>'R$130'
],




/*
|--------------------------------------------------------------------------
| OLHOS - CÍLIOS
|--------------------------------------------------------------------------
*/


[
'category'=>'eyes',
'subcategory'=>'eyelashes',
'image'=>'cilios-classico.jpg',
'name'=>'Alongamento Clássico',
'description'=>'Cílios fio a fio',
'time'=>'2h',
'price'=>'R$150'
],


[
'category'=>'eyes',
'subcategory'=>'eyelashes',
'image'=>'cilios-volume.jpg',
'name'=>'Volume Brasileiro',
'description'=>'Volume com acabamento natural',
'time'=>'2h30',
'price'=>'R$180'
],


[
'category'=>'eyes',
'subcategory'=>'eyelashes',
'image'=>'cilios-russo.jpg',
'name'=>'Volume Russo',
'description'=>'Maior volume e destaque',
'time'=>'3h',
'price'=>'R$220'
],


[
'category'=>'eyes',
'subcategory'=>'eyelashes',
'image'=>'cilios-manutencao.jpg',
'name'=>'Manutenção Cílios',
'description'=>'Reposição dos fios',
'time'=>'1h',
'price'=>'R$90'
],




/*
|--------------------------------------------------------------------------
| OLHOS - SOBRANCELHA
|--------------------------------------------------------------------------
*/


[
'category'=>'eyes',
'subcategory'=>'eyebrow',
'image'=>'sobrancelha-design.jpg',
'name'=>'Design de Sobrancelha',
'description'=>'Modelagem personalizada',
'time'=>'30 min',
'price'=>'R$40'
],


[
'category'=>'eyes',
'subcategory'=>'eyebrow',
'image'=>'sobrancelha-henna.jpg',
'name'=>'Design com Henna',
'description'=>'Design com pigmentação',
'time'=>'40 min',
'price'=>'R$60'
],


[
'category'=>'eyes',
'subcategory'=>'eyebrow',
'image'=>'brow-lamination.jpg',
'name'=>'Brow Lamination',
'description'=>'Alinhamento dos fios',
'time'=>'1h',
'price'=>'R$120'
],


[
'category'=>'eyes',
'subcategory'=>'eyebrow',
'image'=>'sobrancelha-manutencao.jpg',
'name'=>'Manutenção',
'description'=>'Manutenção do design',
'time'=>'20 min',
'price'=>'R$30'
],





/*
|--------------------------------------------------------------------------
| UNHAS - ESMALTAÇÃO
|--------------------------------------------------------------------------
*/


[
'category'=>'nails',
'subcategory'=>'nails-polish',
'image'=>'unha-tradicional.jpg',
'name'=>'Esmaltação Tradicional',
'description'=>'Esmalte clássico',
'time'=>'40 min',
'price'=>'R$35'
],


[
'category'=>'nails',
'subcategory'=>'nails-polish',
'image'=>'unha-francesinha.jpg',
'name'=>'Francesinha',
'description'=>'Esmaltação francesa',
'time'=>'50 min',
'price'=>'R$50'
],


[
'category'=>'nails',
'subcategory'=>'nails-polish',
'image'=>'unha-gel.jpg',
'name'=>'Esmaltação em Gel',
'description'=>'Maior durabilidade',
'time'=>'1h',
'price'=>'R$80'
],


[
'category'=>'nails',
'subcategory'=>'nails-polish',
'image'=>'unha-blindagem.jpg',
'name'=>'Blindagem',
'description'=>'Proteção das unhas',
'time'=>'1h20',
'price'=>'R$100'
],





/*
|--------------------------------------------------------------------------
| MAQUIAGEM - SOCIAL
|--------------------------------------------------------------------------
*/


[
'category'=>'makeup',
'subcategory'=>'make-social',
'image'=>'maquiagem-social.jpg',
'name'=>'Maquiagem Social',
'description'=>'Produção para eventos',
'time'=>'1h',
'price'=>'R$120'
],


[
'category'=>'makeup',
'subcategory'=>'make-social',
'image'=>'maquiagem-festa.jpg',
'name'=>'Maquiagem Festa',
'description'=>'Produção sofisticada',
'time'=>'1h20',
'price'=>'R$150'
],


[
'category'=>'makeup',
'subcategory'=>'make-social',
'image'=>'maquiagem-glam.jpg',
'name'=>'Maquiagem Glam',
'description'=>'Produção completa glam',
'time'=>'1h40',
'price'=>'R$180'
],


[
'category'=>'makeup',
'subcategory'=>'make-social',
'image'=>'maquiagem-noiva.jpg',
'name'=>'Maquiagem Noiva',
'description'=>'Produção especial para noivas',
'time'=>'2h',
'price'=>'R$300'
],



];

@endphp





@foreach($services as $service)


<div


x-show="

categoriaSelecionada === '{{ $service['category'] }}'

&&

subcategoriaSelecionada === '{{ $service['subcategory'] }}'

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