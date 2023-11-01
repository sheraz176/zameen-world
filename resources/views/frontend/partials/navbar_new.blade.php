<header class="extend-header">
    <nav class="navbar navbar-expand-lg home-nav extend-navbar " id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{asset('zameen/assets/images/abcd.png')}}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Buy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sell</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Agents
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Resources
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex gap-3 " role="search">
                    @guest
                        <button class="btn-outlined"><a href="{{ route('login') }}" style="color: black">Login</a></button>
                        <button class="btn-contain"><a href="{{ route('register') }}" style="color: white">Sign up</a></button>
                    @else
                        <li class="nav-item dropdown list-unstyled">
                            <a class="" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('zameen/assets/images/agent.png') }}">
                            </a>
                            <ul class="dropdown-menu login-drop p-0">

                                <li>
                                    @if (Auth::user()->role->id == 1)
                                        <a href="{{ route('admin.dashboard') }}">
                                            My Account
                                        </a>
                                    @elseif(Auth::user()->role->id == 2)
                                        <a href="{{ route('agent.dashboard') }}">
                                            My Account
                                        </a>
                                    @elseif(Auth::user()->role->id == 3)
                                        <a href="{{ route('user.dashboard') }}">
                                            My Account
                                        </a>
                                    @endif
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                       {{ __('SignOut') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </form>
                </div>
            </div>
        </nav>
    </header>
