{{-- Seção Sobre a Empresa --}}
    <section
        id="about"
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-6 overflow-hidden dark-bg scroll-mt-[80px]"
        style="--bg-image: url('{{ asset('img/textura.png') }}');">

        {{-- Decoração Bambu (Background) --}}
        {{-- Topo Direito --}}
        <div class="absolute -top-6 -right-5 w-48 md: w-64 opacity-60 pointer-events-none rotate-180">
            <img src="{{ asset('img/bambu.png') }}" alt="" class="w-full object-contain">
        </div>
        {{-- Base Esquerda --}}
        <div class="absolute -bottom-6 -left-5 w-48 md:w-64 opacity-60 pointer-events-none">
            <img src="{{ asset('img/bambu.png') }}" alt="" class="w-full object-contain">
        </div>

        <div class="max-w-7xl mx-auto relative z-10 w-full">

            {{-- Linha Superior --}}
            <div class="mb-10 w-full opacity-80">
                <img src="{{ asset('img/Linha.png') }}" alt="Divisor" class="w-full h-auto">
            </div>

            {{-- Grid de Conteúdo --}}
            <div class="relative w-full py-20 px-6 overflow-hidden">

                {{-- Título --}}
                <div class="flex-shrink-0">
                    <h2 class="text-[#2BD885] text-4xl md:text-5xl font-medium tracking-wide whitespace-nowrap">
                        Sobre a Empresa:
                    </h2>
                </div>

                {{-- Coluna Texto --}}
                <div class="flex-1 space-y-4 py-8 md:mx-16">
                    <p class="text-gray-300 text-base md:text-lg leading-relaxed font-light">
                        Cada vez mais as pessoas estão buscando tratamentos alternativos.
                    </p>

                    <p class="text-gray-300 text-base md:text-lg leading-relaxed font-light">
                        O motivo da procura por estes tratamentos é pelo baixo índice de efeito colateral ou adverso.
                    </p>

                    <p class="text-gray-300 text-base md:text-lg leading-relaxed font-light">
                        Por outro lado, muitos profissionais autônomos que atuam nessa área da saúde necessitam de apoio confiável sobre conhecimentos nas áreas em que atuam no momento em que tratam seus pacientes. Por isso, para atender essa necessidade, muitas vezes carregam livros pesados junto com seu kit de ferramentas de atendimento.
                    </p>

                    <p class="text-gray-300 text-base md:text-lg leading-relaxed font-light">
                        O mundo tem mudado bastante, trazendo novas tecnologias para facilitar vida das pessoas. Hoje, a grande maioria utiliza computadores pessoais e/ou algum dispositivo portátil, tais como, Notebooks, Smartphones, Tablets, iPads, assim por diante.
                    </p>

                    <p class="text-gray-300 text-base md:text-lg leading-relaxed font-light">
                        Então, porque não disponibilizar uma ferramenta on-line para os profissionais da área da saúde consultarem através dos dispositivos portáteis em qualquer lugar em qualquer hora?
                    </p>

                    <p class="text-gray-300 text-base md:text-lg leading-relaxed font-light">
                        Esse foi o principal objetivo para lançar o site KORYO.
                    </p>

                    <p class="text-gray-300 text-base md:text-lg leading-relaxed font-light">
                        O KORYO é o nome de uma das dinastias antigas da Coréia onde se destacou as terapias naturais. Desejamos que este site KORYO se destaque assim como foi na história da Coréia, sendo um grande aliado para os profissionais da área da saúde em qualquer momento em qualquer lugar.
                    </p>
                </div>

            </div>

            {{-- Linha Inferior --}}
            <div class="mt-12 w-full opacity-100">
                <img src="{{ asset('img/Linha.png') }}" alt="Divisor" class="w-full h-auto">
            </div>

        </div>
    </section>
