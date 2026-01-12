{{-- Seção Condições de Uso --}}
    <section
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-6 overflow-hidden dark-bg"
        style="--bg-image: url('{{ asset('img/textura.png') }}');">

        <div class="max-w-7xl mx-auto relative z-10 w-full px-4 my-12 py-10 md:px-12">

            {{-- Título da Seção --}}


            {{-- Card Superior: Condições de Uso (mobile-first) --}}
            <div class="w-full p-6 border-2 border-[#2BD885] md:p-10 mb-2"
                style="background-color: rgba(31, 49, 40, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35); border-radius: 6px;">
                <div class="flex flex-col md:flex-row items-start md:items-center gap-8">
                    {{-- Texto --}}
                    <div class="w-full md:w-2/3">
                        <h2 class="text-white text-4xl md:text-5xl font-semibold mb-4">Condições de Uso</h2>
                        <div class="space-y-4 text-gray-200 text-lg md:text-xl leading-relaxed">
                            <p>É necessário conexão de internet para utilizar o sistema.</p>
                            <p class="text-[#2BD885]">Cada dia de uso finaliza às 23:59 daquele dia.</p>
                            <p><span class="text-[#2BD885] font-semibold">Importante:</span> Não é permitido conectar em vários dispositivos ao mesmo tempo. Por exemplo, ao conectar smartphone e tablet simultaneamente, será desconectado um dos dispositivos e poderá ser debitado um dia adicional do plano contratado. Portanto, guarde sua senha de acesso em um lugar seguro e não a forneça a outras pessoas.</p>
                        </div>
                    </div>

                    {{-- Imagem (fica ao lado no desktop) --}}
                    <div class="w-full md:w-1/3">
                        <div class="rounded-md overflow-hidden bg-black/10">
                            <img src="{{ asset('img/Telas.png') }}" alt="Exemplo de uso em múltiplos dispositivos" class="w-full h-auto object-cover">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grid inferior: dois cards lado a lado no desktop --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                {{-- Card: Suporte Técnico --}}
                <div class="p-8 border-2 border-[#2BD885] min-h-[220px]"
                    style="background-color: rgba(31, 49, 40, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35); border-radius: 6px;">
                    <h3 class="text-white text-3xl md:text-4xl font-semibold mb-3 md:flex justify-center flex justify-center">Suporte Técnico</h3>
                    <p class="text-gray-200 text-base md:text-lg leading-relaxed md:flex justify-center flex justify-center items-center mx-12">
                        Suporte permanente durante toda a vigência do plano contratado.
                    </p>
                </div>

                {{-- Card: Como Funciona --}}
                <div class="p-8 border-2 border-[#2BD885] min-h-[220px]"
                    style="background-color: rgba(31, 49, 40, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35); border-radius: 6px;">
                    <h3 class="text-white text-3xl md:text-4xl font-semibold mb-3 md:flex justify-center flex justify-center">Como Funciona</h3>
                    <p class="text-gray-200 text-base md:text-lg leading-relaxed mb-6 md:flex justify-center flex justify-center items-center mx-12">Escolha um dos produtos acima, selecione o plano desejado e comece a usar o sistema imediatamente.</p>
                    <div class="flex justify-center">
                        <button class="bg-[#2BD885] hover:bg-[#25b870] text-koryo-dark font-semibold px-6 py-3 rounded shadow-md transition">
                            Saiba Mais
                        </button>
                    </div>
                </div>
            </div>


        </div>
    </section>