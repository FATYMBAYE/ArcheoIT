@extends('layouts.app')

@section('title','Activites')

@section('header')
<div class="scrolling-text-container">
    <h2 class="scrolling-text">Plongez au cœur de l'archéologie avec nos activités passionnantes !</h2>
  </div>
@endsection

@section('content')
<h1 class="text-center m-4">NOS ACTIVITES</h1>
<p>Tout au long de l'année, <strong>ArcheoIT</strong>organise un grand nombre d'activités à la mesure et au goût de chacun; des <span class="myspan">stages </span>de fouilles, des <span class="myspan">excursions</span> et des <span class="myspan">super conférences</span> en été, mais aussi <span class="myspan">un week-end à thème</span> et un  <span class="myspan">voyage </span> inoubliable au printemps, et des visites d'expositions tout au long de l'année.... Bref, de quoi vous cultiver dans la joie et l'ambiance avec nous!
</p>
<div class="container row g-2 activites m-1">
  
    <div class="col-6">
        <h2>
            Stages
        </h2>
        <h5>Objectifs des stages </h5>
        <p>Ces stages visent à fournir aux participants une expérience pratique dans le domaine de l'archéologie. Les objectifs principaux incluent l'acquisition de compétences sur le terrain, la participation à des fouilles archéologiques réelles, et la compréhension des méthodes et des techniques utilisées dans la recherche archéologique.</p>
       <h5> Contenu du stage</h5>
       <p>Les stagiaires auront l'occasion de participer à des fouilles archéologiques sur des sites historiques locaux. Ils apprendront les méthodes de prospection, de documentation et de préservation des découvertes archéologiques. Des séances de formation sur l'utilisation d'outils et d'équipements spécialisés seront également organisées.</p>
       <div class=" "><a href="{{route('activites.stage')}}" class="btn btn-secondary m-2">pour en savoir plus</a>
        <a href="{{route('activites.stageOuvert')}}" class="btn btn-success m-2">les stages a venir</a></div>
    </div>
    <div class="col-6">
        <img src="{{asset('ArcheoIT_Images/stage2.jpg')}}" alt="images_stage" class="p-0 w-100 m-5">
    </div>
    <div class="col-6">
        <img src="{{asset('ArcheoIT_Images/voyage1.jpg')}}" alt="images_stage" class="p-0 w-100 m-0  ">
       
    </div>
    <div class="col-6">
        <h2>
            Voyages
        </h2>
        <h5>L'aventure en voyageant autrement</h5>
        <p>Chaque année, durant les vacances de Pâques, nous proposons un voyage à l'étranger pour décrouvrir une ville (Rome, Barcelone, ...) ou une région (Provence, Andalousie, ...). 

            L’accent est mis sur la découverte de sites archéologiques et architecturaux moins connus ou moins accessibles au grand public.
            
            Ces voyages se veulent originaux et inédits. Ouvert dès l'âge de 14 ans, venez découvrir ces lieux magiques avec nous !</p>
    </div>
    <div class="col-6">
        <h2>
            Conférences 
        </h2>
        <h5> Explorez les Mystères du Passé</h5>
        <p>Les conférences en archéologie offrent une fascinante exploration des mystères du passé. Animées par des experts passionnés, ces événements captivants vous emmènent dans un voyage à travers le temps, révélant les secrets des civilisations anciennes, des découvertes archéologiques récentes et des avancées de la recherche dans ce domaine captivant.</p>

            <p>Découvrez les dernières fouilles, les artefacts extraordinaires, et les histoires qui se cachent derrière chaque découverte. Des sujets variés, tels que l'architecture ancienne, l'art rupestre, les rituels funéraires, et bien plus encore, sont abordés lors de ces conférences, permettant à chacun d'explorer ses intérêts et d'élargir ses connaissances sur le passé de l'humanité.</p>
       <p>Ne manquez pas l'opportunité d'explorer le passé à travers les yeux des archéologues et de vous inspirer par les récits passionnants de nos ancêtres. Rejoignez-nous lors de nos prochaines conférences en archéologie et laissez-vous transporter dans un monde où le passé prend vie sous vos yeux.</p>
       <a href="" class="btn btn-secondary  m-2">pour en savoir plus</a>
    </div>
    <div class="col-6">
        <img src="{{asset('ArcheoIT_Images/stage2.jpg')}}" alt="images_stage" class="p-0 w-100 m-5">
        <div class="container-fluid">
            <H2 class="text-center">Autres Activites Importantes</H2>
            <div class="container overflow-hidden text-center">
                <div class="row gy-5 justify-content-center">
                  <div class="col-6">
                    <div class="p-3">Visites et excursions</div>
                  </div>
                  <div class="col-6">
                    <div class="p-3">Week-ends thématiques</div>
                  </div>
                  <div class="col-6">
                    <div class="p-3">Randonnées</div>
                  </div>
                  <div class="col-6">
                    <div class="p-3">Job Dating</div>
                  </div>
                </div>
              </div>
        
        </div>
    </div>
    <div class="col-6"><h2>Nos activités scientifiques</h2>
    <h5>Un site gallo-romain</h5>
    <p>Initiées il y a plusieurs années, les fouilles gallo-romaines ont lieu sur le site de la villa de Montegnet. Des recherches qui permettront notamment de mieux comprendre la romanisation du pagus condrustis.</p>
    <h5>Un site médiéval et post-médiéval</h5>
    <p>Une église, quelques maisons, un château moderne... Mais où se trouve le reste du village ? A Haltinne, nous sommes sur les traces du village médiéval disparu. Le chantier se trouve au pied d'une motte castrale redécouverte par nos stagiaires en 2009 lors de l'activité de prospection.</p>
    <h5>Un atelier de céramologie</h5>
    <p>Lors des stages d’archéologie, les participants ont l’occasion de traiter le matériel trouvé pendant la fouille, et plus particulièrement le matériel céramique : nettoyage, marquage, inventaire, tri... On passe ensuite à la phase "puzzle": les participants tentent de restituer la pièce d'origine en assemblant les tessons de céramique. Si l'assemblage est assez important, on peut aussi s’essayer au dessin technique.
    </p>
</div>
<div class="col-6">
    <img src="{{asset('ArcheoIT_Images/scientifique.jpg')}}" alt="images_stage" class="p-0 w-100 m-lg-5">
   
</div>

</div>
  
@endsection