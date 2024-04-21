<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    <title>ArcheoIT |@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('ArcheoIT_Images/logo-icon.ico')}}" />
    </head>

<body class="app">
  <div class="container-fluid p-0 divlogo" >
    <div class="row d-flex">
        <div class="col-sm-12  col-md-6 col-lg-4">
            <img  src="{{asset('ArcheoIT_Images/logo-png.png')}}" alt='logo archeologie' class="w-50 p-1 m-3 ">
            
        </div>
        <div class="col-sm-12 col-md-6 mt-5 text-center">
           @yield('header')
            
        </div>
     </div>
  </div>

<nav class="navbar navbar-expand-lg text-success  ">
  <div class="container-fluid divnav p-3">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse rounded-5" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('ArcheoIT.index')}}">Accueil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Activites
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('activites.presentation')}}">Presentation</a></li>
            <li><a class="dropdown-item" href="{{route('activites.stage')}}">Stages</a></li>
            <li><a class="dropdown-item" href="#">Conferences</a></li>
            <li><hr class="dropdown-divider"></li>
           
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Revues</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sites de fouilles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Administration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacts</a>
        </li>
      </ul>
      <span class="navbar-text">
        Navbar text with an inline element
      </span>
    </div>
  </div>
</nav>
      <main>
      <div class="container">

      @yield('content')
  
    </div>
            </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="foot bg-dark s">
      <div class="row text-center">
        {{-- <h1><i><span>Qui</span>Sommes Nous ?</i></h1> --}}
        <footer>
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <h4>Contact</h4>
                      <p>Adresse : 123 rue Principale, Ville, Pays</p>
                      <p>Téléphone : +XX XX XX XX XX</p>
                      <p>Email : contact@example.com</p>
                  </div>
                  <div class="col-md-6">
                      <h4>Liens utiles</h4>
                      <ul>
                          <li><a href="#">Accueil</a></li>
                          <li><a href="#">À propos</a></li>
                          <li><a href="#">Services</a></li>
                          <li><a href="#">Contact</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </footer>
      
    </div>

        </div>
    </body>
</html>
   

