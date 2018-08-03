<!-- Side Navbar -->
<nav class="side-navbar">
  <div class="side-navbar-wrapper">
    <!-- Sidebar Header    -->
    <div class="sidenav-header d-flex align-items-center justify-content-center">
      <!-- User Info-->
      <div class="sidenav-header-inner text-center"><img src="{{ asset('admin_frontend/img/avatar-1.jpg') }}" alt="person" class="img-fluid rounded-circle">
        <h2 class="h5">Anderson Hardy</h2><span>Web Developer</span>
      </div>
      <!-- Small Brand information, appears on minimized sidebar-->
      <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>K</strong><strong class="text-primary">K</strong></a></div>
    </div>
    <!-- Sidebar Navigation Menus-->
    <div class="main-menu">
      <h5 class="sidenav-heading">Main</h5>
      <ul id="side-main-menu" class="side-menu list-unstyled">                  
        <li><a href="{{ route('admin.dashboard.index') }}"> <i class="icon-home"></i>Home</a></li>
        <li><a href="#products" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-gift"></i>Products </a>
          <ul id="products" class="collapse list-unstyled {{ Request::is('kkmanage/product*') ? 'show' : '' }}">
            <li><a href="{{ route('admin.product.index') }}">Product List</a></li>
            <li><a href="{{ route('admin.product.create') }}">Create New Product</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="admin-menu">
      <h5 class="sidenav-heading">Admin menu</h5>
      <ul id="side-admin-menu" class="side-menu list-unstyled"> 
        <li><a href="#user" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-user"></i>User Management </a>
          <ul id="user" class="collapse list-unstyled ">
            <li><a href="#">Add User</a></li>
          </ul>
        </li>
        <li><a href="#media" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-image"></i>Media Management </a>
          <ul id="media" class="collapse list-unstyled {{ Request::is('kkmanage/media*') ? 'show' : '' }}">
            <li><a href="{{ route('admin.media.index') }}">Media List</a></li>
          </ul>
        </li>
        <li><a href="#setting" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-cogs"></i>Setting </a>
          <ul id="setting" class="collapse list-unstyled ">
            <li><a href="#">General Setting</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>