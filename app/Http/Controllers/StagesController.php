<?php

namespace App\Http\Controllers;

use App\Models\Activites;
use App\Models\Stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class StagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stages=Stage::simplePaginate(3);
        return view('admins.stagesCreate', compact('stages'));

    }
    public function stage()
    {
        $stages=Stage::simplePaginate(3);
        return View::make('activites.stageOuvert', ['stage' => $stages]);
    }
    public function recherche(Request $request)
    {
        $cible = $request->input('cible');

        $query = Stage::query();

        if ($cible) {
            $query->where('cible', $cible);
        }
        $stage = $query->simplePaginate(3);
        return view('activites.stageOuvert', compact('stage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stages=Stage::simplePaginate(3);
     
       return View::make('admins.stagesCreate', ['stages' => $stages]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //validation des donnees du formulaire
         $request->validate([
            "titre"=> "required|string|max:255",
            "description"=> "required|string",
            "cible"=> "required|string",
            "dateDebut"=> "required|date|after_or_equal:today",
            "dateFin"=> "required|date|after_or_equal:dateDebut",
            "image"=> "nullable|image|mimes:jpeg,png,jpg,gif|max:2048",
        ]);
        //enregistrement dans la base
        $stages=new Stage();
        $stages->titre= $request->input("titre");
        $stages->description= $request->input("description");
        $stages->cible= $request->input("cible");
        $stages->dateDebut= $request->input("dateDebut");
        $stages->dateFin= $request->input("dateFin");
        if($request->hasFile("image")){
            $image = $request->file("image");
            $imageName = time() .".". $image->getClientOriginalExtension();
            $image->move(public_path("imageStages"), $imageName);
            $stages->image = $imageName;
        }
        else
        {
            echo' <img src="{{asset("ArcheoIT_Images/logo-png.png"}}" alt="image">';
        }
        $stages->save();
        return redirect()->route('stages.create')->with("success", "stage modifié avec succès");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_stage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stage $stage)
    {
        return View::make('admins.stageEdit', ['stages' => $stage]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_stage)
    {
        $stages=Stage::find($id_stage);
        $stages->titre= $request->input("titre");
        $stages->description= $request->input("description");
        $stages->cible= $request->input("cible");
        $stages->dateDebut= $request->input("dateDebut");
        $stages->dateFin= $request->input("dateFin");
        if($request->hasFile("image")){
            if($stages->image)
            {
                Storage::delete('imageStages/'.$stages->image);
            }
            $image = $request->file("image");
            $imageName = time() .".". $image->getClientOriginalExtension();
            $image->move(public_path("imageStages"), $imageName);
            $stages->image = $imageName;
        }
        else
        {
           echo' <img src="{{asset("ArcheoIT_Images/logo-png.png"}}" alt="image">';
        }
        $stages->save();
        //$stages->update( $request->all() );
        return redirect()->route('stages.create')->with('success','stage modifier avec success!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_stage)
    {
        $stage=Stage::find($id_stage);
        $stage->delete();
        return redirect()->route('stages.create')->with('error','stage deleted avec success');
    }
}
