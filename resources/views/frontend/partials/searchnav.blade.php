<nav class="navbar navbar-expand-lg home-nav extend-navbar " id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('zameen/assets/images/abcd.png')}}"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
         
            <li class="nav-item">
              <a  class="nav-link active" aria-current="page"  href="{{route('search')}}">Browse</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="{{route('blog')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('agents')}}">Agents</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
            </li>
            
     
          </ul>
       
        @guest
        <form class="d-flex gap-3 " role="search">
        <button class="btn-outlined"><a href="{{ route('login') }}" style="color: rgb(34, 28, 28)">Login</a></button>
        <button class="btn-contain"><a href="{{ route('register') }}" style="color: white">Sign up</a></button>
        </form>
        @else
        @if (Auth::user()->role->id == 1)
        <button class="btn-contain"><a href="{{ route('admin.dashboard') }}" style="color: white">My Dashboard</a></button>
        @elseif(Auth::user()->role->id == 2)
        <button class="btn-contain"><a href="{{ route('agent.dashboard') }}" style="color: white">My Dashboard</a></button>
        @elseif(Auth::user()->role->id == 3)
        <button class="btn-contain"><a href="{{ route('user.dashboard') }}" style="color: white">My Dashboard</a></button>
        @endif
        
        @endif

      </div>
    </div>
  </nav>