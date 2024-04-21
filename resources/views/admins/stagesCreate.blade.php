@extends('admins.admin')
@section('title','gestion de stage')

@section('content')
    <h1 class="text-center">Gestion de stage</h1>
    @if (session('success'))
    {{-- @dd(session('success')) --}}
      <div class="alert alert-success ">
        {{session('success')}}
      </div> 
    @endif 
    @if (session('error'))
            <div class="alert alert-danger ">{{session('error')}}</div> 
    @endif
    {{-- formulaire creation de stage --}}
    <div class="mx-auto col-md-8">
    <form action="{{route('stages.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <label for="titre" class="col-sm-2 col-form-label">Titre</label>
            <div class="col-sm-10">
            <input type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre" value="{{ old('titre') }}">
            @error('titre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="row mb-3">
            <label for="cible" class="col-sm-2 col-form-label">Cible</label>
            <div class="col-sm-10">
            <select class="form-select @error('cible') is-invalid @enderror" id="cible" name="cible">
                <option value="">Sélectionnez une cible</option>
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
            <input type="date" class="form-control @error('dateDebut') is-invalid @enderror" id="dateDebut" name="dateDebut" value="{{old('dateDebut')}}"></input>
            @error('dateDebut')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-sm-2 col-form-label">Date fin</label>
            <div class="col-sm-10">
            <input type="date" class="form-control @error('dateFin') is-invalid @enderror" id="dateFin" name="dateFin" value="{{ old('dateFin') }}"></input>
            @error('dateFin')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="row mb-3">
            <label for="image" class="col-sm-2 col-form-label">Images</label>
            <div class="col-sm-10">
                <input name="image" class="form-control" type="file" accept="image/*" id='image'></input>
            </div>        

        <div class="text-center">
            <button type="submit" class="btn btnsubmit m-3 w-50 ">Enregistrer</button>
        </div>
    </form>
    </div>

    <div class=" ">
        <table class="table mt-5 table-striped table-sm table-bordered ">
            <thead class="text-center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre de stage</th>
                    <th scope="col">Descrption</th>
                    <th scope="col">Cible</th>
                    <th scope="col">Date de debut</th>
                    <th scope="col">Date de Fin</th>
                    <th scope="col">Images</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach( $stages as $stage)
        
                <tr>
                    <td scope='col'>{{$stage->id_stage}}</td>
                    <td scope='col'>{{ $stage->titre}}</td>
                    <td scope='col'>{{ $stage->description}}</td>
                    <td scope='col'>{{ $stage->cible}}</td>
                    <td scope='col'>{{ $stage->dateDebut}}</td>
                    <td scope='col'>{{ $stage->dateFin}}</td>
                    <td scope='col'>
                      @if ($stage->image)
      
                        <img src="{{asset('imageStages/'.$stage->image)}}" alt="image" class="w-100">
                     
                      @else
                      <img src="{{asset('ArcheoIT_Images/logo-png.png')}}" alt="image" class="w-100">
                            
                      @endif
                </td>
                    <td>
                        <div class="d-flex">
                            <a href="{{route('stages.edit',$stage->id_stage)}}">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i>Modifier</button></a>
          
                             <form method="POST" action="{{route('stages.destroy', $stage->id_stage)}}"class="d-inline">
                              @csrf
                              
                              @method('DELETE')
                                <button type="submit" onclick="return confirm('Etes vous sur de vouloir supprimer ce stage ?')" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-3">
          {{$stages->links()}}
        </div>
       
      </div>
    @endsection
