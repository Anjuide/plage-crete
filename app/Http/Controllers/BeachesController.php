<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beach;

class BeachesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Liste des plages";
        // Récupérer toutes les plages
        //$beaches = Beach::all();
        //$beaches = DB::select('SELECT * FROM Beaches');
        $beaches = Beach::orderBy('title', 'asc')->paginate(10);
        // Retourne la page de la liste des plages en lui envoyant les données de plages
        // return view('plages.index')->with('beaches', $beaches)->with('title', $title);
        return view('plages.index', compact('beaches','title'));
        // Retourne la liste des plages
        //return $beaches;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Ajouter une plage";
        return view('plages/ajouter-une-plage')->withTitle($title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'titre' => 'required',
            'description' => 'required',
            'image' => 'required',
            'access' => 'required',
            'installations' => 'required'
        ]);
        // On créer un objet 
        $beach = new Beach;
        // On affecte des valeurs à l'objet 
        $beach->title = $request->input('titre');
        $beach->description = $request->input( 'description');
        $beach->picture = $request->input('image');
        $beach->access = $request->input('access');
        $beach->installations = $request->input('installations');
        // On sauvegarde l'objet
        $beach->save();
        // On retourne à la page des plages et on envoie des variable
        return redirect('/plages')->with('success', 'Plage ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Belles plages";
        $beach = Beach::find($id);
        return view('plages/afficher-une-plage', compact('title', 'beach'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Modifier la plage";
        $beach = Beach::find($id);
        return view('plages/modifier-une-plage', compact('title', 'beach'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'titre' => 'required',
            'description' => 'required',
            'image' => 'required',
            'access' => 'required',
            'installations' => 'required'
        ]);
        // On récupère l'objet 
        $beach = Beach::find($id);
        // On reaffecte des valeurs à l'objet 
        $beach->title = $request->input('titre');
        $beach->description = $request->input('description');
        $beach->picture = $request->input('image');
        $beach->access = $request->input('access');
        $beach->installations = $request->input('installations');
        // On sauvegarde l'objet
        $beach->save();
        // On retourne à la page des plages et on envoie des variable
        return redirect('/plages')->with('success', 'Plage modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $beach = Beach::find($id);
        $beach->delete();
        return redirect('/plages')->with('success', 'Plage supprimée');
    }
}
