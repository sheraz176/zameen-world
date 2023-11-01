  <!-- sidenavbar -->
  <div id="mySidenav" class="sidenav">
    <img src="assets/images/cross-icon.png" onclick="closeNav()" class="close-nav">
    <ul class="navbar-nav d-flex flex-column gap-2 px-3 py-2 side-nav-list ">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="/property-detail">Property Detail Page</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/buy">Search Page</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Agents
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/Blogs">Blogs</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
      <li class="nav-item">
        <div class="d-flex flex-row gap-3 justify-content-center py-3">
          <button class="btn-outlined" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
          <button class="btn-outlined" data-bs-toggle="modal" data-bs-target="#signupModal">Sign up</button>
        </div>
      </li>
    </ul>
  </div>