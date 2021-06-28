<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aine;
use App\Models\authLgi1;
use App\Models\AuthLgi2;
use App\Models\Cadet;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //on affiche les 4 derniers elements en utilisant la pagination
        $cadets = Cadet::latest()->paginate(4);
        $aines = Aine::latest()->paginate(4);

        $authLgi1 = authLgi1::all();
        $authLgi2 = AuthLgi2::all();

        //on compte les etudiants inscris en lgi1 et lgi2
        $nbreCadet = Cadet::count();
        $nbreAine = Aine::count();
        $j = 1;
        for ($i = 1; $i < $nbreCadet + 1; $i++) {
            $tab[$i] =  Aine::findOrFail($j);
            $tab1[$i] =  Cadet::findOrFail($nbreCadet - $i + 1);
            //$tab1[$i] =  Cadet::findOrFail(rand(1, $nbreCadet));
            if ($j === $nbreAine) {
                $j = 1;
            } else {
                $j++;
            }
        }

        return view('home', compact(
            'cadets',
            'aines',
            'tab',
            'tab1',
            'authLgi1',
            'authLgi2'
        ));
    }
}
