

<div class="row justify-content-center ">
    <div class="col-8 position-fixed">
        <nav id="main-nav" class="navbar navbar-expand-lg navbar-light bg-light mt-4">
                <a href="{{ Request::is('/') ? '#home' : route('welcome')  }}" class="navbar-brand">
                    <img src="{{asset('img/icon_transparent.png')}}" width="48"  alt="">
                    <span class="navtitle"><h4 class="d-inline align-middle ml-1">Managing to Excellence</h4></span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navbar-nav ml-auto">
                            
                            <a href="#about" class="nav-item nav-link">About</a>
                            <a href="#services" class="nav-item nav-link">Services</a>
                            <a href="#connect" class="nav-item nav-link">Connect</a>
                        </div>
                </div>
        </nav>
    </div>
</div>

