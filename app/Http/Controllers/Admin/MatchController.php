<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Matche;
use App\Models\Saison;
use App\Models\Club;
use App\Models\Competition;
use App\Models\Phase;
use App\Models\Arbitre;
use App\Models\Journee;
use App\Models\Stade;
use App\Models\DetailCompetitionSaison;
use Illuminate\Http\Request;

class MatchController extends Controller
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
        $matche=Matche::with('competition','saison','club1','club2','phase','journee','stade','arbitre1','arbitre2','arbitre3','arbitre4')->get();
        return view('admin.page.match.index')->with('matchs',$matche);
    }

    public function getClub(Request $request)
    {
        $club=DetailCompetitionSaison::with('club')->where('competition_id',$request->competition_id)->where('saison_id',$request->saison_id)->get();
        return response()->json($club);
    }

    public function getJournee(Request $request)
    {
        $journee=Journee::where('saison_id',$request->saison_id)->get();
        return response()->json($journee);
    }

    public function Add()
    {
        $saison=Saison::orderBy('created_at','desc')->get();
        $club=Club::orderBy('nom','asc')->get();
        $phase=Phase::all();
        $journee=Journee::all();
        $stade=Stade::orderBy('nom','asc')->get();
        $arbitre=Arbitre::orderBy('nom','asc')->get();
        $competition=Competition::all();
        return view('admin.page.match.add')->with('saisons',$saison)->with('phases',$phase)
                    ->with('competitions',$competition)->with('club',$club)->with('journees',$journee)
                    ->with('stades',$stade)->with('arbitres',$arbitre);
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
