{{-- Hero Section --}}
    <section  id="hero" class="relative h-screen min-h-[600px] flex flex-col justify-center items-center text-center px-4 overflow-hidden scroll-mt-[80px]">

        {{-- Imagem de Fundo --}}
        <div class="absolute inset-0 w-full h-full z-0 animate-fade-up animate-once animate-duration-[600ms] animate-delay-[50ms] animate-ease-in animate-normal animate-fill-forwards">
            <img src="{{ asset('img/Fundo.png') }}"
                class="w-full h-full object-cover object-center brightness-90 "
                alt="Background Bambu">
        </div>

        {{-- Overlay leve para garantir leitura do texto --}}
        <div class="absolute inset-0 bg-black/15 z-0"></div>

        {{-- Conteúdo Principal --}}
        <div class="relative z-10 max-w-4xl mx-auto mt-16 animate-fade-up animate-once animate-duration-[600ms] animate-delay-[50ms] animate-ease-in animate-normal animate-fill-forwards">
            <h1 class="text-brand-principal-text text-5xl md:text-7xl font-semibold mb-6 drop-shadow-xl px-4 ">
                O Futuro da Acupuntura
            </h1>
            <p class="text-brand-secondary-text text-xl md:text-xl font-light max-w-2xl mx-auto leading-relaxed drop-shadow-lg px-4">
                Unindo a sabedoria ancestral dos meridianos com a precisão absoluta da tecnologia moderna.
            </p>
        </div>
    </section>