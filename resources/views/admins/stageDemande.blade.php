@extends('layouts.app')

@section('title', 'Demandes de Stage')

@section('content')
    <h1>Liste des demandes de stage</h1>
    <table class="table table-bordered  table-active ">
        <thead class=" text-center">
            <tr>
                <th>#</th>
                <th>Stage Demandé</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Date de naissance</th>
                <th>Message</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($demandes as $demande)
                <tr>
                    <td>{{ $demande->Id_demande}}</td>
                    <td>{{ $demande->stage->titre}}</td>
                    <td>{{ $demande->nom_user }}</td>
                    <td>{{ $demande->prenom_user }}</td>
                    <td><a href="mailto:{{ $demande->mail_user }}">{{ $demande->mail_user }}</a></td>
                    <td><a href="tel:{{ $demande->phone_user }}">{{ $demande->phone_user }}</a></td>
                    <td>{{ $demande->naissance}}</td>
                    <td>{{ $demande->commentaires}}</td>

                    <td>
                        <form action="{{ route('postuler.destroy', $demande->Id_demandes) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Etes vous sur de vouloir supprimer cette demande ?')" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $demandes->links() }}
@endsection
