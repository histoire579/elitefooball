<?php

namespace App\Http\Controllers\Web\Elite1;

use App\Http\Controllers\Controller;
use App\Models\Joueur;
use App\Models\Saison;
use App\Models\Competition;
use App\Models\DetailCompetitionSaison;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Exception;

class JoueurController extends Controller
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
            $detail_competition_saisons = DetailCompetitionSaison::with('club')->where([['competition_id', $competition->id], ['saison_id', $saisons->max('id')]])->get();
            $joueurs =  DB::select('SELECT s.id AS saison_id,j.id AS joueur_id,j.photo,j.nom,pa.drapeau,pa.nom AS nationalite,j.pied_fort,p.libelle AS poste,d.dorssad,c.logo,c.nom AS club FROM detail_club_saisons d,joueurs j,postes p,saisons s,clubs c,pays pa WHERE d.club_id=c.id AND d.joueur_id=j.id AND d.poste_id=p.id AND d.saison_id=s.id AND j.pays_id=pa.id AND d.saison_id='.$saisons->max('id').' AND d.club_id IN (SELECT club_id FROM detail_competition_saisons WHERE competition_id='.$competition->id.' AND saison_id='.$saisons->max('id').')');
            return view('elite1.joueur')
            ->with('joueurs', $joueurs)
            ->with('saisons', $saisons)
            ->with('detail_competition_saisons', $detail_competition_saisons);
        } catch (Exception $e) {
            return $e->getMessage();
            abort(404, 'Cette page n\est pas disponible.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function joueur_by_club(Request $request)
    {
        try {
            $validator = FacadesValidator::make($request->all(), [
                'saison_id' => ['required', 'numeric']
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            }
            else if($request->club_id == null)
            {
                $saisons = Saison::orderBy('libelle','desc')->get();
                $competition = Competition::where('libelle', "Elite 1")->first();
                $detail_competition_saisons = DetailCompetitionSaison::with('club')->where([['competition_id', $competition->id], ['saison_id', $request->saison_id]])->get();
                $joueurs =  DB::select('SELECT s.id AS saison_id,j.id AS joueur_id,j.photo,j.nom,pa.drapeau,pa.nom AS nationalite,j.pied_fort,p.libelle AS poste,d.dorssad,c.logo,c.nom AS club FROM detail_club_saisons d,joueurs j,postes p,saisons s,clubs c,pays pa WHERE d.club_id=c.id AND d.joueur_id=j.id AND d.poste_id=p.id AND d.saison_id=s.id AND j.pays_id=pa.id AND d.saison_id='.$request->saison_id.' AND d.club_id IN (SELECT club_id FROM detail_competition_saisons WHERE competition_id='.$competition->id.' AND saison_id='.$request->saison_id.')');
                return view('elite1.joueur')
                ->with('joueurs', $joueurs)
                ->with('saisons', $saisons)
                ->with('detail_competition_saisons', $detail_competition_saisons);
            }
            else
            {
                $saisons = Saison::orderBy('libelle','desc')->get();
                $competition = Competition::where('libelle', "Elite 1")->first();
                $detail_competition_saisons = DetailCompetitionSaison::with('club')->where([['competition_id', $competition->id], ['saison_id', $request->saison_id]])->get();
                $joueurs =  DB::select('SELECT s.id AS saison_id,j.id AS joueur_id,j.photo,j.nom,pa.drapeau,pa.nom AS nationalite,j.pied_fort,p.libelle AS poste,d.dorssad,c.logo,c.nom AS club FROM detail_club_saisons d,joueurs j,postes p,saisons s,clubs c,pays pa WHERE d.club_id=c.id AND d.joueur_id=j.id AND d.poste_id=p.id AND d.saison_id=s.id AND j.pays_id=pa.id AND d.saison_id='.$request->saison_id.' AND d.club_id IN (SELECT club_id FROM detail_competition_saisons WHERE competition_id='.$competition->id.' AND saison_id='.$request->saison_id.' AND club_id='.$request->club_id.')');
                return view('elite1.joueur')
                ->with('joueurs', $joueurs)
                ->with('saisons', $saisons)
                ->with('detail_competition_saisons', $detail_competition_saisons);
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
