<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\DetailClubSaison;
use App\Models\Saison;
use App\Models\Competition;
use App\Models\DetailCompetitionSaison;
use Illuminate\Http\Request;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_elite_one()
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $saison_id = $saisons->max('id');
        $detail_club_saisons = DetailClubSaison::with('joueur','poste')->where('saison_id', $saison_id)->orderBy('created_at','desc')->paginate(10);
        $competition = Competition::where('libelle', "Elite One")->first();
        $detail_competition_saisons = DetailCompetitionSaison::with('club')->where([['competition_id', $competition->id], ['saison_id', $saison_id]])->get();
        return view('elite1.joueur')
        ->with('detail_club_saisons', $detail_club_saisons)
        ->with('saisons', $saisons)
        ->with('detail_competition_saisons', $detail_competition_saisons);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_elite_two()
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $saison_id = $saisons->max('id');
        $detail_club_saisons = DetailClubSaison::with('joueur','poste')->where('saison_id', $saison_id)->orderBy('created_at','desc')->paginate(10);
        $competition = Competition::where('libelle', "Elite Two")->first();
        $detail_competition_saisons = DetailCompetitionSaison::with('club')->where([['competition_id', $competition->id], ['saison_id', $saison_id]])->get();
        return view('elite2.joueur')
        ->with('detail_club_saisons', $detail_club_saisons)
        ->with('saisons', $saisons)
        ->with('detail_competition_saisons', $detail_competition_saisons);
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
     * @param  \App\Models\DetailClubSaison  $detailClubSaison
     * @return \Illuminate\Http\Response
     */
    public function show(DetailClubSaison $detailClubSaison)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailClubSaison  $detailClubSaison
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailClubSaison $detailClubSaison)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailClubSaison  $detailClubSaison
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailClubSaison $detailClubSaison)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailClubSaison  $detailClubSaison
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailClubSaison $detailClubSaison)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function joueur_by_club_one(Request $request)
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $detail_club_saisons = DetailClubSaison::with('joueur','poste')->where([['saison_id', $request->saison_id], ['club_id', $request->club_id]])->orderBy('created_at','desc')->paginate(10);
        $competition = Competition::where('libelle', "Elite One")->first();
        $detail_competition_saisons = DetailCompetitionSaison::with('club')->where([['competition_id', $competition->id], ['saison_id', $request->saison_id]])->get();
        return view('elite1.joueur')
        ->with('detail_club_saisons', $detail_club_saisons)
        ->with('saisons', $saisons)
        ->with('detail_competition_saisons', $detail_competition_saisons);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function joueur_by_club_two(Request $request)
    {
        $saisons = Saison::orderBy('libelle','desc')->get();
        $detail_club_saisons = DetailClubSaison::with('joueur','poste')->where([['saison_id', $request->saison_id], ['club_id', $request->club_id]])->orderBy('created_at','desc')->paginate(10);
        $competition = Competition::where('libelle', "Elite Two")->first();
        $detail_competition_saisons = DetailCompetitionSaison::with('club')->where([['competition_id', $competition->id], ['saison_id', $request->saison_id]])->get();
        return view('elite2.joueur')
        ->with('detail_club_saisons', $detail_club_saisons)
        ->with('saisons', $saisons)
        ->with('detail_competition_saisons', $detail_competition_saisons);
    }
}
