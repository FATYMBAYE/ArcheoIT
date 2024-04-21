@extends('layouts.app')
@section('title','formulaire demande de stage')

@section('header')
<h1>Demande de stage</h1>
    
@endsection

@section('content')
@if (session('success'))
{{-- @dd(session('success')) --}}
  <div class="alert alert-success ">
    {{session('success')}}
  </div> 
@endif
    {{-- formulaire demande de stage --}}
    <div><form action="{{ route('postuler.store') }}" method="POST">
        @csrf
        <input type="hidden" name="id_stage" value="{{ $id_stage}}">
        
        <div class="mb-3">
            <label for="nom_user" class="form-label">Nom*</label>
            <input type="text" class="form-control @error('nom_user') is-invalid @enderror" id="nom_user" name="nom_user" value="{{ old('nom_user') }}">
            @error('nom_user')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="prenom_user" class="form-label">Prénom*</label>
            <input type="text" class="form-control @error('prenom_user') is-invalid @enderror" id="prenom_user" name="prenom_user" value="{{ old('prenom_user') }}">
            @error('prenom_user')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="mail_user" class="form-label">Adresse Mail*</label>
            <input type="email" class="form-control @error('mail_user') is-invalid @enderror" id="mail_user" name="mail_user" value="{{ old('mail_user') }}">
            @error('mail_user')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone_user" class="form-label">Telephone*</label>
            <input type="tel" class="form-control" @error('phone_user') is-invalid @enderror id="phone_user" name="phone_user" value="{{ old('phone_user') }}">
            @error('phone_user')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="naissance" class="form-label">date de naissance*</label>
            <input type="date" class="form-control @error('naissance') is-invalid @enderror" id="naissance" name="naissance" value="{{ old('naissance') }}">
            @error('naissance')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="commentaires" class="form-label">Commentaires</label>
            <textarea class="form-control" @error('commentaires') is-invalid @enderror id="commentaires" name="commentaires" rows="3">{{old('commentaires') }}</textarea>
            @error('commentaires')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="ms-4">
            <button type="submit" class="btn btnsubmit m-3 w-25">Postuler</button>
            <button type="reset" class="btn btn-danger ">Annuler</button></div>
        
    </form>
    </div>
@endsection
