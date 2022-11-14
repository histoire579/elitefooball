<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\Stade;
use App\Models\Saison;
use App\Models\Journee;
use App\Models\Competition;
use App\Models\DetailCompetitionSaison;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_club_one()
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $journees = Journee::orderBy('libelle','desc')->get();
        $saison_id = $saisons->max('id');
        $competition = Competition::where('libelle', "Elite 1")->first();
        $detail_competition_saisons = DetailCompetitionSaison::where([['saison_id', $saison_id],['competition_id', $competition->id]])->get();
        //dd($detail_competition_saisons);
        //foreach($detail_competition_saisons as $detail_competition_saison){
            $clubs = Club::with('stade','boutique')->where('id', 2)->orderBy('created_at', 'desc')->paginate(8);
        //}
        return view('elite1.club')
        ->with('saisons', $saisons)
        ->with('journees', $journees)
        ->with('clubs', $clubs);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_club_two()
    {
        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_club_guinness()
    {
        
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
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        //
    }
}
