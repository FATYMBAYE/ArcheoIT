@extends('layouts.app')

@section('title','site de fouille')
{{-- fichier css du Leaflet(bibliotheque js pour la creation des cartes maps) --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>

    <!-- script js de Leaflet -->
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
 integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
 crossorigin=""></script>

@section('header')
    <h2>les differentes sites de fouilles</h2>
@endsection

@section('content')

<div id="map"></div>

<script>
var map = L.map('map');
//initialisation de la carte avec les coordonnees di centre et un zoom de niveau 13 pour l`affichage des zones plus petite
map.setView([{{$center[0]}},{{$center[1]}}],13);
//ajout de tuiles openstreetmap pour afficher les images qui composent la carte ie le fond de la carte 
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    //la source de donnees cartographiques
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

//recuperation des donnees des sites et conversion en format JSON pour les rendre utilisable dans js
var sites={!! json_encode($sites)!!}
sites.forEach(site=> {
    
    var latitude =site['Coordonnée Lambert X'];
    var longitude =site['Coordonnée Lambert Y'];
    var marker =L.marker([latitude,longitude]).addTo(map)
    
});
</script>

    
@endsection
