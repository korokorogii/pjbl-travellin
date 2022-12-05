<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <i class="uil uil-estate"></i>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <i class="uil uil-file-alt"></i>
            Artikel
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="uil uil-user"></i>
            User
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="uil uil-map-marker"></i>
            Destinasi
          </a>
        </li>
      </ul>
    </div>
  </nav>