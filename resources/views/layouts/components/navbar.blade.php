<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      {{-- <form action="/logout" method="post">
        @csrf
        @method('POST') --}}
        <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal-logout">
          Log Out
        </button>
      {{-- </form> --}}
    </ul>
  </nav>

  @include('pages.auth.logout-confirmation')