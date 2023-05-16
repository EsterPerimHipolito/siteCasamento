@extends('layouts.layout')

@section('titulo')
    Inicio
@endsection

@section('style')
  <link rel="stylesheet" type="text/css" href="css/style.css" />
@endsection

@section('corpo')
    <header>
        <nav class="navbar navbar-expand-lg cabecalho">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="storage/img/carrousel/e-e-l.png" alt="E & L" /></a>
                <span class="navbar-toggler btn" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </span>
                <div class="collapse navbar-collapse py-3 flex-row-reverse" id="navbarNavAltMarkup">
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

    <main>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item h-100 active"
                    style="
              background-image: url(storage/img/carrousel/escolhido-1.png);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-1.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-2.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-3.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-4.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-5.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-6.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-7.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-8.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-9.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-10.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-11.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-12.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-13.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-14.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-15.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-16.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-17.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
                <div class="carousel-item h-100"
                    style="
              background-image: url(storage/img/carrousel/ester-e-lucas-18.jpeg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: center;
            ">
                </div>
            </div>
        </div>
        <div class="col-12 row">
            <h2 id="bemvindo"class="col-12 text-center"><u>Seja bem-vindo</u></h2>
            <p class="col-12 texto-seja-bem-vindo text-center">
                Siim, vamos nos casar!!<br />
                Estamos muito felizes em compartilhar cada detalhe desse dia com
                você!<br />
                Por isso decidimos criar esse site com as informações importantes do
                nosso dia.
            </p>

            <h2 id="abaInfo" class="col-12 text-center"><u>Informações</u></h2>
            <p class="col-12 texto-seja-bem-vindo text-center">
                Antes de navegar no site, segue algumas informações.<br />
                Nosso casamento é dia 10/03/2024.<br />
                Para os padrinhos, no topo da página terá o seu acesso com informações
                mais específicas.<br />
                Para os convidados, terá acesso às outras páginas do site.<br />
                No caso de dúvidas, estamos à disposição!<br />
                Ester e Lucas.
            </p>
        </div>
    </main>

    <footer>
        <div class="foot">
            <h2 class="ester-lucas">Ester e Lucas</h2>
            <p class="data">10/03/2024</p>
            <p class="feito-por-nos">
                Feito com muito carinho pelos noivos (do zero)
            </p>
        </div>
    </footer>
@endsection
