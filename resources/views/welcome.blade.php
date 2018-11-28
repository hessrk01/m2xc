
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

@include('inc.head')

</head>

    <body id="home" data-spy="scroll" data-target="#main-nav" data-offset="772">
        <div id="app" class="app">
            @include('inc.nav')
            @include('welcome.showcase')
            @include('welcome.about')
            @include('welcome.services')
            @include('welcome.team')
            @include('welcome.contact')
            @include('welcome.footer')
        </div>
       
        {{-- scripts --}}
        <script src="{{ asset('js/particles.js') }}" ></script>
        <script src="{{ asset('js/scroll.js') }}" defer ></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlr5SMphZfkmH1hxEphdmto-XzRNl1j9o&callback=initializeMap"
  type="text/javascript"></script>
        <script src="{{ asset('js/map.js') }}" defer ></script>
        
    
    </body>
    
</html>