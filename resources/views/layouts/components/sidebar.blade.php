@php
  $menus = [
    (object)[
      "title" => "Dashboard",
      "path" => "/",
      "icon" => "fas fa-th",
    ],
    (object)[
      "title" => "Category",
      "path" => "categories",
      "icon" => "fas fa-th",
    ],
    (object)[
      "title" => "Products/Items",
      "path" => "products",
      "icon" => "fas fa-th",
    ],
  ];
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="https://img.icons8.com/?size=100&id=4NUeu__UwtXf&format=png&color=ffffff" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Inventory V1</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://img.icons8.com/?size=100&id=23264&format=png&color=ffffff" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      {{-- <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @foreach ($menus as $menu)
          <li class="nav-item">
            <a href="{{ $menu->path[0] !== '/' ? '/' . $menu->path : $menu->path }}" class="nav-link {{ request()->path() === $menu->path ? 'active' : '' }}">
              <i class="nav-icon {{ $menu->icon }}"></i>
              <p>
                {{ $menu->title }}
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li> 
          @endforeach
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>