@extends('layouts.layout')

@section('titulo')
    Inicio
@endsection

@section('style')
  <link rel="stylesheet" type="text/css" href="css/presentes/style.css" />
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
      <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 lojas">
          <h3><u>Querido convidado</u></h3>
          <p class="text-center">Olá, que alegria ter você por aqui.<br>
          Estamos em contagem regressiva para o nosso casamento e também para a entrega da nossa casinha.<br>
          Logo abaixo, disponibilizamos algumas listas de casamento para você, que quer nos abencoar com algum item para o nosso lar.<br>
          Caso queira nos abencoar com algum valor específico, deixaremos também os dados para o PIX.<br>
          Agradecemos pela atenção de cada um, e nos vemos no nosso grande dia.</p>
            <nav>
                <h3 class="text-center"><u>Lista de casamento</u></h3>
                <ul>
                    <a href="https://www.camicado.com.br/lista/home?s_icid=Home_Menu_ListaDePresentes_20230131" target="_self"><li>Camicado</li></a>
                    <a href="https://www.precolandia.com.br/lista-casamento" target="_self"><li>Preçolandia</li></a>
                    <a href="https://lista.havan.com.br/" target="_self"><li>Havan</li></a>
                    <a href="https://listas.casasbahia.com.br/" target="_self"><li>Casas Bahia</li></a>
                </ul>
            </nav>
            <h3><u>Nossos dados</u></h3>
            <div class="text-center">
              <img src="storage/img/qrcode-pix.jpeg" alt="QR-code pix">
            </div>
            <p class="text-center">Banco: Itaú<br>
               Nome: Ester Perim Hipolito<br>
               Chave aleatória: a6620413-0d1d-4e74-86f5-9830b398ff3c<br>
            </p>
        </div>


        <footer>
          <div class="foot">
            <h2 class="ester-lucas">Ester e Lucas</h2>
            <p class="data">10/03/2024</p>
            <p class="feito-por-nos">
              Feito com muito carinho pelos noivos (do zero)
            </p>
          </div>
        </footer>     
</body>
</html>