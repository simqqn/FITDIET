<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FitDiet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href=" {{ asset ('css/custom.css') }}" rel="stylesheet"/>
  </head>
  <body>
    <div class="container">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            Fit<span>Diet</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/">Strona główna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('post_index') }}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">O nas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Usługi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kontakt</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Slider -->
      <div class="row">
        <div class="col">
          <div id="carouselExampleCaptions" class="carousel slide carousel-fade">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src=" {{asset ('img/slider1.jpg')}}" class="d-block w-100" alt="Świeże owoce">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Jedz zdrowo!</h5>
                  <p>Najnowsze przepisy na sałatki owocowe już dostępne!</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src=" {{asset ('img/slider2.jpg')}}" class="d-block w-100" alt="Owoce i warzywa na blacie">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Precz z mięsem</h5>
                  <p>Wcinaj same warzywa i orzechy.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src=" {{asset ('img/slider3.jpg')}}" class="d-block w-100" alt="Gabinet dietetyka">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Profesjonalny gabinet dietetyczny</h5>
                  <p>Zobaczcie jakie mam uporządkowane biurko.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        @yield('content')
      <!-- Map -->
      @yield('scripts')

      <div class="row">
        <div class="col"></div>
      </div>
      <!-- Footer -->
      <footer>
        <div class="row">
          <div class="col">
            <h3>lek. med. Anna Marchewa</h3>
            <p>Poradnia dietetyczna Bydgoszcz i Toruń. Poradnictwo dietetyczne. Zdrowe przepisy.</p>
            <p>Ze mną dojdziesz do idealnej wagi.</p>
          </div>
          <div class="col">
            <h3>Informacje</h3>
            <ul>
              <li><a href="#">Mapa strony</a></li>
              <li><a href="#">Regulamin</a></li>
              <li><a href="#">Polityka cookies</a></li>
              <li><a href="#">Kontakt</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
          <div class="col">
            <h3>Dane kontaktowe</h3>
            <p>Jarzębinowa 17/3, 87-100 Toruń</p>
            <p>E-mail: fit@diet.pl</p>
            <p>Tel.: 606-123-456</p>
          </div>
        </div>
      </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
