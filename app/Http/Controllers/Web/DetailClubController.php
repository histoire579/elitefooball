<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;

class DetailClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  int  $club_id
     * @return \Illuminate\Http\Response
     */
    public function index_elite_one($club_id)
    {
        $club = Club::with('stade','boutique')->where('id', $club_id)->first();
        //dd($club);
        return view('elite1.detail_club')
        ->with('club', $club);
    }
    /**
     * Display a listing of the resource.
     *
     * @param  int  $club_id
     * @return \Illuminate\Http\Response
     */
    public function index_elite_two()
    {
        
    }
    /**
     * Display a listing of the resource.
     *
     * @param  int  $club_id
     * @return \Illuminate\Http\Response
     */
    public function index_elite_guinness()
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
