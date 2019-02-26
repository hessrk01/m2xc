<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('inc.head')
</head>
<body class="{{ Request::path() == 'hive' ? 'hive-background' : '' }}">
    <div id="app" class="app">
            @include('inc.nav')
    </div>

    <div class="flash-right">
        @include('flash::message')
    </div>

    @yield('content')
    @stack('script')

    <script>
        $('div.alert-info').not('.alert-important').delay(3000).fadeOut(350);
        $('div.alert-success').not('.alert-important').delay(3000).fadeOut(350);
        $('div.alert-warning').not('.alert-important').delay(4000).fadeOut(350);
        $('div.alert-error').not('.alert-important').delay(5000).fadeOut(350);
        $('div.alert-danger').not('.alert-important').delay(5000).fadeOut(350);
        
    </script>
</body>
</html>