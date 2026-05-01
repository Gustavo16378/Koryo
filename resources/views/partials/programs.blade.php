{{-- Seção Programas para Computador --}}
<section
    id="programs"
    class="relative min-h-screen flex flex-col justify-center items-center py-16 px-0 overflow-hidden light-bg scroll-mt-[80px]"
    style="--bg-image: url('{{ asset('img/textura.png') }}');">

    <div class="max-w-7xl mx-auto relative z-10 w-full py-12 px-6">

        {{-- Título --}}
        <div class="text-center mb-12">
            <h2 class="text-white text-3xl md:text-4xl font-medium">
                Programas para Computador
            </h2>
        </div>

        {{-- Card Container --}}
        <div class="w-full p-8 md:p-10 border-2 border-[#2BD885]"
            style="background-color: rgba(31, 49, 40, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35);">

            {{-- Container Principal - Mobile: vertical | Desktop: horizontal com linha vertical --}}
            <div class="flex flex-col md:flex-row gap-0 items-stretch">

                {{-- Coluna Esquerda: Software_CAD4 --}}
                <div class="w-full md:w-1/2 p-6 md:p-8 flex flex-col gap-6">
                    <h3 class="text-white text-2xl md:text-3xl font-semibold">
                        Software_CAD4
                    </h3>

                    <div class="space-y-4 text-gray-200 text-base md:text-lg leading-relaxed">
                        <p>Software_CAD4 é a versão atualizada de software_CAD. Foi incluído os principais pontos EXTRAS.</p>
                        <p>Software_CAD4 é um software para auxiliar os acupunturistas. Poderá cadastrar pacientes, criar fichas de atendimentos e agendar seus compromissos.</p>
                        <p>Identificar a localização dos pontos e as funções de cada ponto de acupuntura.</p>
                        <p>Elaborar e buscar as combinações de pontos e imprimir para tratar seus pacientes.</p>
                        <p>Permite editar o banco de dados com novas funções para cada ponto assim, personalize e potencializa a capacidade de combinações de pontos.</p>
                    </div>

                    {{-- Imagem/Placeholder --}}
                    <div class="bg-gray-300 rounded h-32 w-32 flex items-center justify-center">
                        <span class="text-gray-600 text-sm">Imagem</span>
                    </div>
                </div>

                {{-- Linha Divisória - Horizontal no mobile, Vertical no desktop --}}
                <div class="relative">
                    {{-- Linha horizontal (mobile) --}}
                    <div class="md:hidden w-full h-0.5 bg-[#2BD885] my-8"></div>

                    {{-- Linha vertical (desktop) --}}
                    <div class="hidden md:block w-0.5 h-full bg-[#2BD885] mx-8"></div>
                </div>

                {{-- Coluna Direita: Conteúdos --}}
                <div class="w-full md:w-1/2 p-6 md:p-8 flex flex-col justify-between">
                    <div class="flex-grow">
                        <h3 class="text-[#2BD885] text-2xl md:text-3xl font-semibold mb-6">
                            Conteúdos:
                        </h3>

                        <ul class="text-gray-200 text-sm md:text-base space-y-2 leading-relaxed">
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>AGENDA</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>CADASTRO de pacientes com foto</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>FICHAS de atendimento</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>ANAMNESE</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BUSCAR e ELABORAR protocolos para cada atendimento</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>ATLAS de pontos (3D) 361 pontos + principais EXTRAS</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>ATLAS de medidas: 5 Elementos, Pulsos, Relógio orgânico</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>TABELAS: Tonificação, Sedação, Extras, Yuan, Luo, Xi, He, Hui, 5 Elementos, Shu dorsais</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>EDITOR de banco de dados</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BUSCA de combinações de pontos para doenças</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BLOCO de notas para organizar, salvar e imprimir</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BACKUP / RESTAURAÇÃO/SENHA de segurança</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Botão Acessar Link --}}
                    <div class="mt-8 flex justify-center md:justify-end">
                        <button class="bg-[#2BD885] hover:bg-[#25b870] text-brand-dark font-bold px-8 py-3 rounded shadow-lg transition-transform transform hover:scale-105 text-base">
                            Acessar Link
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
{{-- Seção Software_HAND4 --}}
<section
    class="relative min-h-screen flex flex-col justify-center items-center py-16 px-0 overflow-hidden dark-bg"
    style="--bg-image: url('{{ asset('img/textura.png') }}');">

    <div class="max-w-7xl mx-auto relative z-10 w-full py-12 px-6">

        {{-- Card Container --}}
        <div class="w-full p-8 md:p-10 border-2 border-[#2BD885]"
            style="background-color: rgba(31, 49, 40, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35);">

            {{-- Container Principal - Mobile: vertical | Desktop: horizontal com linha vertical --}}
            <div class="flex flex-col md:flex-row gap-0 items-stretch">

                {{-- Coluna Esquerda: Software_HAND4 --}}
                <div class="w-full md:w-1/2 p-6 md:p-8 flex flex-col gap-6">
                    <h3 class="text-white text-2xl md:text-3xl font-semibold">
                        Software_HAND4
                    </h3>

                    <div class="space-y-4 text-gray-200 text-base md:text-lg leading-relaxed">
                        <p>Software_HAND4 é um software de acupuntura coreana da mão. Pode ser utilizado pelos profissionais e também, pelo público em geral visto que sua utilização é de muito simples.</p>
                        <p>Utilizando Software_HAND4 você identificada a localização exata e as funções de cada ponto de acupuntura coreana.</p>
                        <p>Com o Software_HAND4 você elabora e busca as combinações de pontos e imprimir para tratar seus pacientes.</p>
                        <p>Software_HAND4 permite editar o banco de dados com novas funções para cada ponto assim, personalize e potencializa a capacidade do sistema.</p>
                    </div>

                    {{-- Imagem/Placeholder --}}
                    <div class="bg-gray-300 rounded h-32 w-32 flex items-center justify-center">
                        <span class="text-gray-600 text-sm">Imagem</span>
                    </div>
                </div>

                {{-- Linha Divisória - Horizontal no mobile, Vertical no desktop --}}
                <div class="relative">
                    {{-- Linha horizontal (mobile) --}}
                    <div class="md:hidden w-full h-0.5 bg-[#2BD885] my-8"></div>

                    {{-- Linha vertical (desktop) --}}
                    <div class="hidden md:block w-0.5 h-full bg-[#2BD885] mx-8"></div>
                </div>

                {{-- Coluna Direita: Conteúdos --}}
                <div class="w-full md:w-1/2 p-6 md:p-8 flex flex-col justify-between">
                    <div class="flex-grow">
                        <h3 class="text-[#2BD885] text-2xl md:text-3xl font-semibold mb-6">
                            Conteúdos:
                        </h3>

                        <ul class="text-gray-200 text-sm md:text-base space-y-2 leading-relaxed">
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>AGENDA</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>CADASTRO de pacientes com foto</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>FICHAS de atendimento</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>ANAMNESE</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BUSCAR e ELABORAR protocolos para cada atendimento</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>ATLAS de pontos (3D) 361 pontos + principais EXTRAS</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>ATLAS de medidas: 5 Elementos, Pulsos, Relógio orgânico</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>TABELAS: Tonificação, Sedação, Extras, Yuan, Luo, Xi, He, Hui, 5 Elementos, Shu dorsais</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>EDITOR de banco de dados</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BUSCA de combinações de pontos para doenças</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BLOCO de notas para organizar, salvar e imprimir</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BACKUP / RESTAURAÇÃO/SENHA de segurança</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Botão Acessar Link --}}
                    <div class="mt-8 flex justify-center md:justify-end">
                        <button class="bg-[#2BD885] hover:bg-[#25b870] text-brand-dark font-bold px-8 py-3 rounded shadow-lg transition-transform transform hover:scale-105 text-base">
                            Acessar Link
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
{{-- Seção Software_PET --}}
<section class="relative min-h-screen flex flex-col justify-center items-center py-16 px-0 overflow-hidden light-bg"
    style="--bg-image: url('{{ asset('img/textura.png') }}');">

    <div class="max-w-7xl mx-auto relative z-10 w-full py-12 px-6">

        {{-- Card Container --}}
        <div class="w-full p-8 md:p-10 border-2 border-[#2BD885]"
            style="background-color: rgba(31, 49, 40, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35);">

            {{-- Container Principal - Mobile: vertical | Desktop: horizontal com linha vertical --}}
            <div class="flex flex-col md:flex-row gap-0 items-stretch">

                {{-- Coluna Esquerda: Software_PET --}}
                <div class="w-full md:w-1/2 p-6 md:p-8 flex flex-col gap-6">
                    <h3 class="text-white text-2xl md:text-3xl font-semibold">
                        Software_PET
                    </h3>

                    <div class="space-y-4 text-gray-200 text-base md:text-lg leading-relaxed">
                        <p>Software_PET é um software inédito no Brasil para acupunturistas veterinários.</p>
                        <p>Pesquisa a localização e as funções de cada ponto de acupuntura. Compare os pontos entre Cão, Gato e Humano.</p>
                        <p>Busque e elabore as combinações de pontos para tratar seus pacientes.</p>
                        <p>Edite o alimento o banco de dados com novas funções para cada ponto.</p>
                        <p>Organize os tratamentos e imprima para usar no atendimento.</p>
                    </div>

                    {{-- Imagem/Placeholder --}}
                    <div class="bg-gray-300 rounded h-32 w-32 flex items-center justify-center">
                        <span class="text-gray-600 text-sm">Imagem</span>
                    </div>
                </div>

                {{-- Linha Divisória - Horizontal no mobile, Vertical no desktop --}}
                <div class="relative">
                    {{-- Linha horizontal (mobile) --}}
                    <div class="md:hidden w-full h-0.5 bg-[#2BD885] my-8"></div>

                    {{-- Linha vertical (desktop) --}}
                    <div class="hidden md:block w-0.5 h-full bg-[#2BD885] mx-8"></div>
                </div>

                {{-- Coluna Direita: Conteúdos --}}
                <div class="w-full md:w-1/2 p-6 md:p-8 flex flex-col justify-between">
                    <div class="flex-grow">
                        <h3 class="text-[#2BD885] text-2xl md:text-3xl font-semibold mb-6">
                            Conteúdos:
                        </h3>

                        <ul class="text-gray-200 text-sm md:text-base space-y-2 leading-relaxed">
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>ATLAS de meridianos</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>ATLAS de pontos (Cão, Gato, Humano)</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>ATLAS de Posição, Medidas, 5 Elementos, Relógio orgânico</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>TABELAS de Tonificação, Sedação, Extras, Yuan, Luo, Xi, He, Hui, 5 Elementos</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>EDITOR de banco de dados</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BUSCA de pontos</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BUSCA e elabora combinações de pontos para doenças</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BLOCO de notas para organizar, salvar e imprimir</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BACKUP / RESTAURAÇÃO do sistema</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>SISTEMA de SENHA para proteção</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Botões: Acessar Vídeo e Acessar Link --}}
                    <div class="mt-8 flex flex-col md:flex-row gap-4 justify-center md:justify-end">
                        <button class="bg-[#A3C847] hover:bg-[#96b03a] text-brand-dark font-bold px-8 py-3 rounded shadow-lg transition-transform transform hover:scale-105 text-base">
                            Acessar Vídeo
                        </button>
                        <button class="bg-[#2BD885] hover:bg-[#25b870] text-brand-dark font-bold px-8 py-3 rounded shadow-lg transition-transform transform hover:scale-105 text-base">
                            Acessar Link
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
{{-- Seção Software_Aurículo --}}
<section
    class="relative min-h-screen flex flex-col justify-center items-center py-16 px-0 overflow-hidden dark-bg"
    style="--bg-image: url('{{ asset('img/textura.png') }}');">

    <div class="max-w-7xl mx-auto relative z-10 w-full py-12 px-6">

        {{-- Card Container --}}
        <div class="w-full p-8 md:p-10 border-2 border-[#2BD885]"
            style="background-color: rgba(31, 49, 40, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35);">

            {{-- Container Principal - Mobile: vertical | Desktop: horizontal com linha vertical --}}
            <div class="flex flex-col md:flex-row gap-0 items-stretch">

                {{-- Coluna Esquerda: Software_Aurículo --}}
                <div class="w-full md:w-1/2 p-6 md:p-8 flex flex-col gap-6">
                    <h3 class="text-white text-2xl md:text-3xl font-semibold">
                        Software_Aurículo
                    </h3>

                    <div class="space-y-4 text-gray-200 text-base md:text-lg leading-relaxed">
                        <p>O Software_AURÍCULO é um software de acupuntura auricular. Foi desenvolvido tanto para expedientes quanto para iniciantes em acupuntura auricular.</p>
                        <p>Poderá cadastrar pacientes, criar fichas de atendimento e agendar seus compromissos.</p>
                        <p>Identifica a localização exata e as funções de cada ponto de acupuntura.</p>
                        <p>Pode elaborar e buscar as combinações de pontos e imprimir para tratar seus pacientes.</p>
                        <p>Permite editar o banco de dados com novas funções para cada ponto, assim poderá potencializar seu banco de dados.</p>
                    </div>

                    {{-- Imagem/Placeholder --}}
                    <div class="bg-gray-300 rounded h-32 w-32 flex items-center justify-center">
                        <span class="text-gray-600 text-sm">Imagem</span>
                    </div>
                </div>

                {{-- Linha Divisória - Horizontal no mobile, Vertical no desktop --}}
                <div class="relative">
                    {{-- Linha horizontal (mobile) --}}
                    <div class="md:hidden w-full h-0.5 bg-[#2BD885] my-8"></div>

                    {{-- Linha vertical (desktop) --}}
                    <div class="hidden md:block w-0.5 h-full bg-[#2BD885] mx-8"></div>
                </div>

                {{-- Coluna Direita: Conteúdos --}}
                <div class="w-full md:w-1/2 p-6 md:p-8 flex flex-col justify-between">
                    <div class="flex-grow">
                        <h3 class="text-[#2BD885] text-2xl md:text-3xl font-semibold mb-6">
                            Conteúdos:
                        </h3>

                        <ul class="text-gray-200 text-sm md:text-base space-y-2 leading-relaxed">
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>AGENDA</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>CADASTRO de pacientes</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>ANAMNESE de pacientes</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>FICHAS de atendimentos</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BUSCAR e ELABORAR protocolos para cada atendimentos</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>ATLAS chinesa</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>ATLAS de medidas, 5 Elementos, Pulsos, Relógio orgânico</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>EDITOR de banco de dados</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BUSCA de pontos auricular</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BUSCA de combinações de pontos para doenças</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BLOCO de notas para organizar, salvar e imprimir</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>BACKUP / RESTAURAÇÃO de sistema</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-[#2BD885] mt-1">✓</span>
                                <span>SISTEMA de SENHA para proteção</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Botões: Acessar Vídeo e Acessar Link --}}
                    <div class="mt-8 flex flex-col md:flex-row gap-4 justify-center md:justify-end">
                        <button class="bg-[#A3C847] hover:bg-[#96b03a] text-brand-dark font-bold px-8 py-3 rounded shadow-lg transition-transform transform hover:scale-105 text-base">
                            Acessar Vídeo
                        </button>
                        <button class="bg-[#2BD885] hover:bg-[#25b870] text-brand-dark font-bold px-8 py-3 rounded shadow-lg transition-transform transform hover:scale-105 text-base">
                            Acessar Link
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>