
@extends('layouts.app')
@section('title','Demande de contacts')

@section('header')
<h1>Demande de contacts</h1>
    
@endsection
@section('content')

<form action="{{ route('contact.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
    </div>
    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" required>
    </div>
    <div class="mb-3">
        <label for="mail" class="form-label">Mail</label>
        <input type="email" class="form-control" id="mail" name="mail" required>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

@endsection