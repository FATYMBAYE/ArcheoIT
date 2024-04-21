@extends('layouts.app')
@section('title','Stage ouvert')

@section('header')
    <h1>Nos offres de Stages en Archéologie</h1>
    <h5>Explorez nos offres de stages dès aujourd'hui et préparez-vous à vivre une expérience qui vous transportera dans le temps !</h5>
@endsection

@section('content')
  <h1>Découvrez nos Stages en Archéologie</h1>
  <p>Rejoignez-nous pour une aventure inoubliable à travers les époques, où vous pourrez découvrir les secrets enfouis de civilisations anciennes et contribuer à l'avancement de la recherche archéologique.</p>

  <div class="">
    <form action="{{ route('rechercheStages') }}" method="GET">
      <div class="mb-3">
          <label for="cible" class="form-label">Cible</label>
          <select class="form-select w-25  z-3" id="cible" name="cible">
              <option value="">Toutes les cibles</option>
              <option value="petit">Petit</option>
              <option value="grand">Grand</option>
              <option value="tout public">Tout public</option>
          </select>
      </div>
      <button type="submit" class="btn btn-success">Rechercher</button>
  </form>
  
    {{-- @dd($stages) --}}
    @foreach ($stage as $stages)
   
    <div class="card row m-3 z-n1">
        <div class="row">
          <div class="col-md-4">
            @if ($stages->image)
            <img src="{{asset('imageStages/'.$stages->image)}}" alt="image de stage" class="img-fluid rounded-start">
            @else
            <img src="{{asset('ArcheoIT_Images/logo-png.png')}}" alt="image de stage" class="img-fluid rounded-start">   
            @endif
            <h6 class="card-text"><small class="text-muted">Date debut:{{$stages->dateDebut}}</small></h6>
            <h6 class="card-text"><small class="text-muted">Date fin:{{$stages->dateFin}}</small></h6>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title">{{$stages->titre}}</h4>
              <p class="card-text">{{$stages->description}}</p>
              <h6 class="card-title">Cible:{{$stages->cible}}</h6>
              <a href="{{ route('demandeStage',$stages->id_stage)}}" class="btn btn-success">soumettre votre candidature</a>
            </div>
          </div>
          </div>
       </div>
    @endforeach
  </div>
  <div class="d-flex justify-content-center">
    {{$stage->links()}}
</div>
@endsection