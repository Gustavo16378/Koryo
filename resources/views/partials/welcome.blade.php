<section id="welcome"
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-6 overflow-hidden dark-bg scroll-mt-[80px]"
        style="--bg-image: url('{{ asset('img/textura.png') }}');">

        {{-- Decoração Bambu (Background) --}}
        {{-- Topo Direito --}}
        <div class="absolute -top-6 -right-5 w-48 md:w-64 opacity-60 pointer-events-none rotate-180">
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
            <div class="flex flex-col md:flex-row items-center gap-12 md:gap-16 px-4 md:px-24">

                {{-- Coluna Texto --}}
                <div class="w-full md:w-1/2 flex flex-col gap-8 text-left">
                    <h2 class="text-[#2BD885] text-4xl md:text-5xl font-medium tracking-wide ">
                        Seja bem-vindo ao nosso site
                    </h2>

                    <p class="text-gray-300 text-lg md:text-lg leading-relaxed font-light pl-6 md:ml-6">
                        O portal Koryo foi preparado para auxiliar profissionais da área da saúde. Uma ferramenta online que estava faltando para auxiliar os profissionais de acupuntura. Acesse onde quer que esteja via Notebooks, Smartphones, Tablets ou iPads...
                    </p>

                    <div class="pl-6">
                        <button class="bg-[#2BD885] hover:bg-[#25b870] text-koryo-dark font-bold py-3 px-8 rounded shadow-lg transition-transform transform hover:scale-105 text-base uppercase tracking-wider md:ml-6">
                            Saiba Mais
                        </button>
                    </div>
                </div>

                {{-- Coluna Imagem --}}
                <div class="w-full md:w-1/2 flex justify-center md:justify-end">
                    <div class="relative w-full max-w-md aspect-square rounded overflow-hidden group shadow-2xl">
                        {{-- Imagem Background --}}
                        <img src="{{ asset('img/CachorroGato.png') }}"
                            alt="Acupuntura Veterinária"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                        {{-- Texto Sobreposto --}}
                        <div class="absolute inset-0 flex flex-col items-center justify-center p-4">
                            <p class="text-white text-4xl md:text-4xl font-light drop-shadow-md leading-tight mr-50">
                                Acupuntura
                            </p>
                            <p class="text-white text-6xl md:text-6xl font-bold drop-shadow-md leading-tight">
                                Veterinária
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Linha Inferior --}}
            <div class="mt-12 w-full opacity-100">
                <img src="{{ asset('img/Linha.png') }}" alt="Divisor" class="w-full h-auto">
            </div>

        </div>
    </section>