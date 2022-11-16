<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Joueur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JoueurController extends Controller
{

      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joueur=Joueur::all();
        return view('admin.page.joueur.index')->with('joueurs',$joueur);
    }

    public function Add()
    {
        return view('admin.page.joueur.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $joueur=new Joueur();
        $joueur->nom=$request->nom;
        $joueur->date_nais=$request->date_nais;
        $joueur->nationalite=$request->nationalite;
        $joueur->nationalite_en=$request->nationalite_en;
        $joueur->lieu_nais=$request->lieu_nais;
        $joueur->taille=$request->taille;
        $joueur->poids=$request->poids;
        $joueur->pied_fort=$request->pied_fort;
        if (request()->file('photo')!=null) {
            $photo=request()->file('photo');
            $imageName=$photo->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('photo')->storeAs('public/imgs',$imageName);
            $joueur->photo=$imageName;
        }else {
            $joueur->photo=null;
        }
        
        $joueur->save();

        if ($joueur) {
            return redirect()->back()->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $joueur=Joueur::find($id);
        return view('admin.page.joueur.update')->with('joueur',$joueur);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $joueur=Joueur::find($id);
        $joueur->nom=$request->nom;
        $joueur->date_nais=$request->date_nais;
        $joueur->nationalite=$request->nationalite;
        $joueur->nationalite_en=$request->nationalite_en;
        $joueur->lieu_nais=$request->lieu_nais;
        $joueur->taille=$request->taille;
        $joueur->poids=$request->poids;
        $joueur->pied_fort=$request->pied_fort;
        if (request()->file('photo')!=null) {
            if ($joueur->photo != null) {
                Storage::delete('public/imgs/' .$joueur->photo);
            }
            $photo=request()->file('photo');
            $imageName=$photo->getClientOriginalName();
            $imageName=time().'_'.$imageName;
            $path=request()->file('photo')->storeAs('public/imgs',$imageName);
            $joueur->photo=$imageName;
        }else {
            $joueur->photo=$joueur->photo;
        }
        
        $joueur->save();

        if ($joueur) {
            return redirect()->route('administration.joueur')->with('success','Enregistrer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $joueur=Joueur::find($id);
        if ($joueur->photo != null) {
            Storage::delete('public/imgs/' .$joueur->photo);
        }
        $joueur->delete();
        if ($joueur){
            return redirect()->back()->with('success','Supprimer avec succès!');
        }else{
            return redirect()->back()->with('error','Une erreur s\'est produite!');
        }
    }
}
