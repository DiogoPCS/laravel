
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">System 1.0</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('view.principal') }}">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('view.sobrenos') }}">Sobre Nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('view.contato') }}">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('view.lista-contatos') }}">Listar Contatos</a>
              </li>
              
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>