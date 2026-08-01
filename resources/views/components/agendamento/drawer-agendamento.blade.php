<div>


<div

x-show="servicoSelecionado"

x-cloak

class="
fixed
inset-0
bg-black/40
z-[60]
"

@click="servicoSelecionado=null"

></div>



<div

x-show="servicoSelecionado"

x-transition

class="
fixed
right-0
top-0
h-full
w-full
sm:w-[450px]
bg-white
z-[70]
shadow-2xl
p-6
"

>


<button

@click="servicoSelecionado=null"

class="
text-zinc-500
"

>

Fechar

</button>



<div class="mt-10">


<h2
class="
text-2xl
font-semibold
"
>

Agendar serviço

</h2>



<template x-if="servicoSelecionado">


<div class="mt-6">


<h3

class="
font-medium
text-lg
"

x-text="servicoSelecionado.name"

></h3>



<div class="mt-8">


<label class="text-sm">

Escolha a data

</label>


<input

type="date"

class="
mt-2
w-full
rounded-xl
border-zinc-300
"

>


</div>



<div class="mt-6">


<label class="text-sm">

Horário disponível

</label>


<select

class="
mt-2
w-full
rounded-xl
border-zinc-300
"

>

<option>

09:00

</option>

<option>

10:30

</option>


<option>

14:00

</option>


</select>


</div>



<button

class="
mt-10
w-full
rounded-full
bg-orange-600
py-3
text-white
"

>

Continuar

</button>



</div>


</template>



</div>


</div>


</div>