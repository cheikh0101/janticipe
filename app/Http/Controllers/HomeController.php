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
    public function my_rand($max)
    {
        for ($i = 1; $i < $max + 1; $i++) {
            $tab[$i] = rand(1, $max);
            for ($j = 1; $j <= $i - 1; $j++) {
                if ($tab[$i] == $tab[$j]) {
                    $i = $i - 1;
                }
            }
        }
        return $tab;
    }
    public function jumelage()
    {
        //on compte les etudiants inscris en lgi1 et lgi2
        $nbreCadet = Cadet::count();
        $nbreAine = Aine::count();
        $j = 1;
        for ($i = 1; $i < $nbreCadet + 1; $i++) {
            $tab[$i] =  Aine::findOrFail($j);
            if ($j === $nbreAine) {
                $j = 1;
            } else {
                $j++;
            }
            $jumelage[1][$i] = $tab[$i];
            $tab2[$i] =  Cadet::findOrFail($this->my_rand($nbreCadet)[$i]);
            $jumelage[0][$i] = $tab2[$i];
        }

        return view('jumelage/result', compact(
            'jumelage'
        ));
    }
    public function index()
    {
        //on affiche les 4 derniers elements en utilisant la pagination
        $cadets = Cadet::all();
        $aines = Aine::all();
        $authLgi1 = authLgi1::all();
        $authLgi2 = AuthLgi2::all();


        return view('home', compact(
            'cadets',
            'aines',
            'authLgi1',
            'authLgi2',
        ));
    }
}
