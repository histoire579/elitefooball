<?php

namespace App\Http\Controllers\Web\Elite1;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\Saison;
use App\Models\Poste;
use App\Models\Matche;
use App\Models\Competition;
use App\Models\DetailClubSaison;
use App\Models\Joueur;
use App\Models\PalmaresClub;
use App\Models\StatistiqueClub;
use App\Models\StatistiqueJoueur;
use Illuminate\Http\Request;
use Illuminate\Support\Collection as SupportCollection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Exception;

class DetailClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($club_id)
    {
        try {
            $competition = Competition::where('libelle', "Elite 1")->first();
            $saisons = Saison::orderBy('libelle','desc')->get();
            $gard = Poste::where('libelle', 'Gardien')->first();
            $def = Poste::where('libelle', 'Défenseur')->first();
            $mil = Poste::where('libelle', 'Milieu')->first();
            $attaq = Poste::where('libelle', 'Attaquant')->first();
            $gardiens = DetailClubSaison::with('joueur')->where([['saison_id', $saisons->max('id')],['poste_id', $gard->id]])->get();
            $nbre_gard = $gardiens->count('id');
            $defenseurs = DetailClubSaison::with('joueur')->where([['saison_id', $saisons->max('id')],['poste_id', $def->id]])->get();
            $nbre_def = $defenseurs->count('id');
            $milieux = DetailClubSaison::with('joueur')->where([['saison_id', $saisons->max('id')],['poste_id', $mil->id]])->get();
            $nbre_mil = $milieux->count('id');
            $attaquants = DetailClubSaison::with('joueur')->where([['saison_id', $saisons->max('id')],['poste_id', $attaq->id]])->get();
            $nbre_attaq = $attaquants->count('id');
            $club = Club::with('stade','boutique')->where('id', $club_id)->first();
            $calendiers = Matche::with('competition','journee','phase','club1','club2','stade')->where([['saison_id', $saisons->max('id')],['type', 'Calendrier'],['club1_id', $club_id]])->orWhere([['saison_id', $saisons->max('id')],['type', 'Calendier'],['club2_id', $club_id]])->paginate(10);
            $resultats = Matche::with('competition','journee','phase','club1','club2','stade')->where([['saison_id', $saisons->max('id')],['type', 'Resultat'],['club1_id', $club_id]])->orWhere([['saison_id', $saisons->max('id')],['type', 'Calendier'],['club2_id', $club_id]])->paginate(10);
            $palmares_clubs = PalmaresClub::with('saison','competition')->where('club_id', $club_id)->get();
            $details = StatistiqueClub::select(DB::raw('COUNT(match_id) as total_match'), DB::raw('SUM(but_marque) as total_but_marque'), DB::raw('SUM(but_encaisse) as total_but_encaisse'))->where('club_id', $club_id)->where('saison_id', $saisons->max('id'))->get();
            $match_gagnes = StatistiqueClub::where('statut_match', 'Gagné')->where('club_id', $club_id)->where('saison_id', $saisons->max('id'))->count();
            $match_perdu = StatistiqueClub::where('statut_match', 'Perdu')->where('club_id', $club_id)->where('saison_id', $saisons->max('id'))->count();
            $match_null = StatistiqueClub::where('statut_match', 'Null')->where('club_id', $club_id)->where('saison_id', $saisons->max('id'))->count();
            $statistique = DB::select('SELECT SUM(carton_jaune) AS carton_jaune,SUM(carton_rouge) AS carton_rouge,SUM(faute_comise) AS faute_comise,SUM(faute_subies) AS faute_subies,SUM(hors_jeux) AS hors_jeux FROM statistique_clubs WHERE saison_id='.$saisons->max('id').' AND club_id='.$club_id);
            $buteurs = DB::select('SELECT j.photo,j.nom,SUM(s.but_marque) AS but FROM statistique_joueurs s,joueurs j, clubs c WHERE s.club_id='.$club_id.' AND s.joueur_id=j.id AND s.saison_id='.$saisons->max('id').' AND s.competition_id='.$competition->id.' GROUP BY joueur_id ORDER BY but DESC');
            if($buteurs != null){
                $photo = $buteurs[0]->photo;
            }else{
                $photo = "";
            }
            $passeurs = DB::select('SELECT j.photo,j.nom,SUM(s.passe_decisive) AS passe FROM statistique_joueurs s,joueurs j, clubs c WHERE s.club_id='.$club_id.' AND s.joueur_id=j.id AND s.saison_id='.$saisons->max('id').' AND s.competition_id='.$competition->id.' GROUP BY joueur_id ORDER BY passe DESC');
            if($passeurs != null){
                $photo2 = $passeurs[0]->photo;
            }else{
                $photo2 = "";
            }
            $stat_atatque = DB::select('SELECT SUM(tir) AS tir,SUM(tir_cadre) AS tir_cadre,SUM(penelty_marque) AS penalty_marque,SUM(corner) AS corner FROM statistique_clubs WHERE saison_id='.$saisons->max('id').' AND club_id='.$club_id);
            $match_sans_enc = StatistiqueClub::select(DB::raw('COUNT(id) as nbre_match'))->where([['saison_id',$saisons->max('id')], ['club_id',$club_id],['but_encaisse',0]])->get();
            $but_contre_camp = StatistiqueJoueur::select(DB::raw('SUM(but_contre_camp) as but_contre_camp'))->where([['saison_id',$saisons->max('id')], ['club_id',$club_id]])->get();
            return view('elite1.detail_club')
            ->with('saisons', $saisons)
            ->with('club', $club)
            ->with('gardiens', $gardiens)
            ->with('defenseurs', $defenseurs)
            ->with('milieux', $milieux)
            ->with('attaquants', $attaquants)
            ->with('nbre_gard', $nbre_gard)
            ->with('nbre_def', $nbre_def)
            ->with('nbre_mil', $nbre_mil)
            ->with('nbre_attaq', $nbre_attaq)
            ->with('calendiers', $calendiers)
            ->with('resultats', $resultats)
            ->with('palmares_clubs', $palmares_clubs)
            ->with('details', $details)
            ->with('match_gagnes', $match_gagnes)
            ->with('match_perdu', $match_perdu)
            ->with('match_null', $match_null)
            ->with('statistique', $statistique)
            ->with('photo', $photo)
            ->with('photo2', $photo2)
            ->with('buteurs', $buteurs)
            ->with('passeurs', $passeurs)
            ->with('stat_atatque', $stat_atatque)
            ->with('match_sans_enc', $match_sans_enc)
            ->with('but_contre_camp', $but_contre_camp);
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
