<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('inc.head')
</head>
<body>
    <div id="app" class="app">
            @include('inc.nav')
    </div>

    @yield('content')
    
</body>
</html>