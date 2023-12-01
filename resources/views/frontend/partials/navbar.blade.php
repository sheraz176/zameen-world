  <!-- navbarsection -->
  <header class="home-header">
    <nav class="navbar navbar-expand home-nav bg-white-nave" id="navbar">
      <div class="container-fluid">
        <div class="d-flex flex-row align-items-center gap-3 custom-logo-center">
          <div><button class="hamburger-bg-white" onclick="openNav()"> <svg width="22" height="22" viewBox="0 0 32 24"
                fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M2.5 5.25H29.5C30.742 5.25 31.75 4.242 31.75 3C31.75 1.758 30.742 0.75 29.5 0.75H2.5C1.258 0.75 0.25 1.758 0.25 3C0.25 4.242 1.258 5.25 2.5 5.25ZM29.5 9.75H2.5C1.258 9.75 0.25 10.758 0.25 12C0.25 13.242 1.258 14.25 2.5 14.25H29.5C30.742 14.25 31.75 13.242 31.75 12C31.75 10.758 30.742 9.75 29.5 9.75ZM29.5 18.75H2.5C1.258 18.75 0.25 19.758 0.25 21C0.25 22.242 1.258 23.25 2.5 23.25H29.5C30.742 23.25 31.75 22.242 31.75 21C31.75 19.758 30.742 18.75 29.5 18.75Z"
                  fill="white" />
              </svg>


            </button></div>
          <div class="custom-center"> <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('zameen/assets/images/abcd.png')}}"></a></div>

        </div>

     
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
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Properties
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Super Hot</a></li>
                <li><a class="dropdown-item" href="#">Hot</a></li>
                <li><a class="dropdown-item" href="#">Featured</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{route('search')}}">All Properties</a></li>
              </ul>
            </li>
            
          </ul>
        </div>
        <div class="d-flex gap-3 align-items-center " role="search">
          @guest
          <button class="btn-outlined"><a href="{{ route('login') }}" style="color: white">Login</a></button>
          <button class="btn-contain"><a href="{{ route('register') }}" style="color: white">Sign up</a></button>
          @else
          <li class="nav-item dropdown list-unstyled">
              <a class="" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{ asset('zameen/assets/images/after-login.png') }}">
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
                     

                      <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                          @csrf
                          <a type="submit">
                         {{ __('SignOut') }}
                      </a>
                      </form>
                  </li>
              </ul>
          </li>
          @endif
        </div>
      </div>
    </nav>
  </header>