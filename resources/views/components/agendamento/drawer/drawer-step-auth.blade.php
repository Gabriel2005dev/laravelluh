<div class="flex h-full flex-col justify-center">

    <div class="space-y-8">

        <div class="flex justify-center">

            <div class="flex h-20 w-20 items-center justify-center rounded-full bg-zinc-100">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-10 w-10 text-zinc-700"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.8"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.75 9V5.25A3.75 3.75 0 0012 1.5a3.75 3.75 0 00-3.75 3.75V9m7.5 0h.75A1.5 1.5 0 0118 10.5v9A1.5 1.5 0 0116.5 21h-9A1.5 1.5 0 016 19.5v-9A1.5 1.5 0 017.5 9h.75"
                    />
                </svg>

            </div>

        </div>

        <div class="space-y-3 text-center">

            <h2 class="text-2xl font-bold text-zinc-900">
                Faça login para continuar
            </h2>

            <p class="text-sm leading-6 text-zinc-500">
                Para concluir seu agendamento, entre na sua conta ou crie um cadastro.
            </p>

        </div>

        <div class="space-y-3">

            <button
                type="button"
                @click="irParaLogin()"
                class="w-full rounded-xl bg-zinc-900 px-5 py-3 text-sm font-medium text-white transition hover:bg-zinc-800"
            >
                Entrar
            </button>

            <button
                type="button"
                @click="irParaCadastro()"
                class="w-full rounded-xl border border-zinc-300 bg-white px-5 py-3 text-sm font-medium text-zinc-700 transition hover:bg-zinc-50"
            >
                Criar conta
            </button>

        </div>

    </div>

</div>