@extends('admins.admin')

@section('title','actualite')


@section('content')

<h2 class="text-center p-4">Gestion des Actualites</h2>
<div class="container">
  @if (session('success'))
  {{-- @dd(session('success')) --}}
    <div class="alert alert-success ">
      {{session('success')}}
    </div> 
  @endif
<form method="POST" enctype="multipart/form-data" action="{{route('actualite.store')}}" class="p-4">
  @csrf
  <div class="row mb-3">
    <label for="title" class="col-sm-2 col-form-label">Titre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" name="titre" placeholder ='titre de l`actualite' @error('titre') is-invalid @enderror>
      @error('titre')
        <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
          
      @enderror
    </div>
  </div>
  <div class="row mb-3">
    <label for="contenu" class="col-sm-2 col-form-label">Contenu</label>
    <div class="col-sm-10">
      <textarea name="contenu"id='contenu' class="form-control" cols="30" rows="10" placeholder ='ajouter un contenu' @error('contenu') is-invalid @enderror></textarea>
      @error('contenu')
      <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
        
    @enderror
    </div>

  </div>
  <div class="row mb-3">
    <label for="image" class="col-sm-2 col-form-label">Images</label>
    <div class="col-sm-10">
      <input name="image" class="form-control" type="file" accept="image/*" id='image'></input>
    </div>
    
  </div>
  <div class="text-center">
    <button type="submit" class="btn w-25 btnsubmit">Enregistrer</button>
</div>

</form>
</div>

<div class=" ">
  <table class="table mt-5 table-bordered table-sm ">
      <thead>
          <tr>
              <th scope="col">#</th>
              <th scope="col">Titre de l`actualite</th>
              <th scope="col">Contenu</th>
              <th scope="col">Date publiee</th>
              <th scope="col">Images</th>

              <th scope="col">Actions</th>
          </tr>
      </thead>
      <tbody>
        {{-- @dd($actualites) --}}
      @foreach( $actualites as $actu)
  
          <tr>
              <td scope='col'>{{$actu->id}}</td>
              <td scope='col'>{{ $actu->titre}}</td>
              <td scope='col'>{{ $actu->contenu}}</td>
              <td scope='col'>{{ $actu->created_at}}</td>
              
              <td scope='col'>
                @if ($actu->image)

                  <img src="{{asset('imagesActualites/'.$actu->image)}}" alt="image" class="w-100">
               
                @else
                     <div>N/A</div>
                      
              @endif</td>
              <td scope='col'>
                   <a href="{{route('actualite.edit',$actu->id)}}">
                      <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i>Edit</button></a>

                   <form method="POST" action="{{route('actualite.destroy', $actu->id)}}"class="d-inline">
                    @csrf
                    
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Etes vous sur de vouloir supprimer cette actualites?')" class="btn btn-danger btn-sm">Supprimer</button>
                  </form>
              </td>
          </tr>
      @endforeach
   
      </tbody>
  </table>
  <div class="d-flex justify-content-center mt-3">
    {{$actualites->links()}}
  </div>
 
</div>


    
@endsection
