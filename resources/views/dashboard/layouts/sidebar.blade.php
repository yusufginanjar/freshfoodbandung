<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="{{ config('app.path') }}/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/blogs*') ? 'active' : '' }}" href="{{ config('app.path') }}/dashboard/blogs">
            <span data-feather="file"></span>
            Blogs
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/products*') ? 'active' : '' }}" href="{{ config('app.path') }}/dashboard/products">
            <span data-feather="file"></span>
            Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/orders*') ? 'active' : '' }}" href="{{ config('app.path') }}/dashboard/orders">
            <span data-feather="file"></span>
            Order
          </a>
        </li>
      </ul>
    </div>
  </nav>