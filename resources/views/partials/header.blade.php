{{-- Header - SEM x-data AQUI! --}}
<header class="w-full bg-brand-dark py-4 px-6 md:px-12 flex justify-between items-center fixed top-0 z-50 h-[80px]">

    {{-- Logo --}}
    <div class="flex items-center shrink-0">
        <img src="{{ asset('img/Logo.jpg') }}" alt="Logo" class="h-12 md:h-16 w-auto object-contain rounded-sm">
    </div>

    {{-- Desktop Navigation --}}
    <nav class="hidden md:flex gap-8 items-center">
        {{-- Principal --}}
        <a
            href="#welcome"
            :class="$store.nav.is('welcome')
                ? 'text-brand-principal-text md:text-lg font-medium border-b-2 border-brand-green'
                : 'text-brand-secondary-text md:text-lg hover:text-brand-principal-text transition font-medium border-b-2 border-transparent'"
        >
            Principal
        </a>

        {{-- Produtos (Desktop dropdown) --}}
        <div class="relative group">
            <a
                href="#atlas"
                :class="$store.nav.is('products')
                    ? 'text-brand-principal-text md:text-lg font-medium border-b-2 border-brand-green'
                    : 'text-brand-secondary-text md:text-lg hover:text-brand-principal-text transition font-medium border-b-2 border-transparent'"
                class="inline-flex items-center gap-2"
            >
                Produtos
                <span class="text-brand-secondary-text group-hover:text-brand-principal-text transition">▾</span>
            </a>

            <div
                class="absolute left-0 mt-3 w-56 bg-brand-dark border border-brand-green/20 rounded-lg shadow-xl
                       opacity-0 invisible translate-y-1
                       group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                       transition-all duration-200"
            >
                <a href="#atlas" class="block px-4 py-3 text-brand-secondary-text hover:text-brand-principal-text hover:bg-white/5">
                    Atlas
                </a>
                <a href="#programs" class="block px-4 py-3 text-brand-secondary-text hover:text-brand-principal-text hover:bg-white/5">
                    Programas
                </a>
                <a href="#books" class="block px-4 py-3 text-brand-secondary-text hover:text-brand-principal-text hover:bg-white/5">
                    Livros
                </a>
            </div>
        </div>

        {{-- Empresa --}}
        <a
            href="#about"
            :class="$store.nav.is('about')
                ? 'text-brand-principal-text md:text-lg font-medium border-b-2 border-brand-green'
                : 'text-brand-secondary-text md:text-lg hover:text-brand-principal-text transition font-medium border-b-2 border-transparent'"
        >
            Empresa
        </a>

        {{-- Contato --}}
        <a
            href="#contact"
            :class="$store.nav.is('contact')
                ? 'text-brand-principal-text md:text-lg font-medium border-b-2 border-brand-green'
                : 'text-brand-secondary-text md:text-lg hover:text-brand-principal-text transition font-medium border-b-2 border-transparent'"
        >
            Contato
        </a>
    </nav>

    {{-- Desktop Button --}}
    <div class="hidden md:block">
        <a href="#contact" class="bg-brand-green text-brand-dark px-6 py-2 rounded font-semibold hover:bg-opacity-90 transition shadow-sm text-sm">
            Contato WhatsApp
        </a>
    </div>

    {{-- Hamburger Button --}}
    <button
        @click="$store.menu.toggle()"
        class="md:hidden text-brand-green focus:outline-none p-2 space-y-1.5 cursor-pointer z-[60]"
    >
        <div class="w-8 h-1 bg-brand-green rounded-full transition-all duration-300" :class="$store.menu.aberto ? 'rotate-45 translate-y-2.5' : ''"></div>
        <div class="w-8 h-1 bg-brand-green rounded-full transition-all duration-300" :class="$store.menu.aberto ? 'opacity-0' : ''"></div>
        <div class="w-8 h-1 bg-brand-green rounded-full transition-all duration-300" :class="$store.menu.aberto ? '-rotate-45 -translate-y-2.5' : ''"></div>
    </button>
</header>

{{-- Backdrop --}}
<div
    x-cloak
    x-show="$store.menu.aberto"
    @click="$store.menu.fechar()"
    x-transition
    class="fixed inset-0 bg-black/20 backdrop-blur-sm z-40 md:hidden"
></div>

{{-- Menu Mobile --}}
<nav
    x-cloak
    x-show="$store.menu.aberto"
    x-transition:enter="transition transform ease-out duration-300"
    x-transition:enter-start="translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition transform ease-in duration-200"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="translate-x-full"
    class="fixed top-0 right-0 h-full w-[280px] bg-brand-dark shadow-2xl z-50 md:hidden flex flex-col pt-24 px-8"
    x-data="{ productsOpen: false }"
>
    <a href="#welcome" @click="$store.menu.fechar()" class="text-brand-principal-text text-xl py-4 border-b border-brand-green/20">
        Principal
    </a>

    {{-- Produtos (accordion) --}}
    <button
        type="button"
        @click="productsOpen = !productsOpen"
        class="text-left text-brand-secondary-text text-xl py-4 border-b border-brand-green/20 w-full flex items-center justify-between"
    >
        <span>Produtos</span>
        <span class="text-brand-secondary-text transition-transform" :class="productsOpen ? 'rotate-180' : ''">▾</span>
    </button>

    <div x-cloak x-show="productsOpen" x-transition class="border-b border-brand-green/20 pb-2">
        <a href="#atlas" @click="$store.menu.fechar()" class="block pl-4 text-brand-secondary-text text-lg py-3">
            Atlas
        </a>
        <a href="#programs" @click="$store.menu.fechar()" class="block pl-4 text-brand-secondary-text text-lg py-3">
            Programas
        </a>
        <a href="#books" @click="$store.menu.fechar()" class="block pl-4 text-brand-secondary-text text-lg py-3">
            Livros
        </a>
    </div>

    <a href="#about" @click="$store.menu.fechar()" class="text-brand-secondary-text text-xl py-4 border-b border-brand-green/20">
        Empresa
    </a>

    <a href="#contact" @click="$store.menu.fechar()" class="text-brand-secondary-text text-xl py-4 border-b border-brand-green/20">
        Contato
    </a>

    <a href="#contact" @click="$store.menu.fechar()" class="bg-brand-green text-brand-dark px-6 py-3 rounded font-semibold text-center mt-8">
        Contato WhatsApp
    </a>
</nav>