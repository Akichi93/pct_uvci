  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">AdminDocs</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                      <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Accueil</a>
                  </li>
                  @auth
                  <li class="nav-item">
                      <a class="nav-link {{ request()->is('requests*') ? 'active' : '' }}" href="{{ url('/requests') }}">Faire une demande</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ request()->is('documents*') ? 'active' : '' }}" href="{{ route('documents.index') }}">Mes documents</a>
                  </li>
                  @endauth
              </ul>
              <div class="d-flex">

                  @if (Auth::check())
                      <span class="navbar-text me-3">Bienvenue, {{ Auth::user()->name }}</span>
                      <form action="{{ route('logout') }}" method="POST" class="d-inline">
                          @csrf
                          <button type="submit" class="btn btn-outline-light">Déconnexion</button>
                      </form>
                  @else
                      <a href="{{ url('/connexion') }}" class="btn btn-light me-2">Connexion</a>
                      <a href="{{ url('/inscription') }}" class="btn btn-light me-2">Inscription</a>
                  @endif


              </div>
          </div>
      </div>
  </nav>
