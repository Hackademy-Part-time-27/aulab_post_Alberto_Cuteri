<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href=""><img src="/img/" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('article.index') }}">Tutti gli articoli</a>
                </li>
                <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('careers')}}">Lavora con noi</a>
        </li>
@auth
@if (Auth::user()->is_admin)
  <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
  </li>
@endif
@if (Auth::user()->is_revisor)
  <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard del Revisore</a></li>
  </li>
  @endif
<li class="nav-item">
  <a class="nav-link" href="{{route('article.create')}}">Inserisci un articolo</a>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Ciao {{ Auth::user()->name }}
  </a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Profilo</a></li>
    <li>
      <hr class="dropdown-divider">
    </li>
    <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
    <form action="{{route('logout')}}" method="POST" id="form-logout">
      @csrf
    </form>
  </ul>
</li>
@endauth
@guest
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Benvenuto
    </a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
      <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
    </ul>
  </li>
@endguest
</ul>
            <form action="#" class="d-flex" role="search">
                <input class="form-control me-2" type="search"  aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit">Cerca</button>
            </form>
        </div>
    </div>
</nav>
