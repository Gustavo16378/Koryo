<! DOCTYPE html>
    <html lang="pt-br">

    @include('partials.head')

    <body
        x-data="sectionSpy()"
        class="antialiased font-sans bg-black">
        >
        @include('partials.header')

        <main>
            @include('partials.hero')
            @include('partials.welcome')
            @include('partials.products')
            @include('partials.condition_of_use')
            @include('partials.programs')
            @include('partials.license_conditions')
            @include('partials.books_atlas')
            @include('partials.about_company')
            @include('partials.contact')
        </main>

    </body>

    </html>