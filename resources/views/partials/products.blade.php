{{-- Seção Acupuntura Sistêmica --}}
    <section 
        id="atlas"
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-0 overflow-hidden light-bg scroll-mt-[80px]"
        style="--bg-image: url('{{ asset('img/textura.png') }}');">

        <div class="max-w-7xl mx-auto relative z-10 w-full">

            {{-- Título --}}
            <div class="text-center mb-12 my-20">
                <h2 class="text-white text-3xl md:text-4xl font-medium mb-20">
                    Nossos Produtos
                </h2>
            </div>

            {{-- CARD GRANDE:  Acupuntura Sistêmica Online --}}
            <div class="w-full p-8 flex items-center justify-center md:p-12 mb-30 "
                style="background-color: rgba(31, 49, 40, 1); box-shadow: 0px 0px 2px 1px rgba(43, 216, 133, 0.50);">

                {{-- Conteúdo do Card:  Texto à esquerda, Imagem à direita --}}
                <div class="flex flex-col md:flex-row items-start gap-6 md:gap-12">

                    {{-- Coluna Esquerda:  Texto --}}
                    <div class="w-full md:w-1/2 flex flex-col gap-6">
                        <div>
                            <h3 class="text-white text-2xl md:text-3xl font-medium mb-1">
                                Acupuntura Sistêmica Online
                            </h3>
                            <p class="text-[#2BD885] text-base md: text-xl font-normal pl-4">
                                Conteúdos:
                            </p>
                        </div>

                        <ul class="text-white text-base md:text-lg space-y-1.5 leading-relaxed pl-4 list-inside list-disc">
                            <li>ATLAS de pontos em 3D com nome chinês, função e localização</li>
                            <li>BUSCAR pontos de acupuntura por símbolo</li>
                            <li>BUSCAR pontos de acupuntura por nome de doença</li>
                            <li>ELABORAR protocolos de tratamento e armazenar</li>
                            <li>BUSCAR e EDITAR protocolos armazenados</li>
                            <li>CADASTRO de pacientes</li>
                            <li>FICHAS de atendimentos (disponível 10. 000 fichas para cada plano)</li>
                            <li>ATLAS de medidas: 5 Elementos, Pulsos, Relógio orgânico</li>
                            <li>TABELAS de Tonificação, Sedação, Extras, Yuan, Luo, Xi, He, Hui, 5 Elementos, Shu dorsais</li>
                            <li>NOVAS ATUALIZAÇÕES frequentes sem custo adicional</li>
                        </ul>
                    </div>

                    {{-- Coluna Direita: Imagem --}}
                    <div class="w-full md:w-1/2 flex justify-center md:justify-end md:items-center">
                        <img src="{{ asset('img/Acupuntura.png') }}"
                            alt="Acupuntura"
                            class="w-full h-auto object-cover">
                    </div>
                </div>
            </div>

            {{-- Seção Planos --}}
            <div class="mt-8">
                <h3 class="text-white text-3xl md:text-4xl font-medium text-center mb-12">
                    Planos
                </h3>

                {{-- Grid de Cards:  Mobile = 1 coluna, Desktop = 3 colunas --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-6xl mx-auto px-20">

                    {{-- Card 1: 6 meses --}}
                    <div class="rounded-2xl p-8 flex flex-col border-2 border-[#A3C847] hover:bg-[#2BD885]/5 transition min-h-[320px]"
                        style="background-color: rgba(31, 49, 40, 1); box-shadow: 0px 0px 3px 2px rgba(163, 200, 71, 1);">
                        <h4 class="text-white text-3xl md:text-4xl font-semibold text-center mb-4">
                            6 meses
                        </h4>
                        {{-- Linha abaixo do título --}}
                        <div class="min-w-10 mb-6 -mx-8 ">
                            <img src="{{ asset('img/Linha.png') }}" alt="" class="h-2">
                        </div>

                        <p class="text-white text-center text-sm md:text-base my-auto flex-grow leading-relaxed">
                            Acesso completo<br>ao conteúdo por<br>180 Dias!!!
                        </p>
                        <div class="text-center mt-6">
                            <button class="bg-[#2BD885] hover:bg-[#25b870] text-[#1F3C35] font-bold py-2.5 px-10 rounded transition-transform transform hover:scale-105 text-sm uppercase tracking-wider w-full"
                                style="box-shadow: 0px 0px 3px 2px rgba(20, 235, 129, 0.25);">
                                Contratar
                            </button>
                        </div>
                    </div>

                    {{-- Card 2: 1 ano --}}
                    <div class="rounded-2xl p-8 flex flex-col border-2 border-[#A3C847] hover:bg-[#2BD885]/5 transition min-h-[320px]"
                        style="background-color: rgba(31, 49, 40, 1); box-shadow: 0px 0px 3px 2px rgba(163, 200, 71, 1);">
                        <h4 class="text-white text-3xl md:text-4xl font-semibold text-center mb-4">
                            1 ano
                        </h4>
                        {{-- Linha abaixo do título --}}
                        <div class="min-w-10 mb-6 -mx-8 ">
                            <img src="{{ asset('img/Linha.png') }}" alt="" class="h-2">
                        </div>

                        <p class="text-white text-center text-base md:text-lg my-auto flex-grow leading-relaxed">
                            Acesso completo<br>ao conteúdo por<br>365 Dias!!!
                        </p>
                        <div class="text-center mt-6">
                            <button class="bg-[#2BD885] hover:bg-[#25b870] text-[#1F3C35] font-bold py-2.5 px-10 rounded transition-transform transform hover:scale-105 text-sm uppercase tracking-wider w-full"
                                style="box-shadow: 0px 0px 3px 2px rgba(20, 235, 129, 0.25);">
                                Contratar
                            </button>
                        </div>
                    </div>

                    {{-- Card 3: 1 ano + Koryosoft_MTC --}}
                    <div class="rounded-2xl p-8 flex flex-col border-2 border-[#A3C847] hover:bg-[#2BD885]/5 transition min-h-[320px]"
                        style="background-color: rgba(31, 49, 40, 1); box-shadow: 0px 0px 3px 2px rgba(163, 200, 71, 1);">
                        <h4 class="text-white text-3xl md:text-4xl font-semibold text-center mb-4">
                            1 ano online<br>+<br>Koryosoft_MTC
                        </h4>
                        {{-- Linha abaixo do título --}}
                        <div class="min-w-10 mb-6 -mx-8 ">
                            <img src="{{ asset('img/Linha.png') }}" alt="" class="h-2">
                        </div>

                        <p class="text-white text-center text-base md:text-lg my-auto flex-grow leading-relaxed">
                            Acesso completo ao<br>conteúdo e ao<br>Koryosoft_MTCPOR<br> por 365 Dias!!!
                        </p>
                        <div class="text-center mt-6">
                            <button class="bg-[#2BD885] hover:bg-[#25b870] text-[#1F3C35] font-bold py-2.5 px-10 rounded transition-transform transform hover:scale-105 text-sm uppercase tracking-wider w-full"
                                style="box-shadow: 0px 0px 3px 2px rgba(20, 235, 129, 0.25);">
                                Contratar
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    {{-- Seção Acupuntura para Cães --}}
    <section
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-0 overflow-hidden dark-bg"
        style="--bg-image: url('{{ asset('img/textura.png') }}');">

        <div class="max-w-7xl mx-auto relative z-10 w-full py-12 my-20">

            {{-- CARD GRANDE:  Acupuntura para Cães --}}
            <div class="w-full p-8 flex items-center justify-center md:p-12 mb-30 "
                style="background-color: rgba(26, 58, 49, 1); box-shadow: 0px 0px 2px 1px rgba(43, 216, 133, 0.50);">

                {{-- Conteúdo do Card:  Texto à esquerda, Imagem à direita --}}
                <div class="flex flex-col md:flex-row items-start gap-6 md:gap-12">

                    {{-- Coluna Direita: Imagem --}}
                    <div class="w-full md:w-1/2 flex justify-center md:justify-end md:items-center">
                        <img src="{{ asset('img/Cachorro.png') }}"
                            alt="Acupuntura para Cães"
                            class="w-full h-auto object-cover">
                    </div>
                    {{-- Coluna Esquerda:  Texto --}}
                    <div class="w-full md:w-1/2 flex flex-col gap-6">
                        <div>
                            <h3 class="text-white text-2xl md:text-3xl font-medium mb-1">
                                Acupuntura para Cães
                            </h3>
                            <p class="text-[#2BD885] text-base md: text-xl font-normal pl-4">
                                Conteúdos:
                            </p>
                        </div>

                        <ul class="text-white text-base md:text-lg space-y-1.5 leading-relaxed pl-4 list-inside list-disc">
                            <li>ATLAS de pontos em 3D com nome chinês, função, localização e método de punção</li>
                            <li>BUSCAR pontos de acupuntura por símbolo</li>
                            <li>BUSCAR pontos de acupuntura por nome de doença</li>
                            <li>ELABORAR protocolos de tratamento e armazenar</li>
                            <li>BUSCAR e EDITAR protocolos armazenados</li>
                            <li>ATLAS de medidas: 5 Elementos, Pulsos, Relógio orgânico</li>
                            <li>TABELAS de Tonificação, Sedação, Extras, Yuan, Luo, Xi, He, Hui, 5 Elementos, Shu dorsais</li>
                            <li>NOVAS ATUALIZAÇÕES frequentes sem custo adicional</li>
                        </ul>
                    </div>

                </div>
            </div>

            {{-- Seção Planos --}}
            <div class="mt-8">
                <h3 class="text-white text-3xl md:text-4xl font-medium text-center mb-12">
                    Planos
                </h3>

                {{-- Grid de Cards:  Mobile = 1 coluna, Desktop = 3 colunas --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-6xl mx-auto px-20">

                    {{-- Card 1: 6 meses --}}
                    <div class="rounded-2xl p-8 flex flex-col border-2 border-[#A3C847] hover:bg-[#2BD885]/5 transition min-h-[320px]"
                        style="background-color: rgba(26, 58, 49, 1); box-shadow: 0px 0px 3px 2px rgba(163, 200, 71, 1);">
                        <h4 class="text-white text-3xl md:text-4xl font-semibold text-center mb-4">
                            6 meses
                        </h4>
                        {{-- Linha abaixo do título --}}
                        <div class="min-w-10 mb-6 -mx-8 ">
                            <img src="{{ asset('img/Linha.png') }}" alt="" class="h-2">
                        </div>

                        <p class="text-white text-center text-sm md:text-base my-auto flex-grow leading-relaxed">
                            Acesso completo<br>ao conteúdo por<br>180 Dias!!!
                        </p>
                        <div class="text-center mt-6">
                            <button class="bg-[#2BD885] hover:bg-[#25b870] text-[#1F3C35] font-bold py-2.5 px-10 rounded transition-transform transform hover:scale-105 text-sm uppercase tracking-wider w-full"
                                style="box-shadow: 0px 0px 3px 2px rgba(20, 235, 129, 0.25);">
                                Contratar
                            </button>
                        </div>
                    </div>

                    {{-- Card 2: 1 ano --}}
                    <div class="rounded-2xl p-8 flex flex-col border-2 border-[#A3C847] hover:bg-[#2BD885]/5 transition min-h-[320px]"
                        style="background-color: rgba(26, 58, 49, 1); box-shadow: 0px 0px 3px 2px rgba(163, 200, 71, 1);">
                        <h4 class="text-white text-3xl md:text-4xl font-semibold text-center mb-4">
                            1 ano
                        </h4>
                        {{-- Linha abaixo do título --}}
                        <div class="min-w-10 mb-6 -mx-8 ">
                            <img src="{{ asset('img/Linha.png') }}" alt="" class="h-2">
                        </div>

                        <p class="text-white text-center text-base md:text-lg my-auto flex-grow leading-relaxed">
                            Acesso completo<br>ao conteúdo por<br>365 Dias!!!
                        </p>
                        <div class="text-center mt-6">
                            <button class="bg-[#2BD885] hover:bg-[#25b870] text-[#1F3C35] font-bold py-2.5 px-10 rounded transition-transform transform hover:scale-105 text-sm uppercase tracking-wider w-full"
                                style="box-shadow: 0px 0px 3px 2px rgba(20, 235, 129, 0.25);">
                                Contratar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Seção Acupuntura para Gatos --}}
    <section class="relative min-h-screen flex flex-col justify-center items-center py-16 px-0 overflow-hidden light-bg"
        style="--bg-image: url('{{ asset('img/textura.png') }}');">

        <div class="max-w-7xl mx-auto relative z-10 w-full py-12 my-20">

            {{-- CARD GRANDE:  Acupuntura para Gatos --}}
            <div class="w-full p-8 flex items-center justify-center md:p-12 mb-30 "
                style="background-color: rgba(31, 60, 53, 0.6); box-shadow: 0px 0px 2px 1px rgba(43, 216, 133, 0.50);">

                {{-- Conteúdo do Card:  Texto à esquerda, Imagem à direita --}}
                <div class="flex flex-col md:flex-row items-start gap-6 md:gap-12">

                    {{-- Coluna Esquerda:  Texto --}}
                    <div class="w-full md:w-1/2 flex flex-col gap-6">
                        <div>
                            <h3 class="text-white text-2xl md:text-3xl font-medium mb-1">
                                Acupuntura para Gatos
                            </h3>
                            <p class="text-[#2BD885] text-base md: text-xl font-normal pl-4">
                                Conteúdos:
                            </p>
                        </div>

                        <ul class="text-white text-base md:text-lg space-y-1.5 leading-relaxed pl-4 list-inside list-disc">
                            <li>ATLAS de pontos em 3D com nome chinês, função, localização e método de punção</li>
                            <li>BUSCAR pontos de acupuntura por símbolo</li>
                            <li>BUSCAR pontos de acupuntura por nome de doença</li>
                            <li>ELABORAR protocolos de tratamento e armazenar</li>
                            <li>BUSCAR e EDITAR protocolos armazenados</li>
                            <li>ATLAS de medidas: 5 Elementos, Pulsos, Relógio orgânico</li>
                            <li>TABELAS de Tonificação, Sedação, Extras, Yuan, Luo, Xi, He, Hui, 5 Elementos, Shu dorsais</li>
                            <li>NOVAS ATUALIZAÇÕES frequentes sem custo adicional</li>
                        </ul>
                    </div>

                    {{-- Coluna Direita: Imagem --}}
                    <div class="w-full md:w-1/2 flex justify-center md:justify-end md:items-center">
                        <img src="{{ asset('img/Gato.png') }}"
                            alt="Acupuntura para Gatos"
                            class="w-full h-auto object-cover">
                    </div>
                </div>
            </div>

            {{-- Seção Planos --}}
            <div class="mt-8">
                <h3 class="text-white text-3xl md:text-4xl font-medium text-center mb-12">
                    Planos
                </h3>

                {{-- Grid de Cards:  Mobile = 1 coluna, Desktop = 3 colunas --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-6xl mx-auto px-20">

                    {{-- Card 1: 6 meses --}}
                    <div class="rounded-2xl p-8 flex flex-col border-2 border-[#A3C847] hover:bg-[#2BD885]/5 transition min-h-[320px]"
                        style="background-color: rgba(31, 60, 53, 0.6); box-shadow: 0px 0px 3px 2px rgba(163, 200, 71, 1);">
                        <h4 class="text-white text-3xl md:text-4xl font-semibold text-center mb-4">
                            6 meses
                        </h4>
                        {{-- Linha abaixo do título --}}
                        <div class="min-w-10 mb-6 -mx-8 ">
                            <img src="{{ asset('img/Linha.png') }}" alt="" class="h-2">
                        </div>

                        <p class="text-white text-center text-sm md:text-base my-auto flex-grow leading-relaxed">
                            Acesso completo<br>ao conteúdo por<br>180 Dias!!!
                        </p>
                        <div class="text-center mt-6">
                            <button class="bg-[#2BD885] hover:bg-[#25b870] text-[#1F3C35] font-bold py-2.5 px-10 rounded transition-transform transform hover:scale-105 text-sm uppercase tracking-wider w-full"
                                style="box-shadow: 0px 0px 3px 2px rgba(20, 235, 129, 0.25);">
                                Contratar
                            </button>
                        </div>
                    </div>

                    {{-- Card 2: 1 ano --}}
                    <div class="rounded-2xl p-8 flex flex-col border-2 border-[#A3C847] hover:bg-[#2BD885]/5 transition min-h-[320px]"
                        style="background-color: rgba(31, 60, 53, 0.6); box-shadow: 0px 0px 3px 2px rgba(163, 200, 71, 1);">
                        <h4 class="text-white text-3xl md:text-4xl font-semibold text-center mb-4">
                            1 ano
                        </h4>
                        {{-- Linha abaixo do título --}}
                        <div class="min-w-10 mb-6 -mx-8 ">
                            <img src="{{ asset('img/Linha.png') }}" alt="" class="h-2">
                        </div>

                        <p class="text-white text-center text-base md:text-lg my-auto flex-grow leading-relaxed">
                            Acesso completo<br>ao conteúdo por<br>365 Dias!!!
                        </p>
                        <div class="text-center mt-6">
                            <button class="bg-[#2BD885] hover:bg-[#25b870] text-[#1F3C35] font-bold py-2.5 px-10 rounded transition-transform transform hover:scale-105 text-sm uppercase tracking-wider w-full"
                                style="box-shadow: 0px 0px 3px 2px rgba(20, 235, 129, 0.25);">
                                Contratar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>