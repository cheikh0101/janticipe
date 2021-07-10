<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aine;
use App\Models\authLgi1;
use App\Models\AuthLgi2;
use App\Models\Cadet;
use Illuminate\Support\Facades\Mail;
use App\Mail\jumelageLgi2Mail;

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
        $tab = [];
        for ($i = 1; $i < $max + 1; $i++) {
            $tab[$i] = rand(1, $max);
            for ($j = 1; $j < $i; $j++) {
                if ($tab[$i] == $tab[$j]) {
                    $i = $i - 1;
                }
            }
        }
        return $tab;
    }
    public function jumelage()
    {
        $jumelage = [];
        //on compte les etudiants inscris en lgi1 et lgi2
        $nbreCadet = Cadet::count();
        $nbreAine = Aine::count();
        if ($nbreAine > $nbreCadet) {
            return back();
        }
        foreach ($this->my_rand($nbreCadet) as $item) {
            $jumelage[0][$item] =  Cadet::findOrFail($item);
        }
        $j = 1;
        for ($i = 1; $i < $nbreCadet + 1; $i++) {
            $tab[$i] =  Aine::findOrFail($j);
            if ($j === $nbreAine) {
                $j = 1;
            } else {
                $j++;
            }
            $jumelage[1][$i] = $tab[$i];
        }
        if ($jumelage  == null) {
            return back();
        }
        //envoie de mail
        $i = 0;
        foreach ($jumelage[1] as $key) {
            $details1 = [
                'nom' => $key->nom,
                'num_telephone' => $key->num_telephone
            ];
            $details = array_values($jumelage[0])[$i];
            //Mail::to($key->adresse_mail)->send(new jumelageLgi2Mail($details, $details1));
            $i++;
        }
        if ($i == 0) {
            return "aucun mail envoyé";
        }
        return view('jumelage/result', compact(
            'jumelage',
        ));
    }
    public function index()
    {
        //on compte les etudiants inscris en lgi1 et lgi2
        $nbreCadet = Cadet::count();
        $nbreAine = Aine::count();
        $cadets = Cadet::all();
        $aines = Aine::all();
        $authLgi1 = authLgi1::all();
        $authLgi2 = AuthLgi2::all();

        return view('home', compact(
            'cadets',
            'aines',
            'authLgi1',
            'authLgi2',
            'nbreCadet',
            'nbreAine'
        ));
    }
}
