@extends('admins.admin')

@section('title','actualite')


@section('content')

<div class="container">
<h2 class="text-center p-4">Modifier une actualites</h2>
<div class="container">
<form method="POST" enctype="multipart/form-data" action="{{route('actualite.update',$actualites->id)}}" class="p-4">
  @csrf
  @method('put')
  <div class="row mb-3">
    <label for="title" class="col-sm-2 col-form-label">Titre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" name="titre" value="{{$actualites->titre}}" @error('titre') is-invalid @enderror>
      @error('titre')
        <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
          
      @enderror
    </div>
  </div>
  <div class="row mb-3">
    <label for="contenu" class="col-sm-2 col-form-label">Contenu</label>
    <div class="col-sm-10">
      <textarea name="contenu"id='contenu' class="form-control" cols="30" rows="10" @error('contenu') is-invalid @enderror> {{$actualites->contenu}}</textarea>
      @error('contenu')
      <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
        
    @enderror
    </div>

  </div>
  <div class="row mb-3">
    <label for="image" class="col-sm-2 col-form-label">Images</label>
    <div class="col-sm-10">
      @if ($actualites->image)
      <img src="src="{{asset('imagesActualites/'.$actualites->image)}} alt="image de l`actualite" class="w-50">
      @endif
      <input name="image" class="form-control" type="file" accept="image/*" id='image's></input>
    </div>
    
  </div>
  <div class="text-center">
    <button type="submit" class="btn w-25 btnsubmit">Modifier</button>
</div>

</form>
</div>
</div>

@endsection