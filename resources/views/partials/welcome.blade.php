<section id="welcome"
    class="relative min-h-screen flex flex-col justify-center py-16 px-6 overflow-hidden dark-bg scroll-mt-[80px]"
    style="--bg-image: url('{{ asset('img/textura.png') }}');">

    {{-- Decoração --}}
    <div class="absolute -top-6 -right-5 w-48 md:w-64 opacity-60 pointer-events-none rotate-180">
        <img src="{{ asset('img/bambu.png') }}" class="w-full">
    </div>

    <div class="absolute -bottom-6 -left-5 w-48 md:w-64 opacity-60 pointer-events-none">
        <img src="{{ asset('img/bambu.png') }}" class="w-full">
    </div>

    <div class="max-w-7xl mx-auto relative z-10 w-full">

        {{-- Linha Superior --}}
        <div class="mb-10 opacity-80">
            <img src="{{ asset('img/Linha.png') }}" class="w-full">
        </div>

        {{-- Conteúdo --}}
        <div class="flex flex-col md:flex-row gap-12 md:gap-16 px-4 md:px-24">

            {{-- TEXTO --}}
            <div class="w-full md:w-1/2 flex flex-col justify-center gap-8 text-left">

                <h2 class="text-[#2BD885] text-4xl md:text-5xl font-medium tracking-wide">
                    Seja bem-vindo ao nosso site
                </h2>

                <p class="text-gray-300 text-lg leading-relaxed font-light pl-6">
                    O portal foi preparado para auxiliar profissionais da área da saúde.
                    Uma ferramenta online que estava faltando para auxiliar os profissionais de acupuntura.
                    Acesse onde quer que esteja via Notebooks, Smartphones, Tablets ou iPads...
                </p>

                <div class="pl-6">
                    <button
                        class="bg-[#2BD885] hover:bg-[#25b870] text-brand-dark font-bold py-3 px-8 rounded
                               shadow-lg transition-transform hover:scale-105 uppercase tracking-wider">
                        Saiba Mais
                    </button>
                </div>

            </div>

            {{-- IMAGEM / CAROUSEL --}}
            <div class="w-full md:w-1/2 flex justify-center md:justify-end">

                <div
                    x-data="simpleFadeCarousel({ interval: 5000, count: 3 })"
                    class="relative w-full md:max-w-md md:h-[420px] aspect-[4/5]
                           rounded overflow-hidden shadow-2xl">

                    <a href="#products" class="absolute inset-0 z-20"></a>

                    {{-- Slides --}}
                    <img src="{{ asset('img/CachorroGato.png') }}"
                        class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700"
                        :class="isActive(0) ? 'opacity-100' : 'opacity-0'">

                    <img src="{{ asset('img/acupuntura_carro.png') }}"
                        class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700"
                        :class="isActive(1) ? 'opacity-100' : 'opacity-0'">

                    <img src="{{ asset('img/telas_carro.png') }}"
                        class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700"
                        :class="isActive(2) ? 'opacity-100' : 'opacity-0'">

                    {{-- TEXTO CENTRAL DA IMAGEM --}}
                    <div class="absolute inset-0 flex flex-col items-center justify-center z-10 pointer-events-none" :class="isActive(0) ? 'opacity-100' : 'opacity-0'">

                        <p class="text-white text-4xl font-light leading-tight drop-shadow-md">
                            Acupuntura
                        </p>

                        <p class="text-white text-6xl font-bold leading-tight drop-shadow-md">
                            Veterinária
                        </p>

                    </div>
                    {{-- TEXTO CENTRAL DA IMAGEM --}}
                    <div class="absolute inset-0 flex flex-col items-center justify-center z-10 pointer-events-none" :class="isActive(1) ? 'opacity-100' : 'opacity-0'">

                        <p class="text-white text-4xl font-light leading-tight drop-shadow-md">
                            Acupuntura
                        </p>

                        <p class="text-white text-6xl font-bold leading-tight drop-shadow-md">
                            Sistêmica
                        </p>

                    </div>
                    {{-- TEXTO CENTRAL DA IMAGEM --}}
                    <div class="absolute inset-0 flex flex-col items-center justify-center z-10 pointer-events-none" :class="isActive(2) ? 'opacity-100' : 'opacity-0'">

                        <p class="text-white text-4xl font-light leading-tight drop-shadow-md">
                            Sistema
                        </p>

                        <p class="text-white text-6xl font-bold leading-tight drop-shadow-md">
                            Online
                        </p>

                    </div>
                </div>
            </div>
        </div>

        {{-- Linha Inferior --}}
        <div class="mt-12">
            <img src="{{ asset('img/Linha.png') }}" class="w-full">
        </div>

    </div>
</section>
