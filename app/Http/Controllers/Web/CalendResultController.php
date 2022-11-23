<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Matche;
use App\Models\Saison;
use App\Models\Phase;
use App\Models\Competition;
use App\Models\StatistiqueJoueur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalendResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_calend_result_one()
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $saison_id = $saisons->max('id');
        $competition = Competition::where('libelle', "Elite 1")->first();
        $phases = DB::select('SELECT distinct(p.libelle),p.id FROM detail_competition_saisons d,phases p WHERE d.phase_id=p.id AND d.competition_id='.$competition->id.' AND d.saison_id='.$saison_id);
        $calendiers = Matche::with('club1','club2','stade')->where([['saison_id', $saison_id],['competition_id', $competition->id],['type', 'Calendrier']])->orderBy('date','desc')->get();
        $resultats = Matche::with('club1','club2','stade')->where([['saison_id', $saison_id],['competition_id', $competition->id],['type', 'Resultat']])->orderBy('date','desc')->get();
        return view('elite1.calend_result')
        ->with('saisons', $saisons)
        ->with('phases', $phases)
        ->with('calendiers', $calendiers)
        ->with('resultats', $resultats);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_calend_result_two()
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $saison_id = $saisons->max('id');
        $competition = Competition::where('libelle', "Elite 2")->first();
        $phases = DB::select('SELECT distinct(p.libelle),p.id FROM detail_competition_saisons d,phases p WHERE d.phase_id=p.id AND d.competition_id='.$competition->id.' AND d.saison_id='.$saison_id);
        $calendiers = Matche::with('club1','club2','stade')->where([['saison_id', $saison_id],['competition_id', $competition->id],['type', 'Calendrier']])->orderBy('date','desc')->get();
        $resultats = Matche::with('club1','club2','stade')->where([['saison_id', $saison_id],['competition_id', $competition->id],['type', 'Resultat']])->orderBy('date','desc')->get();
        return view('elite1.calend_result')
        ->with('saisons', $saisons)
        ->with('phases', $phases)
        ->with('calendiers', $calendiers)
        ->with('resultats', $resultats);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_calend_result_guinness()
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $saison_id = $saisons->max('id');
        $competition = Competition::where('libelle', "Guinness super league")->first();
        $phases = DB::select('SELECT distinct(p.libelle),p.id FROM detail_competition_saisons d,phases p WHERE d.phase_id=p.id AND d.competition_id='.$competition->id.' AND d.saison_id='.$saison_id);
        $calendiers = Matche::with('club1','club2','stade')->where([['saison_id', $saison_id],['competition_id', $competition->id],['type', 'Calendrier']])->orderBy('date','desc')->get();
        $resultats = Matche::with('club1','club2','stade')->where([['saison_id', $saison_id],['competition_id', $competition->id],['type', 'Resultat']])->orderBy('date','desc')->get();
        return view('elite1.calend_result')
        ->with('saisons', $saisons)
        ->with('phases', $phases)
        ->with('calendiers', $calendiers)
        ->with('resultats', $resultats);
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
