<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
        <a class="pl-0 ml-0 text-center" href="{{route('home')}}"> <span class="custom-logo">Zameen World</span> </a>

        @if (!empty(auth()->user()->image))
      
            <a href="#" class="text-center ms-logo-img-link"> <img src="{{Storage::url('users/'.auth()->user()->image)}}"></a>            

        @else
        <a href="#" class="text-center ms-logo-img-link"> <img src="{{ asset('user_side/abc.png ') }}"
            alt="Agent logo"></a>  
        @endif
   
        <h5 class="text-center text-white mt-2">{{ auth()->user()->name }}</h5>
    
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
        <!-- Dashboard -->
      
           
        <li class="menu-item  {{ Request::is('agent/dashboard') ? 'active' : '' }}">
            <a href="{{ route('agent.dashboard') }}">
                <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
            </a>
        </li>

        <!-- /Dashboard -->
       
        <li class="menu-item {{ Request::is('agent/properties') ? 'active' : '' }} {{ Request::is('agent/properties/create') ? 'active' : '' }}">
            <a href="{{ route('agent.properties.index') }}">
            <span><i class="fa fa-home"></i>Add Properties</span>
            </a>
        </li>
        <li class="menu-item {{ Request::is('membership') ? 'active' : '' }} ">
            <a href="{{ route('agent.membership') }}">
            <span><i class="fa fa-cloud"></i>Membership Plan</span>
            </a>
        </li>
        <li class="menu-item {{ Request::is('agent/message') ? 'active' : '' }} ">
            <a href="{{ route('agent.message') }}">
            <span><i class="fa fa-envelope mr-2"></i>Inbox(Messages)</span>
            </a>
        </li>
        <li class="menu-item {{ Request::is('agent/profile') ? 'active' : '' }} ">
            <a href="{{ route('agent.profile') }}">
            <span><i
                class="fa fa-user  mr-2"></i>Profile</span>
            </a>
        </li>
        <li class="menu-item {{ Request::is('agent/profile') ? 'active' : '' }} ">
            <a href="{{ route('agent.profile') }}">
            <span><i
                class="fa fa-gear mr-2"></i>Account Setting</span>
            </a>
        </li>
        <li class="menu-item {{ Request::is('agent/changepassword') ? 'active' : '' }} ">
            <a href="{{ route('agent.changepassword') }}">
            <span><i
                class="fa fa-lock mr-2"></i>Lock</span>
            </a>
        </li>

        
       
    </ul>
</aside>