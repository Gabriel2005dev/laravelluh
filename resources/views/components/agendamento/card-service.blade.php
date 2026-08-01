<div

class="
bg-white
rounded-3xl
overflow-hidden
border
border-zinc-200
shadow-sm
hover:shadow-xl
transition
"


>


<img

src="{{asset('images/services/'.$service['image'])}}"

class="
w-full
aspect-[4/3]
object-cover
"

>



<div class="p-5">


<h3 class="font-semibold text-lg">

{{$service['name']}}

</h3>


<div class="mt-4 flex justify-between">


<span>

{{$service['time']}}

</span>


<strong class="text-orange-600">

{{$service['price']}}

</strong>


</div>



<button


@click="servicoSelecionado=@js($service)"


class="
mt-5
w-full
rounded-full
bg-zinc-900
py-3
text-white
"


>

Agendar

</button>



</div>



</div>