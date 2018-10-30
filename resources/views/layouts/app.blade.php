<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('inc.google')
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.title', 'Managing to Excellence') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500|Roboto+Slab&amp;subset=latin-ext" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="app">
        <div class="row justify-content-center ">
            <div class="col-8 position-fixed">
                @include('inc.nav')
            </div>
        </div>

        <section class="top">
            <div id="particles-js"></div>
            
        </section>
        <section class="info">
            blah blah
        </section>


 
    </div>
{{-- scripts --}}
<script src="{{ asset('js/particles.js') }}"></script>
</body>
</html>