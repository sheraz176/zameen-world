<nav class="navbar ms-navbar">
    <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
    </div>
    <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="#"><img
                src="{{ asset('user_side/abc.png ') }}" alt="logo"> </a>
    </div>
    <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">

     

        <li class="ms-nav-item ms-d-none">
            <a href="{{ Request::is('agent/properties') ? 'active' : '' }}" class="text-white" data-toggle="modal"><i class="fa fa-file-export head-fonts mr-1"></i>
                Add Properties</a>
        </li>

        <li class="ms-nav-item ms-nav-user dropdown">
            <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if (!empty(auth()->user()->image))
                <img class="ms-user-img ms-img-round float-right" src="{{ asset('user_side/abc.png ') }}"
                alt="people"> </a>
                @else
                          
                <img class="ms-user-img ms-img-round float-right" src="{{Storage::url('users/'.auth()->user()->image)}}"
                alt="people"> </a>
                @endif
               

            <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
                <li class="dropdown-menu-header">
                    <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome,  {{ auth()->user()->name }}
                            </span></h6>
                </li>
                <li class="dropdown-divider"></li>
                <li class="ms-dropdown-list">
                    <a class="media fs-14 p-2" href="{{ route('agent.profile') }}"> <span><i
                                class="fa fa-user  mr-2"></i> Profile</span> </a>
                    <a class="media fs-14 p-2" href="{{ route('agent.message') }}"> <span><i
                               class="fa fa-envelope mr-2"></i> Inbox</span> <span
                            class="badge badge-pill badge-info">3</span> </a>
                    <a class="media fs-14 p-2" href="{{ route('agent.profile') }}"> <span><i
                                class="fa fa-gear mr-2"></i> Account Settings</span> </a>
                </li>
                <li class="dropdown-divider"></li>
                <li class="dropdown-menu-footer">
                    <a class="media fs-14 p-2" href="{{ route('agent.changepassword') }}"> <span><i
                                class="fa fa-lock mr-2"></i> Lock</span> </a>
                </li>
                <li class="dropdown-menu-footer">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                        @csrf
                        <button class="media fs-14 p-2"> <span><i
                            class="fa fa-power-off mr-2"></i> Logout</span> </button>
                    </form>
                 
                </li>
            </ul>
        </li>
    </ul>
    <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown"
        data-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
    </div>
</nav>