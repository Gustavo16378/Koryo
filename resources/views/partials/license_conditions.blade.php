{{-- Seção Licenças e Condições (Mobile-first) --}}
    <section
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-6 overflow-hidden light-bg"
        style="--bg-image: url('{{ asset('img/textura.png') }}');">

        <div class="max-w-7xl mx-auto relative z-10 w-full ">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-24">

                {{-- Coluna Esquerda: Requisitos / Instalação / Suporte --}}
                <div class="grid grid-cols-1 gap-6">

                    {{-- Card: Requisitos mínimos --}}
                    <div class="w-full p-6 md:p-8 border-2 border-[#2BD885] text-white"
                        style="background-color: rgba(26, 58, 49, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35);">
                        <h3 class="text-white text-2xl md:text-3xl font-semibold">
                            Requisitos mínimos
                        </h3>
                        <div class="min-w-10 my-4 -mx-6">
                            <img src="{{ asset('img/Linha.png') }}" alt="" class="h-2 w-full">
                        </div>
                        <ul class="text-gray-200 text-sm md:text-base space-y-2 leading-relaxed list-disc list-inside">
                            <li>Windows XP, 7, 8, 10, 11, Vista (32 ou 64 Bits)</li>
                            <li>Memória RAM: acima de 512 MB</li>
                            <li>Recomendamos o uso para monitores de 14 polegadas ou mais (pode haver necessidade de ajuste de resolução em NETBOOKS)</li>
                        </ul>
                    </div>

                    {{-- Card: Instalação --}}
                    <div class="w-full p-6 md:p-8 border-2 border-[#2BD885] text-white"
                        style="background-color: rgba(26, 58, 49, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35);">
                        <h3 class="text-white text-2xl md:text-3xl font-semibold uppercase">
                            Instalação
                        </h3>
                        <div class="min-w-10 my-4 -mx-6">
                            <img src="{{ asset('img/Linha.png') }}" alt="" class="h-2 w-full">
                        </div>
                        <p class="text-gray-200 text-sm md:text-base leading-relaxed">
                            Para a primeira máquina, o usuário deverá utilizar o número de série que o acompanha. Para segunda máquina o usuário, deverá solicitar uma licença gratuita ao suporte técnico.
                        </p>
                    </div>

                    {{-- Card: Suporte Técnico --}}
                    <div class="w-full p-6 md:p-8 border-2 border-[#2BD885] text-white"
                        style="background-color: rgba(26, 58, 49, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35);">
                        <h3 class="text-white text-2xl md:text-3xl font-semibold uppercase">
                            Suporte técnico
                        </h3>
                        <div class="min-w-10 my-4 -mx-6">
                            <img src="{{ asset('img/Linha.png') }}" alt="" class="h-2 w-full">
                        </div>
                        <p class="text-gray-200 text-sm md:text-base leading-relaxed">
                            Permanente para as máquinas licenciadas desde que não viole as condições tratadas no contrato que aparece no início da instalação.
                        </p>
                    </div>
                </div>

                {{-- Coluna Direita: Condições / Licença gratuita --}}
                <div class="grid grid-cols-1 gap-8">

                    {{-- Card: Condições de uso e licenças adicionais --}}
                    <div class="w-full p-6 md:p-8 border-2 border-[#2BD885] text-white"
                        style="background-color: rgba(26, 58, 49, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35);">
                        <h3 class="text-white text-2xl md:text-3xl font-semibold">
                            Condições de uso e licenças adicionais
                        </h3>
                        <div class="min-w-10 my-4 -mx-6">
                            <img src="{{ asset('img/Linha.png') }}" alt="" class="h-2 w-full">
                        </div>
                        <div class="space-y-3 text-gray-200 text-sm md:text-base leading-relaxed">
                            <p>Na compra de uma licença, você ganha mais uma licença gratuitamente. Assim, você poderá instalar em 2 máquinas.</p>
                            <p>As licenças são permanentes para cada máquina instalada e não há nenhum custo adicional nem taxas para o uso.</p>
                            <p>A reinstalação, na mesma máquina, pode ser feita ilimitadas vezes.</p>
                        </div>
                    </div>

                    {{-- Card: Licença Gratuita --}}
                    <div class="w-full p-6 md:p-8 border-2 border-[#2BD885] text-white"
                        style="background-color: rgba(26, 58, 49, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35);">
                        <h3 class="text-white text-2xl md:text-3xl font-semibold uppercase">
                            Licença gratuita
                        </h3>
                        <div class="min-w-10 my-4 -mx-6">
                            <img src="{{ asset('img/Linha.png') }}" alt="" class="h-2 w-full">
                        </div>
                        <div class="space-y-3 text-gray-200 text-sm md:text-base leading-relaxed">
                            <p>A licença gratuita deverá ser solicitada dentro de um ano desde a compra do produto. Após este período não poderá mais solicitar a licença gratuita.</p>
                            <p>A licença gratuita é intransferível, ou seja, somente o comprador original poderá obter.</p>
                            <p>Caso forneça para outra pessoa essa licença, o usuário original perderá permanentemente o nosso suporte técnico.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>