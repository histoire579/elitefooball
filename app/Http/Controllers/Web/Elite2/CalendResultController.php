<?php

namespace App\Http\Controllers\Web\Elite2;

use App\Http\Controllers\Controller;
use App\Models\Matche;
use App\Models\Saison;
use App\Models\Phase;
use App\Models\Competition;
use App\Models\StatistiqueJoueur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Exception;

class CalendResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $saisons = Saison::orderBy('libelle','desc')->get();
            $competition = Competition::where('libelle', "Elite 2")->first();
            $phases = DB::select('SELECT distinct(p.libelle),p.id FROM detail_competition_saisons d,phases p WHERE d.phase_id=p.id AND d.competition_id='.$competition->id.' AND d.saison_id='.$saisons->max('id'));
            $calendiers = Matche::with('club1','club2','stade')->where([['saison_id', $saisons->max('id')],['competition_id', $competition->id],['type', 'Calendrier']])->orderBy('date','desc')->get();
            $resultats = Matche::with('club1','club2','stade')->where([['saison_id', $saisons->max('id')],['competition_id', $competition->id],['type', 'Resultat']])->orderBy('date','desc')->get();
            $buteurs = DB::select('SELECT j.photo,j.nom,SUM(s.but_marque) AS but FROM statistique_joueurs s,joueurs j WHERE s.joueur_id=j.id AND saison_id='.$saisons->max('id').' AND s.competition_id='.$competition->id.' GROUP BY joueur_id ORDER BY but DESC');
            $photo = $buteurs[0]->photo;
            $meilleur_buteur = $buteurs[0]->nom;
            $nbre_but = $buteurs[0]->but;
            $passeurs = DB::select('SELECT j.photo,j.nom,SUM(s.passe_decisive) AS passe FROM statistique_joueurs s,joueurs j WHERE s.joueur_id=j.id AND saison_id='.$saisons->max('id').' AND s.competition_id='.$competition->id.' GROUP BY joueur_id ORDER BY passe DESC');
            $photo2 = $passeurs[0]->photo;
            $meilleur_passeur = $passeurs[0]->nom;
            $nbre_passe = $passeurs[0]->passe;
            return view('elite2.calend_result')
            ->with('saisons', $saisons)
            ->with('phases', $phases)
            ->with('calendiers', $calendiers)
            ->with('resultats', $resultats)
            ->with('photo', $photo)
            ->with('meilleur_buteur', $meilleur_buteur)
            ->with('nbre_but', $nbre_but)
            ->with('photo2', $photo2)
            ->with('meilleur_passeur', $meilleur_passeur)
            ->with('nbre_passe', $nbre_passe);
        } catch (Exception $e) {
            return $e->getMessage();
            abort(404, 'Cette page n\est pas disponible.');
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matche  $matche
     * @return \Illuminate\Http\Response
     */
    public function show(Matche $matche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matche  $matche
     * @return \Illuminate\Http\Response
     */
    public function edit(Matche $matche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matche  $matche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matche $matche)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matche  $matche
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matche $matche)
    {
        //
    }
}
