<?php

namespace App\Http\Controllers;

use App\Models\Aine;
use Illuminate\Http\Request;

class AineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mail = session('mailAine');
        if ($mail != $request->input('adresse_mail')) {
            return "mail d'authentification different du mail renseigné";
        }
        $request->validate(
            [
                'prenom' => 'required',
                'nom' => 'required',
                'num_telephone' => 'required|unique:aines,num_telephone|min:5',
                'adresse_mail' => 'required|unique:aines,adresse_mail',
            ]
        );
        $cadet = new Aine();
        $cadet->prenom = $request->input('prenom');
        $cadet->nom = $request->input('nom');
        $cadet->adresse_mail = $request->input('adresse_mail');
        $cadet->num_telephone = $request->input('num_telephone');
        $cadet->save();
        return view('jumelage/successInscription');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aine  $aine
     * @return \Illuminate\Http\Response
     */
    public function show(Aine $aine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aine  $aine
     * @return \Illuminate\Http\Response
     */
    public function edit(Aine $aine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aine  $aine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aine $aine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aine  $aine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aine $aine)
    {
        Aine::destroy($aine->id);
        return back();
    }
}
