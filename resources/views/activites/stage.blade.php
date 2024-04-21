@extends('layouts.app')
@section('title','Stages')

@section('header')
<div class="scrolling-text-container">
    <h2 class="scrolling-text">Découvrez les secrets du passé et forgez votre avenir avec nos stages en archéologie!</h2>
  </div>
@endsection

@section('content')
<div class="row g-4">
    <div class="col-6">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{asset('ArcheoIT_Images/stage1.jpg')}}" class="d-block w-100" alt="image_Stage">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{asset('ArcheoIT_Images/stage4.jpg')}}" class="d-block w-100" alt="image_Stage">
      </div>
      <div class="carousel-item">
        <img src="{{asset('ArcheoIT_Images/stage2.jpg')}}" class="d-block w-100" alt="image_Stage">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
  <div class="col-6 stage"><h5>Les stages de fouille sont ouverts à tous, à partir de 10 ans </h5>
    <div>
        <h6 class="text-center">Nos Différents types de stages</h6>
        <ul class="text-center">
            <li>Stage de fouille archéologique de terrain</li>
            <li>Stage de documentation et d'analyse</li>
            <li>Stage de conservation et de restauration </li>
            <li>Stage de gestion de projet archéologique</li>
        </ul>
    </div>
</div>
<div class="col-6">
    <h5>Stage de fouille archéologique de terrain</h5>
    <p>Permet aux participants d'acquérir une expérience pratique sur le terrain en participant à des fouilles sous la supervision d'archéologues professionnels.</p>
    <div class="">
        <img src="{{asset('ArcheoIT_Images/stage2.jpg')}}" alt="images_stage" class="p-0 w-100 ">
    </div>
</div>
<div class="col-6">
    <h5>Stage de documentation et d'analyse</h5>
    <p>Axé sur l'apprentissage des techniques de documentation, de catalogage et d'analyse des artefacts et des données recueillies lors des fouilles.</p>
    <div class="">
        <img src="{{asset('ArcheoIT_Images/recherche.png')}}" alt="images_stage" class="p-0 w-100 ">
    </div>
</div>
<div class="col-6">
    <h5>Stage de conservation et de restauration</h5>
    <p>ffre une formation sur les méthodes de conservation et de restauration des artefacts et des structures archéologiques afin de préserver leur intégrité à long terme.</p>
    <div class="">
        <img src="{{asset('ArcheoIT_Images/conservation.jpg')}}" alt="images_stage" class="p-0 w-100 ">
    </div>
</div>
<div class="col-6">
    <h5>Stage de gestion de projet archéologique</h5>
    <p>Fournit une expérience dans la planification, l'organisation et la gestion de projets archéologiques, y compris la budgétisation, la logistique et les aspects administratifs.</p>
    <div class="">
        <img src="{{asset('ArcheoIT_Images/projet.jpg')}}" alt="images_stage" class="p-0 w-100 ">
    </div>
</div>
<div class="col-4">
    <h5>Lieu de stages</h5>
    <p>
        Le lieu des stages de fouilles peut varier en fonction des sites archéologiques disponibles et des partenariats établis avec des institutions ou des organisations locales.et sera preciser sur la description de la poste</p>
</div>
<div class="col-4">
    <h5>Logement</h5>
    <p>Les participants ont la possibilité de camper directement sur le site de fouilles, où des emplacements sont préparés avec des tentes fournies par l'organisateur. Ils bénéficient ainsi d'une immersion totale dans l'environnement archéologique et d'une expérience de vie en plein air.</p>
</div>
<div class="col-4">
    <h5>Que faut-il apporter?</h5>
    <p>Un matelas pneumatique, un sac de couchage et une bonne couverture (les nuits sont froides !). Des tenues sportives et de bons pulls, des chaussures fermées pour aller sur les chantiers, un vêtement de pluie et une paire de bottes, sans oublier chapeau de soleil et crème solaire !

        Tout le matériel de fouille est fourni par ArcheoIT.</p>
</div>
<div class="col-12 m-3"><a href="{{route('activites.stageOuvert')}}" class="btn btn-success ">Les Stages a venir</a></div>

</div>

    
@endsection