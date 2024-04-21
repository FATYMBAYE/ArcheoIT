@extends('layouts.app')
@section('title','Acceuil')

@section('header')
<h1><i>Bienvenue sur ArcheoIT!!!</i></h1>
<h2><i>Explorez les Mystères de l'Antiquité avec la Technologie Moderne</i></h2>
    
@endsection


@section('content')
<div class="row">
    <h1><i>Nos Derniéres Actualités</i></h1>
</div>
<div class="container d-flex">
      @foreach ($actualites as $item)
    <div class="card m-2">
      @if ($item->image)
        <img src="{{asset('imagesActualites/'.$item->image)}}" alt="image"class="card-img-top rounded-start">
      @else
        <img src="{{asset('ArcheoIT_Images/logo-png.png')}}" alt="image" class="card-img-top rounded-start">
      @endif
      <div class="card-body">
        <h5 class="card-title actu text-center rounded-3">{{$item->titre}}</h5>
        <p class="card-text">{{ substr(strip_tags($item->contenu), 0, 100) }}{{ strlen($item->contenu) > 100 ? "..." : "" }}</p>
        <p class="card-text"><small class="text-body-secondary">Publiee le :</i>{{$item->created_at->format('d/m/y')}}</small></p>
        <button type="button" class="btn justtify-content-end" data-bs-toggle="modal" data-bs-target="#modal{{$item->id}}">En savoir plus</button>
      </div>
    </div>
    @endforeach
<div class="container">{{ $actualites->links()}}</div>
</div>
{{-- modal pour le bouton en savoir plus --}}
@foreach ($actualites as $item)
<div class="modal fade" id="modal{{$item->id}}" tabindex="-1" aria-labelledby="modal{{$item->id}}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal{{$item->id}}Label">{{$item->titre}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{$item->contenu}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
@endforeach

<div class="container ">
    <h1><i>Nos Activtés</i></h1>
    <p><strong>ArcheoIT</strong>prpose des activites tout au longue de l`annee de <a href="{{route('activites.presentation')}}">Nombreuses Activites</a></p>
    <div class="col">
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('ArcheoIT_Images/stage1.jpg')}}" class="img-fluid rounded-start m-2" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Stages</h5>
            <p class="card-text">Différentes formules adaptées à vos envies et à chaque génération : stages juniors (à partir de 10 ans), ados, universitaires, adultes… 

              Avec <strong>ArcheoIT</strong>,venez vivre l'aventure !
              
              Dégager d’authentiques vestiges archéologiques!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('ArcheoIT_Images/conference.jpg')}}" class="img-fluid rounded-start m-2" alt="conference">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Conferences</h5>
            <p class="card-text">La conférence archéologique annuelle,organisée par <strong>ArcheoIT</strong> de la région, offre une occasion unique de découvrir les dernières avancées de la recherche archéologique dans notre région. Cette année, nous mettons en lumière les découvertes les plus récentes et les perspectives prometteuses pour l'avenir de l'archéologie locale.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{asset('ArcheoIT_Images/voyage.jpg')}}" class="img-fluid rounded-start m-2" alt="voyage accordion">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Voyages</h5>
            <p class="card-text">Chaque année,durant les vacances de Pâques,nous proposons un voyage à l'étranger pour décrouvrir une ville (Rome, Barcelone, ...) ou une région (Provence, Andalousie, ...). 

              L’accent est mis sur la découverte de sites archéologiques et architecturaux moins connus ou moins accessibles au grand public.</p>
          </div>
        </div>
      </div>
    </div>
      <div><a href=""class="btn btnplus ">pour en savoir plus</a></div>
</div>

</div>
  
@endsection