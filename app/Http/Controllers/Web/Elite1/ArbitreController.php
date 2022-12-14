<?php

namespace App\Http\Controllers\Web\Elite1;

use App\Http\Controllers\Controller;
use App\Models\Arbitre;
use App\Models\Saison;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Exception;

class ArbitreController extends Controller
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
            return view('elite1.arbitre')
            ->with('saisons', $saisons);
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
     * @param  \App\Models\Arbitre  $arbitre
     * @return \Illuminate\Http\Response
     */
    public function show(Arbitre $arbitre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arbitre  $arbitre
     * @return \Illuminate\Http\Response
     */
    public function edit(Arbitre $arbitre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arbitre  $arbitre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arbitre $arbitre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arbitre  $arbitre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arbitre $arbitre)
    {
        //
    }
}
