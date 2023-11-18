<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
        <a class="pl-0 ml-0 text-center" href="index.html"> <span class="custom-logo">Zameen World</span> </a>

        @if (!empty(auth()->user()->image))
        <a href="#" class="text-center ms-logo-img-link"> <img src="{{ asset('user_side/abc.png ') }}"
            alt="Agent logo"></a>  
        @else
        <a href="#" class="text-center ms-logo-img-link"> <img src="{{Storage::url('users/'.auth()->user()->image)}}"></a>            
        @endif
   
        <h5 class="text-center text-white mt-2">{{ auth()->user()->name }}</h5>
    
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
        <!-- Dashboard -->
      
           
        <li class="menu-item  {{ Request::is('agent/dashboard') ? 'active' : '' }}">
            <a href="">
                <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
            </a>
        </li>

        <!-- /Dashboard -->
       
        <li class="menu-item {{ Request::is('agent/properties') ? 'active' : '' }} {{ Request::is('agent/properties/create') ? 'active' : '' }}">
            <a href="{{ route('agent.properties.index') }}">
            <span><i class="fa fa-cloud"></i>Add Properties</span>
            </a>
        </li>
        <li class="menu-item {{ Request::is('membership') ? 'active' : '' }} ">
            <a href="{{ route('agent.membership') }}">
            <span><i class="fa fa-cloud"></i>Membership Plan</span>
            </a>
        </li>

        
       
    </ul>
</aside>