@extends('layouts.layout')

@section('titulo')
    Inicio
@endsection

@section('style')
  <link rel="stylesheet" type="text/css" href="css/local/style.css  " />
@endsection

@section('corpo')
    
    <header>
        <nav class="navbar navbar-expand-lg cabecalho">
          <div class="container-fluid">
            <a class="navbar-brand" href="/"
              ><img src="storage/img/carrousel/e-e-l.png" alt="E & L"
            /></a>
            <span
              class="navbar-toggler btn"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </span>
            <div
              class="collapse navbar-collapse py-3 flex-row-reverse"
              id="navbarNavAltMarkup"
            >
              <div class="navbar-nav">
                <a href="#bemvindo" class="nav-link">Bem-vindos</a>
                <a href="#abaInfo" class="nav-link">Informações</a>
                <a href="/presentes" class="nav-link">Presentes</a>
                <a href="/padrinhos"class="nav-link">Padrinhos</a>
                <a href="/local" class="nav-link">Local</a>
                <a href="/contatos" class="nav-link">Contatos</a>
              </div>
            </div>
          </div>
        </nav>
      </header>
</body>
</html>