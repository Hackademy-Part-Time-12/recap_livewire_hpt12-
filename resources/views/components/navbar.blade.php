<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand text-custom" href="#">Giallo Aulab</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if(Route::currentRouteName() == 'homepage') text-custom @endif" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profilo</a></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
                <form action="{{route('logout')}}" method="POST" id="form-logout">
                  @csrf
                </form>
              </li>
            </ul>
          </li>
        @endauth
        @guest
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'login') text-custom @endif" href="{{route('login')}}">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'register') text-custom @endif" href="{{route('register')}}">Registrati</a>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>