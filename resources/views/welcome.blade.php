<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koryo</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans bg-black">

    {{-- Navbar (Header Escuro) --}}
    <header class="w-full bg-koryo-dark py-4 px-6 md:px-12 flex justify-between items-center fixed top-0 z-50 h-[80px] animate-fade animate-once animate-duration-500 animate-delay-[50ms] animate-ease-in animate-normal animate-fill-forwards">
        {{-- Logo --}}
        <div class="flex items-center shrink-0 ">
            <img src="{{ asset('img/logo.png') }}" alt="Koryo Logo" class="h-10 md:h-18 w-auto object-contain">
        </div>

        {{-- Desktop Navigation (Escondido no Mobile, Visível no Desktop) --}}
        <nav class="hidden md:flex gap-8 items-center">
            <a href="#" class="text-koryo-principal-text text-base hover:text-koryo-green transition font-medium border-b-2 border-koryo-green">Principal</a>
            <a href="#" class="text-koryo-secondary-text text-base hover:text-koryo-principal-text transition font-medium">Produtos</a>
            <a href="#" class="text-koryo-secondary-text text-base hover:text-koryo-principal-text transition font-medium">Empresa</a>
            <a href="#" class="text-koryo-secondary-text text-base hover:text-koryo-principal-text transition font-medium">Contato</a>
        </nav>

        {{-- Desktop Button (Escondido no Mobile, Visível no Desktop) --}}
        <div class="hidden md:block">
            <a href="#" class="bg-koryo-green text-koryo-dark px-6 py-2 rounded font-semibold hover:bg-opacity-90 transition shadow-sm text-sm">
                Contato WhatsApp
            </a>
        </div>

        {{-- Hamburger (Visível no Mobile, Escondido no Desktop) --}}
        <button class="md:hidden text-koryo-green focus:outline-none p-2 space-y-1.5 cursor-pointer hover:opacity-80 transition">
            <div class="w-8 h-1 bg-koryo-green rounded-full"></div>
            <div class="w-8 h-1 bg-koryo-green rounded-full"></div>
            <div class="w-8 h-1 bg-koryo-green rounded-full"></div>
        </button>
    </header>

    {{-- Hero Section --}}
    <section class="relative h-screen min-h-[600px] flex flex-col justify-center items-center text-center px-4 overflow-hidden">

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
            <h1 class="text-koryo-principal-text text-5xl md:text-7xl font-semibold mb-6 drop-shadow-xl px-4 ">
                O Futuro da Acupuntura
            </h1>
            <p class="text-koryo-secondary-text text-xl md:text-xl font-light max-w-2xl mx-auto leading-relaxed drop-shadow-lg px-4">
                Unindo a sabedoria ancestral dos meridianos com a precisão absoluta da tecnologia moderna.
            </p>
        </div>
    </section>


    {{-- Seção Bem-vindo --}}
    <section
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-6 overflow-hidden"
        style="
    background-image:
      linear-gradient(rgba(17,34,26,0.85), rgba(17,34,26,0.85)),
      url({{ asset('img/textura.png') }});
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    ">

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
                <div class="w-full md:w-1/2 flex flex-col gap-6 text-left">
                    <h2 class="text-[#2BD885] text-4xl md:text-5xl font-medium tracking-wide">
                        Seja bem-vindo ao nosso site
                    </h2>

                    <p class="text-gray-300 text-lg md:text-lg leading-relaxed font-light pl-6">
                        O portal Koryo foi preparado para auxiliar profissionais da área da saúde. Uma ferramenta online que estava faltando para auxiliar os profissionais de acupuntura. Acesse onde quer que esteja via Notebooks, Smartphones, Tablets ou iPads...
                    </p>

                    <div class="pl-6">
                        <button class="bg-[#2BD885] hover:bg-[#25b870] text-koryo-dark font-bold py-3 px-8 rounded shadow-lg transition-transform transform hover:scale-105 text-base uppercase tracking-wider">
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
    {{-- Seção Acupuntura Sistêmica --}}
    <section class="relative min-h-screen flex flex-col justify-center items-center py-16 px-0 overflow-hidden"
        style="
    background-image: 
      linear-gradient(rgba(31,60,53,0.80), rgba(31,60,53,0.80)),
      url({{ asset('img/textura.png') }});
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    ">

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
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-0 overflow-hidden"
        style="
    background-image:
      linear-gradient(rgba(17,34,26,0.85), rgba(17,34,26,0.85)),
      url({{ asset('img/textura.png') }});
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    ">

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
    <section class="relative min-h-screen flex flex-col justify-center items-center py-16 px-0 overflow-hidden"
        style="
    background-image: 
      linear-gradient(rgba(31,60,53,0.80), rgba(31,60,53,0.80)),
      url({{ asset('img/textura.png') }});
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    ">

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

    {{-- Seção Condições de Uso --}}
    <section
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-6 overflow-hidden"
        style="
    background-image:
      linear-gradient(rgba(17,34,26,0.85), rgba(17,34,26,0.85)),
      url({{ asset('img/textura.png') }});
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    ">

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

    {{-- Seção Programas para Computador --}}
    <section class="relative min-h-screen flex flex-col justify-center items-center py-16 px-0 overflow-hidden"
        style="
    background-image: 
      linear-gradient(rgba(31,60,53,0.80), rgba(31,60,53,0.80)),
      url({{ asset('img/textura.png') }});
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    ">

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

                    {{-- Coluna Esquerda: KoryoSoft_CAD4 --}}
                    <div class="w-full md:w-1/2 p-6 md:p-8 flex flex-col gap-6">
                        <h3 class="text-white text-2xl md:text-3xl font-semibold">
                            KoryoSoft_CAD4
                        </h3>

                        <div class="space-y-4 text-gray-200 text-base md:text-lg leading-relaxed">
                            <p>Koryosoft_CAD4 é a versão atualizada de koryosoft_CAD. Foi incluído os principais pontos EXTRAS.</p>
                            <p>Koryosoft_CAD4 é um software para auxiliar os acupunturistas. Poderá cadastrar pacientes, criar fichas de atendimentos e agendar seus compromissos.</p>
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
                            <button class="bg-[#2BD885] hover:bg-[#25b870] text-koryo-dark font-bold px-8 py-3 rounded shadow-lg transition-transform transform hover:scale-105 text-base">
                                Acessar Link
                            </button>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    {{-- Seção Koryosoft_HAND4 --}}
    <section
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-0 overflow-hidden"
        style="
    background-image:
      linear-gradient(rgba(17,34,26,0.85), rgba(17,34,26,0.85)),
      url({{ asset('img/textura.png') }});
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    ">

        <div class="max-w-7xl mx-auto relative z-10 w-full py-12 px-6">

            {{-- Card Container --}}
            <div class="w-full p-8 md:p-10 border-2 border-[#2BD885]"
                style="background-color: rgba(31, 49, 40, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35);">

                {{-- Container Principal - Mobile: vertical | Desktop: horizontal com linha vertical --}}
                <div class="flex flex-col md:flex-row gap-0 items-stretch">

                    {{-- Coluna Esquerda: Koryosoft_HAND4 --}}
                    <div class="w-full md:w-1/2 p-6 md:p-8 flex flex-col gap-6">
                        <h3 class="text-white text-2xl md:text-3xl font-semibold">
                            Koryosoft_HAND4
                        </h3>

                        <div class="space-y-4 text-gray-200 text-base md:text-lg leading-relaxed">
                            <p>Koryosoft_HAND4 é um software de acupuntura coreana da mão. Pode ser utilizado pelos profissionais e também, pelo público em geral visto que sua utilização é de muito simples.</p>
                            <p>Utilizando Koryosoft_HAND4 você identificada a localização exata e as funções de cada ponto de acupuntura coreana.</p>
                            <p>Com o Koryosoft_HAND4 você elabora e busca as combinações de pontos e imprimir para tratar seus pacientes.</p>
                            <p>Koryosoft_HAND4 permite editar o banco de dados com novas funções para cada ponto assim, personalize e potencializa a capacidade do sistema.</p>
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
                            <button class="bg-[#2BD885] hover:bg-[#25b870] text-koryo-dark font-bold px-8 py-3 rounded shadow-lg transition-transform transform hover:scale-105 text-base">
                                Acessar Link
                            </button>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    {{-- Seção Koryosoft_PET --}}
    <section class="relative min-h-screen flex flex-col justify-center items-center py-16 px-0 overflow-hidden"
        style="
    background-image: 
      linear-gradient(rgba(31,60,53,0.80), rgba(31,60,53,0.80)),
      url({{ asset('img/textura.png') }});
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    ">

        <div class="max-w-7xl mx-auto relative z-10 w-full py-12 px-6">

            {{-- Card Container --}}
            <div class="w-full p-8 md:p-10 border-2 border-[#2BD885]"
                style="background-color: rgba(31, 49, 40, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35);">

                {{-- Container Principal - Mobile: vertical | Desktop: horizontal com linha vertical --}}
                <div class="flex flex-col md:flex-row gap-0 items-stretch">

                    {{-- Coluna Esquerda: Koryosoft_PET --}}
                    <div class="w-full md:w-1/2 p-6 md:p-8 flex flex-col gap-6">
                        <h3 class="text-white text-2xl md:text-3xl font-semibold">
                            Koryosoft_PET
                        </h3>

                        <div class="space-y-4 text-gray-200 text-base md:text-lg leading-relaxed">
                            <p>Koryosoft_PET é um software inédito no Brasil para acupunturistas veterinários.</p>
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
                            <button class="bg-[#A3C847] hover:bg-[#96b03a] text-koryo-dark font-bold px-8 py-3 rounded shadow-lg transition-transform transform hover:scale-105 text-base">
                                Acessar Vídeo
                            </button>
                            <button class="bg-[#2BD885] hover:bg-[#25b870] text-koryo-dark font-bold px-8 py-3 rounded shadow-lg transition-transform transform hover:scale-105 text-base">
                                Acessar Link
                            </button>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    {{-- Seção Koryosoft_Aurículo --}}
    <section
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-0 overflow-hidden"
        style="
    background-image:
      linear-gradient(rgba(17,34,26,0.85), rgba(17,34,26,0.85)),
      url({{ asset('img/textura.png') }});
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    ">

        <div class="max-w-7xl mx-auto relative z-10 w-full py-12 px-6">

            {{-- Card Container --}}
            <div class="w-full p-8 md:p-10 border-2 border-[#2BD885]"
                style="background-color: rgba(31, 49, 40, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35);">

                {{-- Container Principal - Mobile: vertical | Desktop: horizontal com linha vertical --}}
                <div class="flex flex-col md:flex-row gap-0 items-stretch">

                    {{-- Coluna Esquerda: Koryosoft_Aurículo --}}
                    <div class="w-full md:w-1/2 p-6 md:p-8 flex flex-col gap-6">
                        <h3 class="text-white text-2xl md:text-3xl font-semibold">
                            Koryosoft_Aurículo
                        </h3>

                        <div class="space-y-4 text-gray-200 text-base md:text-lg leading-relaxed">
                            <p>O Koryosoft_AURÎCULO é um software de acupuntura auricular. Foi desenvolvido tanto para expedientes quanto para iniciantes em acupuntura auricular.</p>
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
                            <button class="bg-[#A3C847] hover:bg-[#96b03a] text-koryo-dark font-bold px-8 py-3 rounded shadow-lg transition-transform transform hover:scale-105 text-base">
                                Acessar Vídeo
                            </button>
                            <button class="bg-[#2BD885] hover:bg-[#25b870] text-koryo-dark font-bold px-8 py-3 rounded shadow-lg transition-transform transform hover:scale-105 text-base">
                                Acessar Link
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Seção Licenças e Condições (Mobile-first) --}}
    <section
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-6 overflow-hidden"
        style="
    background-image:
      linear-gradient(rgba(31,60,53,0.80), rgba(31,60,53,0.80)),
      url({{ asset('img/textura.png') }});
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    ">

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

    {{-- Seção Livros e Atlas de Bolso 1 --}}
    <section
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-6 overflow-hidden"
        style="
    background-image:
      linear-gradient(rgba(17,34,26,0.85), rgba(17,34,26,0.85)),
      url({{ asset('img/textura.png') }});
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    ">

        <div class="max-w-7xl mx-auto relative z-10 w-full">

            {{-- Título da Seção --}}
            <div class="w-full mb-12 text-center">
                <h2 class="text-white text-3xl md:text-4xl font-medium">
                    Livros e atlas de Bolso
                </h2>
            </div>

            {{-- Card Principal --}}
            <div class="w-full p-8 md:p-10 border-2 border-[#2BD885]"
                style="background-color: rgba(31, 60, 53, 0.6); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35);">

                {{-- Título e Subtítulo --}}
                <div class="mb-6">
                    <h3 class="text-white text-3xl md:text-4xl font-semibold mb-2">
                        Acupuntura Chinesa
                    </h3>
                    <p class="text-gray-300 text-lg md:text-xl italic">
                        Manual prático de acupuntura 11ª EDIÇÃO
                    </p>
                </div>

                {{-- Texto Descritivo --}}
                <div class="space-y-4 text-gray-200 text-base md:text-lg leading-relaxed mb-8">
                    <p>Para ser um bom acupunturista, deve-se conhecer bem as funções de cada ponto de acupuntura, e também suas localizações.</p>
                    <p>Na prática clínica, muitas vezes necessitamos de um pequeno e simples manual, somente para relembrar os pontos que desejamos utilizar. Isto porque, na grande maioria das vezes, o acupunturista já conhece as funções dos pontos, mas tem dúvidas quanto à sua localização, e vice-versa.</p>
                    <p>Este Manual Prático de Acupuntura foi elaborado para auxiliar os acupunturistas, desde os iniciantes até os experientes. Além de todos os 361 pontos de 14 meridianos, foram incluídos os principais pontos EXTRAS e os Vasos Extraordinários. Todos eles foram sinalizados com a maior precisão possível no modelo de anatomia humana em 3D.</p>
                    <p>E também foram colocadas as principais funções de cada ponto.</p>
                </div>

                {{-- Linha Divisória --}}
                <div class="w-full h-0.5 bg-[#2BD885] mb-8"></div>

                {{-- Container: Características + Imagem/Botão --}}
                <div class="flex flex-col md:flex-row gap-8 items-start">
                    {{-- Características --}}
                    <div class="w-full md:w-3/5">
                        <h4 class="text-[#2BD885] text-2xl md:text-3xl font-semibold mb-4">
                            Características
                        </h4>
                        <ul class="text-gray-200 text-base md:text-lg space-y-2 leading-relaxed list-disc list-inside pl-4">
                            <li>Autor: Choo H. Kim</li>
                            <li>Tamanho de bolso (10 cm x 14 cm)</li>
                            <li>284 páginas</li>
                            <li>Ilustrações coloridas de Anatomia em 3D</li>
                            <li>Todos os 14 meridianos completos</li>
                            <li>Todos os 361 pontos completos</li>
                            <li>As principais 56 pontos extras</li>
                            <li>Os 8 vasos Extraordinários</li>
                            <li>Todos os pontos em nome chinês, localização e as funções</li>
                            <li>Todas as tabelas importantes</li>
                        </ul>
                    </div>

                    {{-- Imagem e Botão --}}
                    <div class="w-full md:w-2/5 flex flex-col items-center gap-6">
                        {{-- Imagem do Livro --}}
                        <div class="bg-gray-300 rounded-lg w-64 h-80 flex items-center justify-center shadow-xl">
                            <span class="text-gray-600 text-sm">Imagem do Livro</span>
                        </div>

                        {{-- Botão Acessar Link --}}
                        <button class="bg-[#2BD885] hover:bg-[#25b870] text-koryo-dark font-bold px-12 py-3 rounded shadow-lg transition-transform transform hover:scale-105 text-lg w-full md:w-auto">
                            Acessar Link
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Seção Livros e Atlas de Bolso 2 --}}
    <section
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-6 overflow-hidden"
        style="
    background-image:
      linear-gradient(rgba(31,60,53,0.80), rgba(31,60,53,0.80)),
      url({{ asset('img/textura.png') }});
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    ">

        <div class="max-w-7xl mx-auto relative z-10 w-full">

            {{-- Card Principal --}}
            <div class="w-full p-8 md:p-10 border-2 border-[#2BD885]"
                style="background-color: rgba(31, 49, 40, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35);">

                {{-- Título e Subtítulo --}}
                <div class="mb-6">
                    <h3 class="text-white text-3xl md:text-4xl font-semibold mb-2">
                        Acupuntura Chinesa
                    </h3>
                    <p class="text-gray-300 text-lg md:text-xl italic">
                        Manual prático de acupuntura 11ª EDIÇÃO
                    </p>
                </div>

                {{-- Texto Descritivo --}}
                <div class="space-y-4 text-gray-200 text-base md:text-lg leading-relaxed mb-8">
                    <p>Para ser um bom acupunturista, deve-se conhecer bem as funções de cada ponto de acupuntura, e também suas localizações.</p>
                    <p>Na prática clínica, muitas vezes necessitamos de um pequeno e simples manual, somente para relembrar os pontos que desejamos utilizar. Isto porque, na grande maioria das vezes, o acupunturista já conhece as funções dos pontos, mas tem dúvidas quanto à sua localização, e vice-versa.</p>
                    <p>Este Manual Prático de Acupuntura foi elaborado para auxiliar os acupunturistas, desde os iniciantes até os experientes. Além de todos os 361 pontos de 14 meridianos, foram incluídos os principais pontos EXTRAS e os Vasos Extraordinários. Todos eles foram sinalizados com a maior precisão possível no modelo de anatomia humana em 3D.</p>
                    <p>E também foram colocadas as principais funções de cada ponto.</p>
                </div>

                {{-- Linha Divisória --}}
                <div class="w-full h-0.5 bg-[#2BD885] mb-8"></div>

                {{-- Container: Características + Imagem/Botão --}}
                <div class="flex flex-col md:flex-row gap-8 items-start">
                    {{-- Características --}}
                    <div class="w-full md:w-3/5">
                        <h4 class="text-[#2BD885] text-2xl md:text-3xl font-semibold mb-4">
                            Características
                        </h4>
                        <ul class="text-gray-200 text-base md:text-lg space-y-2 leading-relaxed list-disc list-inside pl-4">
                            <li>Autor: Choo H. Kim</li>
                            <li>Tamanho de bolso (10 cm x 14 cm)</li>
                            <li>284 páginas</li>
                            <li>Ilustrações coloridas de Anatomia em 3D</li>
                            <li>Todos os 14 meridianos completos</li>
                            <li>Todos os 361 pontos completos</li>
                            <li>As principais 56 pontos extras</li>
                            <li>Os 8 vasos Extraordinários</li>
                            <li>Todos os pontos em nome chinês, localização e as funções</li>
                            <li>Todas as tabelas importantes</li>
                        </ul>
                    </div>

                    {{-- Imagem e Botão --}}
                    <div class="w-full md:w-2/5 flex flex-col items-center gap-6">
                        {{-- Imagem do Livro --}}
                        <div class="bg-gray-300 rounded-lg w-64 h-80 flex items-center justify-center shadow-xl">
                            <span class="text-gray-600 text-sm">Imagem do Livro</span>
                        </div>

                        {{-- Botão Acessar Link --}}
                        <button class="bg-[#2BD885] hover:bg-[#25b870] text-koryo-dark font-bold px-12 py-3 rounded shadow-lg transition-transform transform hover:scale-105 text-lg w-full md:w-auto">
                            Acessar Link
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Seção Livros e Atlas de Bolso 3 --}}
    <section
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-6 overflow-hidden"
        style="
    background-image:
      linear-gradient(rgba(17,34,26,0.85), rgba(17,34,26,0.85)),
      url({{ asset('img/textura.png') }});
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    ">

        <div class="max-w-7xl mx-auto relative z-10 w-full">

            {{-- Card Principal --}}
            <div class="w-full p-8 md:p-10 border-2 border-[#2BD885]"
                style="background-color: rgba(31, 60, 53, 0.6); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35);">

                {{-- Título e Subtítulo --}}
                <div class="mb-6">
                    <h3 class="text-white text-3xl md:text-4xl font-semibold mb-2">
                        Acupuntura Chinesa
                    </h3>
                    <p class="text-gray-300 text-lg md:text-xl italic">
                        Manual prático de acupuntura 11ª EDIÇÃO
                    </p>
                </div>

                {{-- Texto Descritivo --}}
                <div class="space-y-4 text-gray-200 text-base md:text-lg leading-relaxed mb-8">
                    <p>Para ser um bom acupunturista, deve-se conhecer bem as funções de cada ponto de acupuntura, e também suas localizações.</p>
                    <p>Na prática clínica, muitas vezes necessitamos de um pequeno e simples manual, somente para relembrar os pontos que desejamos utilizar. Isto porque, na grande maioria das vezes, o acupunturista já conhece as funções dos pontos, mas tem dúvidas quanto à sua localização, e vice-versa.</p>
                    <p>Este Manual Prático de Acupuntura foi elaborado para auxiliar os acupunturistas, desde os iniciantes até os experientes. Além de todos os 361 pontos de 14 meridianos, foram incluídos os principais pontos EXTRAS e os Vasos Extraordinários. Todos eles foram sinalizados com a maior precisão possível no modelo de anatomia humana em 3D.</p>
                    <p>E também foram colocadas as principais funções de cada ponto.</p>
                </div>

                {{-- Linha Divisória --}}
                <div class="w-full h-0.5 bg-[#2BD885] mb-8"></div>

                {{-- Container: Características + Imagem/Botão --}}
                <div class="flex flex-col md:flex-row gap-8 items-start">
                    {{-- Características --}}
                    <div class="w-full md:w-3/5">
                        <h4 class="text-[#2BD885] text-2xl md:text-3xl font-semibold mb-4">
                            Características
                        </h4>
                        <ul class="text-gray-200 text-base md:text-lg space-y-2 leading-relaxed list-disc list-inside pl-4">
                            <li>Autor: Choo H. Kim</li>
                            <li>Tamanho de bolso (10 cm x 14 cm)</li>
                            <li>284 páginas</li>
                            <li>Ilustrações coloridas de Anatomia em 3D</li>
                            <li>Todos os 14 meridianos completos</li>
                            <li>Todos os 361 pontos completos</li>
                            <li>As principais 56 pontos extras</li>
                            <li>Os 8 vasos Extraordinários</li>
                            <li>Todos os pontos em nome chinês, localização e as funções</li>
                            <li>Todas as tabelas importantes</li>
                        </ul>
                    </div>

                    {{-- Imagem e Botão --}}
                    <div class="w-full md:w-2/5 flex flex-col items-center gap-6">
                        {{-- Imagem do Livro --}}
                        <div class="bg-gray-300 rounded-lg w-64 h-80 flex items-center justify-center shadow-xl">
                            <span class="text-gray-600 text-sm">Imagem do Livro</span>
                        </div>

                        {{-- Botão Acessar Link --}}
                        <button class="bg-[#2BD885] hover:bg-[#25b870] text-koryo-dark font-bold px-12 py-3 rounded shadow-lg transition-transform transform hover:scale-105 text-lg w-full md:w-auto">
                            Acessar Link
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Seção Acupuntura Coreana - Passo a Passo --}}
    <section
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-6 overflow-hidden"
        style="
    background-image:
      linear-gradient(rgba(31,60,53,0.80), rgba(31,60,53,0.80)),
      url({{ asset('img/textura.png') }});
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    ">

        <div class="max-w-7xl mx-auto relative z-10 w-full py-10 md:mx-16">

            {{-- Card Principal --}}
            <div class="w-full p-8 md:p-10 border-2 border-[#2BD885]"
                style="background-color: rgba(31, 49, 40, 1); box-shadow: 0px 0px 3px 2px rgba(43, 216, 133, 0.35);">

                {{-- Título --}}
                <div class="mb-8">
                    <h3 class="text-white text-3xl md:text-4xl font-semibold">
                        Acupuntura Coreana-Passo a Passo
                    </h3>
                </div>

                {{-- Grid de 4 Colunas (Mobile: 1 coluna | Tablet: 2 colunas | Desktop: 4 colunas) --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">

                    {{-- Coluna 1: Características --}}
                    <div>
                        <h4 class="text-[#2BD885] text-xl md:text-2xl font-semibold mb-4">
                            Características
                        </h4>
                        <ul class="text-gray-200 text-sm md:text-base space-y-2 leading-relaxed">
                            <li>• Autor: Choo Kim</li>
                            <li>• Editora: Ícone</li>
                            <li>• Capa: dura</li>
                            <li>• Tamanho: 24 cm x 16 cm</li>
                            <li>• 144 páginas</li>
                            <li>• Ilustrações coloridas</li>
                        </ul>
                    </div>

                    {{-- Coluna 2: Aprofundando na ACM --}}
                    <div>
                        <h4 class="text-[#2BD885] text-xl md:text-2xl font-semibold mb-4">
                            Aprofundando na ACM
                        </h4>
                        <ul class="text-gray-200 text-sm md:text-base space-y-2 leading-relaxed">
                            <li>• Micromeridianos (ki-mek)</li>
                            <li>• Método de estimulação</li>
                            <li>• Tonificação e Sedação do jang/bu</li>
                            <li>• 5 Elementos no controle do jang/bu</li>
                            <li>• Tratamento com o uso de relógio orgânico</li>
                        </ul>
                    </div>

                    {{-- Coluna 3: Pontos Principais --}}
                    <div>
                        <h4 class="text-[#2BD885] text-xl md:text-2xl font-semibold mb-4">
                            Pontos Principais
                        </h4>
                        <ul class="text-gray-200 text-sm md:text-base space-y-2 leading-relaxed">
                            <li>• 12 Pontos Nascente</li>
                            <li>• 12 Pontos Fonte</li>
                            <li>• 5 Pontos Shu antigo</li>
                            <li>• 12 Pontos MO</li>
                            <li>• 12 Pontos Shu dorsais</li>
                            <li>• 8 Pontos Extraordinários</li>
                        </ul>
                    </div>

                    {{-- Coluna 4: Diagnósticos --}}
                    <div>
                        <h4 class="text-[#2BD885] text-xl md:text-2xl font-semibold mb-4">
                            Diagnósticos
                        </h4>
                        <ul class="text-gray-200 text-sm md:text-base space-y-2 leading-relaxed">
                            <li>• Diagnóstico por pulso</li>
                            <li>• Diagnóstico por 3. 1 Constituição</li>
                            <li>• Diagnóstico por palpação do MO</li>
                            <li>• Exemplos de diagnóstico</li>
                        </ul>
                    </div>
                </div>

                {{-- Linha Divisória --}}
                <div class="w-full h-0.5 bg-[#2BD885] mb-8"></div>

                {{-- Container: Conteúdo/Tratamento + Imagem/Botão --}}
                <div class="flex flex-col md:flex-row gap-8 items-start">

                    {{-- Lado Esquerdo: Conteúdo, Tratamento e Métodos --}}
                    <div class="w-full md:w-3/5 space-y-8">

                        {{-- Grid: Conteúdo + Tratamento (2 colunas no desktop) --}}
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                            {{-- Conteúdo --}}
                            <div>
                                <h4 class="text-[#2BD885] text-xl md:text-2xl font-semibold mb-4">
                                    Conteúdo
                                </h4>
                                <ul class="text-gray-200 text-sm md:text-base space-y-2 leading-relaxed">
                                    <li>• Nomenclaturas</li>
                                    <li>• Princípio de correspondência</li>
                                    <li>• Pontos de correspondência</li>
                                    <li>• Os instrumentos de uso</li>
                                    <li>• Terapias de correspondência</li>
                                    <li>• Tratamento com terapias de correspondência</li>
                                </ul>
                            </div>

                            {{-- Tratamento para principais doenças --}}
                            <div>
                                <h4 class="text-[#2BD885] text-xl md:text-2xl font-semibold mb-4">
                                    Tratamento para principais doenças
                                </h4>
                                <ul class="text-gray-200 text-sm md:text-base space-y-2 leading-relaxed">
                                    <li>• Nomenclaturas</li>
                                    <li>• Princípio de correspondência</li>
                                    <li>• Pontos de correspondência</li>
                                    <li>• Os instrumentos de uso</li>
                                    <li>• Terapias de correspondência</li>
                                    <li>• Tratamento com terapias de correspondência</li>
                                </ul>
                            </div>
                        </div>

                        {{-- Métodos de Tratamento --}}
                        <div>
                            <h4 class="text-[#2BD885] text-xl md:text-2xl font-semibold mb-4">
                                Métodos de Tratamento
                            </h4>
                            <ul class="text-gray-200 text-sm md:text-base space-y-2 leading-relaxed">
                                <li>• Tratamento com 5 Elementos</li>
                                <li>• Outras técnicas de tratamento</li>
                                <li>• Tratamento com pontos extraordinários</li>
                            </ul>
                        </div>
                    </div>

                    {{-- Lado Direito: Imagens e Botão --}}
                    <div class="w-full md:w-2/5 flex flex-col items-center gap-6">
                        {{-- Imagens do Livro --}}
                        <div class="flex gap-4">
                            <div class="bg-gray-300 rounded-lg w-40 h-56 flex items-center justify-center shadow-xl">
                                <span class="text-gray-600 text-sm">Livro Capa</span>
                            </div>

                        </div>

                        {{-- Botão Acessar Link --}}
                        <button class="bg-[#2BD885] hover:bg-[#25b870] text-koryo-dark font-bold px-12 py-3 rounded shadow-lg transition-transform transform hover:scale-105 text-lg w-full md:w-auto">
                            Acessar Link
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Seção Sobre a Empresa --}}
    <section
        class="relative min-h-screen flex flex-col justify-center items-center py-16 px-6 overflow-hidden"
        style="
    background-image:
      linear-gradient(rgba(17,34,26,0.85), rgba(17,34,26,0.85)),
      url({{ asset('img/textura.png') }});
    background-size: cover;
    background-position: center;
    background-blend-mode:  multiply;
    ">

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

</body>


</html>