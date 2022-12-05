<?php

namespace App\Http\Controllers\Web\Elite1;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\Stade;
use App\Models\Saison;
use App\Models\Phase;
use App\Models\Competition;
use App\Models\DetailCompetitionSaison;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Exception;

class ClubController extends Controller
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
            $competition = Competition::where('libelle', "Elite 1")->first();
            $phases = DB::select('SELECT distinct(p.libelle),p.id FROM detail_competition_saisons d,phases p WHERE d.phase_id=p.id AND d.competition_id='.$competition->id.' AND d.saison_id='.$saisons->max('id'));
            $clubs = DB::select('SELECT c.id,c.logo,c.nom AS club,c.twitter,c.facebook,c.site,st.nom AS stade FROM detail_competition_saisons d,saisons s,clubs c,competitions co,stades st WHERE d.saison_id=s.id AND d.competition_id=co.id AND d.club_id=c.id AND c.stade_id=st.id AND co.id='.$competition->id.' AND s.id='.$saisons->max('id'));
            return view('elite1.club')
            ->with('saisons', $saisons)
            ->with('phases', $phases)
            ->with('clubs', $clubs);
        } catch (Exception $e) {
            return $e->getMessage();
            abort(404, 'Cette page n\est pas disponible.');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function club_by_phase(Request $request)
    {
        try {
            $validator = FacadesValidator::make($request->all(), [
                'saison_id' => ['required', 'numeric']
            ]);
            
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            }
            else if($request->phase_id == null)
            {
                $saisons = Saison::orderBy('libelle','desc')->get();
                $competition = Competition::where('libelle', "Elite 1")->first();
                $phases = DB::select('SELECT distinct(p.libelle),p.id FROM detail_competition_saisons d,phases p WHERE d.phase_id=p.id AND d.competition_id='.$competition->id.' AND d.saison_id='.$request->saison_id);
                $clubs = DB::select('SELECT c.id,c.logo,c.nom AS club,c.twitter,c.facebook,c.site,st.nom AS stade FROM detail_competition_saisons d,saisons s,clubs c,competitions co,stades st WHERE d.saison_id=s.id AND d.competition_id=co.id AND d.club_id=c.id AND c.stade_id=st.id AND co.id='.$competition->id.' AND s.id='.$request->saison_id);
                return view('elite1.club')
                ->with('saisons', $saisons)
                ->with('phases', $phases)
                ->with('clubs', $clubs);
            }
            else
            {
                $saisons = Saison::orderBy('libelle','desc')->get();
                $competition = Competition::where('libelle', "Elite 1")->first();
                $phases = DB::select('SELECT distinct(p.libelle),p.id FROM detail_competition_saisons d,phases p WHERE d.phase_id=p.id AND d.competition_id='.$competition->id.' AND d.saison_id='.$request->saison_id);
                $clubs = DB::select('SELECT c.id,c.logo,c.nom AS club,c.twitter,c.facebook,c.site,st.nom AS stade FROM detail_competition_saisons d,saisons s,clubs c,competitions co,stades st,phases p WHERE d.saison_id=s.id AND d.competition_id=co.id AND d.club_id=c.id AND c.stade_id=st.id AND d.phase_id=p.id AND co.id='.$competition->id.' AND s.id='.$request->saison_id.' AND p.id='.$request->phase_id);
                return view('elite1.club')
                ->with('saisons', $saisons)
                ->with('phases', $phases)
                ->with('clubs', $clubs);
            }
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
    public function edit(Joueur $joueur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        //
    }
}
