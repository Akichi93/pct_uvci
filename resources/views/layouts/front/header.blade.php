  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">AdminDocs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/requests') }}">Faire une demande</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/documents') }}">Mes documents</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="{{ url('/connexion') }}" class="btn btn-light me-2">Connexion</a>
                    <a href="{{ url('/inscription') }}" class="btn btn-light me-2">Inscription</a>
                </div>
            </div>
        </div>
    </nav>