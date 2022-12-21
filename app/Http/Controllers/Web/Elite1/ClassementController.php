<?php

namespace App\Http\Controllers\Web\Elite1;

use App\Http\Controllers\Controller;
use App\Models\Classement;
use App\Models\Competition;
use App\Models\Journee;
use App\Models\Phase;
use App\Models\Saison;
use App\Models\StatistiqueClub;
use App\Models\StatistiqueJoueur;
use Exception;
use Hamcrest\Core\IsTypeOf;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Collection as SupportCollection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class ClassementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $competition = Competition::where('libelle', "Elite 1")->first();
            $saisons = Saison::select('id', 'libelle')->orderBy('id', 'desc')->get();
            $classements = Classement::with('club')->where('saison_id', $saisons->first()->id)->where('competition_id', $competition->id)->orderBy('point', 'desc')->get();
            $liste = new SupportCollection([]);
            foreach ($classements as $classement) {
                $details = StatistiqueClub::select(DB::raw('COUNT(match_id) as total_match'), DB::raw('SUM(but_marque) as total_but_marque'), DB::raw('SUM(but_encaisse) as total_but_encaisse'))->where('club_id', $classement->club->id)->where('saison_id', $saisons->first()->id)->get()->toArray();
                $match_gagnes = StatistiqueClub::where('statut_match', 'Gagné')->where('club_id', $classement->club->id)->where('saison_id', $saisons->first()->id)->count();
                $match_perdu = StatistiqueClub::where('statut_match', 'Perdu')->where('club_id', $classement->club->id)->where('saison_id', $saisons->first()->id)->count();
                $match_null = StatistiqueClub::where('statut_match', 'Null')->where('club_id', $classement->club->id)->where('saison_id', $saisons->first()->id)->count();
                $forme = StatistiqueClub::select('id', 'statut_match')->where('club_id', $classement->club->id)->where('saison_id', $saisons->first()->id)->latest()->limit(5)->get()->toArray();
                $array = array_merge($details[0], array('match_gagnes' => $match_gagnes, 'match_perdu' => $match_perdu, 'match_null' => $match_null, 'forme' => $forme));
                $array2 =  $classement->toArray();
                $classement = array_merge($array2, $array);
                $liste->prepend($classement);
            }
            $buteurs = DB::select("SELECT j.id,j.photo,j.nom, c.nom as nomclub,SUM(s.but_marque) AS but_marque, SUM(s.penelty_marque) AS penelty_marque, COUNT(s.match_id) AS matchs_afferents, SUM(s.minute_jouer) AS minute_jouer FROM statistique_joueurs s,joueurs j, clubs c WHERE s.club_id=c.id AND s.joueur_id=j.id AND saison_id=" . $saisons->first()->id . " AND s.competition_id=" . $competition->id . " GROUP BY s.joueur_id ORDER BY but_marque DESC");
            $passeurs = DB::select("SELECT j.id,j.photo,j.nom, c.nom as nomclub,SUM(s.passe_decisive) AS passe, COUNT(s.match_id) AS matchs_afferents, SUM(s.minute_jouer) AS minute_jouer FROM statistique_joueurs s,joueurs j, clubs c WHERE s.club_id=c.id AND s.joueur_id=j.id AND saison_id=" . $saisons->first()->id . " AND s.competition_id=" . $competition->id . " GROUP BY s.joueur_id ORDER BY passe DESC");

            return view('elite1.classement', ['saisons' => $saisons, 'classement' => $liste->reverse(), 'classement_buteurs' => $buteurs, 'classement_passeurs' => $passeurs]);
        } catch (Exception $e) {
            return $e->getMessage();
            abort(404, 'Cette page n\est pas disponible.');
        }
    }

    /**
     * It returns a json response who content day an stage from saison.
     * 
     * @param Request request The request object.
     */
    public function get_journee_et_phase_by_saison_ajax(Request $request)
    {
        try {
            $validator = FacadesValidator::make($request->all(), [
                'saison_id' => ['required', 'numeric']
            ]);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            }
            $journees = Journee::select('id', 'libelle')->orderBy('id', 'desc')->where('saison_id', '=', $request->saison_id)->get();
            $phases = Phase::select('id', 'libelle')->orderBy('id', 'desc')->where('saison_id', '=', $request->saison_id)->get();
            return response()->json(['journees' => $journees, 'phases' => $phases], 200);
        } catch (Exception $e) {
            return response()->json(["error" => "Une erreur s'est produite."], 500);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}