<?php

namespace App\Http\Controllers\Web\Elite1;

use App\Http\Controllers\Controller;
use App\Models\Saison;
use App\Models\Classement;
use App\Models\Competition;
use App\Models\StatistiqueClub;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection as SupportCollection;
use Illuminate\Http\Request;

class AcceuilController extends Controller
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
                $array =  $classement->toArray();
                $classement = array_merge($array, $details[0]);
                $liste->prepend($classement);
            }
            return view('elite1.acceuil')
            ->with('classement', $liste->reverse());
        } catch (Exception $e) {
            return $e->getMessage();
            abort(404, 'Cette page n\est pas disponible.');
        }
    }
}
