@auth

{{-- @if ( Route::current()->getName() != ('welcome') ) --}}
    <a href="{{route('user.index')}}" class="nav-item nav-link">Users</a>
    {{-- <a href="{{route('article.index')}}" class="nav-item nav-link">Articles</a> --}}
    <a href="{{route('post.index')}}" class="nav-item nav-link">Posts</a>
{{-- @endif --}}
<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            {{-- <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a> --}}
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
</ul>
@endauth