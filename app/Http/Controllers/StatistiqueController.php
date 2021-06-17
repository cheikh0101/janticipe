<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\User;
use Illuminate\Http\Request;

class StatistiqueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //nombre de sujets de discussion
        $nbreSujets = Forum::count();

        $hommes = User::where('genre', '=', 'masculin')->count();

        $femmes = User::where('genre', '=', 'feminin')->count();

        return view('forum.statistique', compact(
            'nbreSujets',
            'hommes',
            'femmes'
        ));
    }
}
