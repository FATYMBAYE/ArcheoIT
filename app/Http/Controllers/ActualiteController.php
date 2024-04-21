<?php

namespace App\Http\Controllers;

use App\Models\Activites;
use App\Models\Actualites;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actualites=Actualites::simplePaginate(3);
     
       return View::make('admins.actualite', ['actualites' => $actualites]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $actualites=Actualites::paginate(3);
     
       return View::make('admins.actualite', ['actualites' => $actualites]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation des donnees du formulaire
        $request->validate([
            "titre"=> "required|string|max:255",
            "contenu"=> "required|string",
            "image"=> "nullable|image|mimes:jpeg,png,jpg,gif|max:2048",
        ]);
        //enregistrement dans la base
        $actualite=new Actualites();
        $actualite->titre= $request->input("titre");
        $actualite->contenu= $request->input("contenu");

        if($request->hasFile("image")){
            $image = $request->file("image");
            $imageName = time() .".". $image->getClientOriginalExtension();
            $image->move(public_path("imagesActualites"), $imageName);
            $actualite->image = $imageName;
        }
        $actualite->save();
        return redirect()->route('actualite.create')->with("success", "Actualité créée avec succès");
        

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
        $actualites = Actualites::findOrFail($id);
        return View::make('admins.actuEdit', ['actualites' => $actualites]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $actualites=Actualites::find($id);
        $actualites->titre= $request->input("titre");
        $actualites->contenu= $request->input("contenu");
        if($request->hasFile("image")){
            if($actualites->image)
            {
                Storage::delete('imagesActualites/'.$actualites->image);
            }
            $image = $request->file("image");
            $imageName = time() .".". $image->getClientOriginalExtension();
            $image->move(public_path("imagesActualites"), $imageName);
            $actualites->image = $imageName;
        }
        $actualites->save();
        //$actualites->update( $request->all() );
        return redirect()->route('actualite.create')->with('success','actualite modifier avec success!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $actualites=Actualites::find($id);
        $actualites->delete();
        return redirect('actualite.create')->with('success','actualite deleted avec success');
    }
}
