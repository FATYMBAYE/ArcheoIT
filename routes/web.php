<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ActivitesController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DemandeStagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StagesController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
//route pour la page daccueil
Route::resource('ArcheoIT',HomeController::class);
Route::prefix('admin')->group(function () {
    //routes d'administration
    Route::resource('actualite', ActualiteController::class);
    route::resource('stages', StagesController::class);
    route::view('/admin','admins.admin')->name('admin');
    route::resource('postuler', DemandeStagesController::class)->only('index','destroy');

   
});
//route pour les stages ouverts
route::get('/activites/stageAvenir', [StagesController::class,'stage'])->name('activites.stageOuvert');
//route pour la page de presentation des activites
Route::view('/activites/presentation', 'activites.presentation')->name('activites.presentation');
//route pour la page de description generale des stages
Route::view('/activites/stage', 'activites.stage')->name('activites.stage');

//pour passer l`id stage au formulaire de contact
Route::get('/demandeStage/{id_stage}', function ($id_stage) {
    return view('forms.formDemandeStage', ['id_stage' => $id_stage]);
})->name('demandeStage');
//route pour le traitement du formulaire des demandes
route::resource('postuler', DemandeStagesController::class)->only('store');
Route::get('recherche-stages', [StagesController::class, 'recherche'])->name('rechercheStages');
route::get('sites', [SiteController::class,'index'])->name('sites.site');







