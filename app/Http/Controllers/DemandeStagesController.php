<?php

namespace App\Http\Controllers;

use App\Models\Demande_Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DemandeStagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demandes=Demande_Stage::with('Stage')->simplePaginate(3);
        //dd($demandes);
     
        return View::make('admins.stageDemande', ['demandes' => $demandes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_user' => 'required|string|max:255',
            'prenom_user' => 'required|string|max:255',
            'mail_user' => 'required|email|max:255',
            'phone_user' => 'required|string|max:20',
            'naissance' => 'required|date',
            'commentaires' => 'nullable|string',
           
        ]);
       
$demande = new Demande_Stage();
$demande->id_stage = $request->input('id_stage');
$demande->nom_user = $request->input('nom_user');
$demande->prenom_user = $request->input('prenom_user');
$demande->mail_user = $request->input('mail_user');
$demande->phone_user = $request->input('phone_user');
$demande->naissance = $request->input('naissance');
$demande->commentaires = $request->input('commentaires');

$demande->save();
// redirection vers la page demande de stage avec confirmation
return redirect()->route('demandeStage', ['id_stage' => $demande->id_stage])->with('success', 'Votre demande a été soumise avec succès.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $Id_demande)
    {
        $demande=Demande_Stage::find($Id_demande);
        $demande->delete();
        return redirect('postuler.index')->with('success','demande est supprimer avec success');
    }
}
