<?php

namespace App\Http\Controllers\Web\Elite2;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\Matche;
use Illuminate\Http\Request;
use App\Models\Competition;
use App\Models\FeuilleMatch;
use App\Models\DetailMatch;
use Illuminate\Support\Facades\DB;
use Exception;

class DetailCalendResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($match_id)
    {
        try {
            $match = Matche::with('club1','club2','arbitre1','arbitre2','arbitre3','arbitre4','journee','stade')->where('id', $match_id)->first();
            $entrant_club1 = DB::select('SELECT j.nom,d.dorssad FROM feuille_matches f,joueurs j,detail_club_saisons d WHERE f.joueur_id=j.id AND f.joueur_id=d.joueur_id AND f.saison_id=d.saison_id AND f.club_id=d.club_id AND f.match_id='.$match_id.' AND f.club_id='.$match->club1->id.' AND f.titularisation="Entrant"');
            $entrant_club2 = DB::select('SELECT j.nom,d.dorssad FROM feuille_matches f,joueurs j,detail_club_saisons d WHERE f.joueur_id=j.id AND f.joueur_id=d.joueur_id AND f.saison_id=d.saison_id AND f.club_id=d.club_id AND f.match_id='.$match_id.' AND f.club_id='.$match->club2->id.' AND f.titularisation="Entrant"');
            $remplaçant_club1 = DB::select('SELECT j.nom,d.dorssad FROM feuille_matches f,joueurs j,detail_club_saisons d WHERE f.joueur_id=j.id AND f.joueur_id=d.joueur_id AND f.saison_id=d.saison_id AND f.club_id=d.club_id AND f.match_id='.$match_id.' AND f.club_id='.$match->club1->id.' AND f.titularisation="Remplaçant"');
            $remplaçant_club2 = DB::select('SELECT j.nom,d.dorssad FROM feuille_matches f,joueurs j,detail_club_saisons d WHERE f.joueur_id=j.id AND f.joueur_id=d.joueur_id AND f.saison_id=d.saison_id AND f.club_id=d.club_id AND f.match_id='.$match_id.' AND f.club_id='.$match->club2->id.' AND f.titularisation="Remplaçant"');
            $buteurs_match_club1 = DB::select('SELECT j.id,j.photo,j.nom FROM statistique_joueurs s,joueurs j WHERE s.joueur_id=j.id AND s.but_marque!=0 AND s.match_id='.$match_id.' AND s.club_id='.$match->club1->id);
            $passeurs_match_club1 = DB::select('SELECT j.id,j.photo,j.nom FROM statistique_joueurs s,joueurs j WHERE s.joueur_id=j.id AND s.passe_decisive!=0 AND s.match_id='.$match_id.' AND s.club_id='.$match->club1->id);
            $homme_match = DB::select('SELECT j.id,j.photo,j.nom, c.nom as club FROM statistique_joueurs s,joueurs j, clubs c WHERE s.club_id=c.id AND s.joueur_id=j.id AND s.match_id='.$match_id.' AND s.homme_match="Oui"');
            $buteurs_match_club2 = DB::select('SELECT j.id,j.photo,j.nom FROM statistique_joueurs s,joueurs j WHERE s.joueur_id=j.id AND s.but_marque!=0 AND s.match_id='.$match_id.' AND s.club_id='.$match->club2->id);
            $passeurs_match_club2 = DB::select('SELECT j.id,j.photo,j.nom FROM statistique_joueurs s,joueurs j WHERE s.joueur_id=j.id AND s.passe_decisive!=0 AND s.match_id='.$match_id.' AND s.club_id='.$match->club2->id);
            $coach_club1 = Club::where('id', $match->club1->id)->get();
            $coach_club2 = Club::where('id', $match->club2->id)->get();
            $detail_match = DetailMatch::where('match_id', $match_id)->get();
            return view('elite2.detail_calend_result')
            ->with('match', $match)
            ->with('entrant_club1', $entrant_club1)
            ->with('entrant_club2', $entrant_club2)
            ->with('remplaçant_club1', $remplaçant_club1)
            ->with('remplaçant_club2', $remplaçant_club2)
            ->with('homme_match', $homme_match)
            ->with('buteurs_match_club1', $buteurs_match_club1)
            ->with('passeurs_match_club1', $passeurs_match_club1)
            ->with('buteurs_match_club2', $buteurs_match_club2)
            ->with('passeurs_match_club2', $passeurs_match_club2)
            ->with('coach_club1', $coach_club1)
            ->with('coach_club2', $coach_club2)
            ->with('detail_match', $detail_match);
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
