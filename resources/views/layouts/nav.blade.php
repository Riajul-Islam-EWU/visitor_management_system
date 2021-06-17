@section('nav')
<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/images/Softkit_logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
        </a>
        <span class="text-white pt-2">
            <h5>{{ 'Softkit' }}</h5>
        </span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-md-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('getpass'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('getpass') }}">{{ __('Get one time Pass') }}</a>
                </li>
                @endif

                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif

                @else
                @if (Route::has('getpass'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('getpass') }}">{{ __('Get Pass') }}</a>
                </li>
                @endif

                <div class="btn-group">
                    <button type="button" class="btn text-white">{{ Auth::user()->name }}</button>
                    <button type="button" class="btn text-white dropdown-toggle dropdown-toggle-split"
                        id="nav-item dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false"
                        data-bs-reference="parent">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }} </a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@endsection