@extends('admins.admin')
@section('title','gestion de stage')

@section('content')
    <h1 class="text-center">Modifier stage</h1>
    @if (session('success'))
    {{-- @dd(session('success')) --}}
      <div class="alert alert-success ">
        {{session('success')}}
      </div> 
    @endif 
    {{-- formulaire creation de stage --}}
    <div class="mx-auto col-md-8">
    <form action="{{route('stages.update',$stages->id_stage)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row mb-3">
            <label for="titre" class="col-sm-2 col-form-label">Titre</label>
            <div class="col-sm-10">
            <input type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre" value="{{$stages->titre}}">
            @error('titre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{$stages->description}}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="row mb-3">
            <label for="cible" class="col-sm-2 col-form-label">Cible</label>
            <div class="col-sm-10">
            <select class="form-select @error('cible') is-invalid @enderror" id="cible" name="cible">
                <option value="{{$stages->cible}}">{{$stages->cible}}</option>
                <option value="petit">Petit</option>
                <option value="grand">Grand</option>
                <option value="tout public">pour tous public</option>
            </select>
            @error('cible')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">Date debut</label>
            <div class="col-sm-10">
            <input type="date" class="form-control @error('dateDebut') is-invalid @enderror" id="dateDebut" name="dateDebut" value="{{$stages->dateDebut}}"></input>
            @error('dateDebut')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">Date fin</label>
            <div class="col-sm-10">
            <input type="date" class="form-control @error('dateFin') is-invalid @enderror" id="dateFin" name="dateFin" value="{{$stages->dateFin}}"></input>
            @error('dateFin')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="row mb-3">
            <label for="image" class="col-sm-2 col-form-label">Images</label>
            @if ($stages->image)
            <img src="src="{{asset('imageStages/'.$stages->image)}} alt="image de stage" class="w-50">
            @else
            <img src="src="{{asset('ArcheoIT_Images/logo-png.png')}} alt="image de stage" class="w-50">   
            @endif
            <input name="image" class="form-control" type="file" accept="image/*" id='image's></input>
          </div>
          
        <div class="text-center">
            <button type="submit" class="btn btnsubmit m-3 w-50 ">Enregistrer</button>
        </div>
    </form>
    </div>
@endsection