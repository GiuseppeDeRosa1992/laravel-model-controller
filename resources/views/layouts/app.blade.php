<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Hello Laravel World')</title>
    @vite('resources/js/app.js')
</head>

<body>
    {{-- INCLUDO HEADER DA PARTIALS.HEADER --}}
    @include('partials.header')

    {{-- MI CREO UN YELDS(CONTENT) CHE OGNI VOLTA RICHIAMO E METTO DENTRO COSE DIVERSE NELLE VARIE PAGINE TRAMITE @SECTION(CONTENT) --}}
    <main>
        <div class="container text-center p-0">
            @yield('content')
        </div>
    </main>

</body>

</html>
