<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    <link rel="stylesheet" href="{{asset('styles/styleAdmin.css')}}">
    <title>ArcheoIT_Admin |@yield('title')</title>

</head>
<body class="app">

    <div class="container-fluid p-0 divlogo" >
        <div class="row d-flex">
            <div class="col-sm-12  col-md-6 col-lg-4">
                <img  src="{{asset('ArcheoIT_Images/logo-png.png')}}" alt='logo archeologie' class="w-50 p-1 m-3 ">
            </div>
            <div class="col-sm-12 col-md-6 mt-5 text-center">
                <h1><i>Bienvenue sur ArcheoIT!!! </i></h1>
                <h2><i>Explorez les Mystères de l'Antiquité avec la Technologie Moderne</i></h2> 
            </div>
        </div>
     </div> 
     <div class="container text-center m-5 ">
      <div class="row ">
        <div class="col-6 btn btn-success w-25 m-2 divAdmin">
          <a href="{{route('stages.create')}}">Gestion Stages</a>
        </div>
        <div class="col-6 btn btn-success w-25 m-2 text divAdmin">
          <a href="{{route('actualite.create')}}">Gestion Actualites</a>
        </div>
      </div>
      <div class="row">
        <div class="col">
          {{-- <a href="{{route('admins.stages')}}"></a> --}}
        </div>
        <div class="col">
          {{-- <a href="{{route('admins.stages')}}"></a> --}}
        </div>
        <div class="col">
          3 of 3
        </div>
      </div>
    </div>
 
  <main>
    <div class="container">

      @yield('content')
  
    </div>
  </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
   
