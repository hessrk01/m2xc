

<nav id="main-nav" class="navbar navbar-expand-md fixed-top scrolling-navbar navbar-light bg-white">
        <div class="container ">
            {{-- <div class="row justify-content-between"> --}}
            
                
                    
                {{-- <div class="col-6"> --}}
                    <a href="{{ Request::is('/') ? '#home' : route('welcome')  }}" class="navbar-brand">
                        <img src="{{asset('img/mslant.png')}}" width="48"  alt="">
                        <span class="navtitle"><h4 class="d-inline align-middle ml-1">Managing to Excellence</h4></span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                {{-- </div> --}}
                {{-- <div class="col-6"> --}}
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navbar-nav ml-auto">
                            @if ( Request::is('/') )
                                                        
                                <a href="#about" class="nav-item nav-link">About</a>
                                <a href="#services" class="nav-item nav-link">Services</a>
                                <a href="#team" class="nav-item nav-link">Team</a>
                                <a href="#hive" class="nav-item nav-link">Hive</a>
                                <a href="#connect" class="nav-item nav-link">Connect</a>
                                
                                @include('inc.navauth')

                            @else

                                {{-- <a href=" {{ route('welcome') }} " class="nav-item nav-link">Home</a> --}}
                                
                                {{-- @include('inc.navauth') --}}
                                <a href="{{ route('welcome')}}/#about" class="nav-item nav-link">About</a>
                                <a href="{{ route('welcome')}}/#services" class="nav-item nav-link">Services</a>
                                <a href="{{ route('welcome')}}/#team" class="nav-item nav-link">Team</a>
                                <a href="{{ route('welcome')}}/#hive" class="nav-item nav-link">Hive</a>
                                <a href="{{ route('welcome')}}/#connect" class="nav-item nav-link">Connect</a>
                                
                                @include('inc.navauth')
                            
                            @endif
                        </div>
                    </div>
                {{-- </div> --}}
            
            {{-- </div> --}}
        </div>
</nav>
