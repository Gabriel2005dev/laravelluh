<x-dropdown align="right" width="48">


<x-slot name="trigger">


<button

class="
flex

h-11
w-11

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


transition


hover:scale-105

"

>


{{ strtoupper(substr(Auth::user()->name,0,1)) }}


</button>


</x-slot>




<x-slot name="content">


<div
class="
px-4
py-3

border-b

border-zinc-100

"
>


<p
class="
text-sm

font-semibold

text-zinc-900
"
>

{{ Auth::user()->name }}

</p>



<p
class="
text-xs

text-zinc-500
"
>

{{ Auth::user()->email }}

</p>


</div>





<x-dropdown-link
:href="route('profile.edit')"
>

Meu Perfil

</x-dropdown-link>





<form

method="POST"

action="{{ route('logout') }}"

>


@csrf



<x-dropdown-link

:href="route('logout')"

onclick="
event.preventDefault();
this.closest('form').submit();
"

>

Sair

</x-dropdown-link>


</form>




</x-slot>



</x-dropdown>