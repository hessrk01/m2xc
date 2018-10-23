
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

@include('welcome.head')

</head>

    <body id="home" data-spy="scroll" data-target="#main-nav" data-offset="772">
        <div id="app" class="wrapper">
            @include('inc.nav')
            @include('welcome.showcase')
        
        </div>
        <div>
                <section id="info">
                    @for ($i = 1; $i < 30; $i++)
                        blah blah <br>
                    @endfor
                </section>
        
        
        
            </div>
        {{-- scripts --}}
        <script src="{{ asset('js/particles.js') }}" ></script>
        <script src="{{ asset('js/scroll.js') }}" defer ></script>
    
    </body>
    
</html>