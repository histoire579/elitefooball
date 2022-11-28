<?php

namespace App\Http\Controllers\Web\Guinness;

use App\Http\Controllers\Controller;
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
        return view('guinness.acceuil');
    }
}
