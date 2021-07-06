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
        $mail = session('mail');
        if ($mail != $request->input('adresse_mail')) {
            return "impossible de s'inscrire plus d'1 fois";
        }
        $request->validate(
            [
                'prenom' => 'required',
                'nom' => 'required',
                'num_telephone' => 'required',
                'adresse_mail' => 'required',
            ]
        );
        $cadet = new Aine();
        $cadet->prenom = $request->input('prenom');
        $cadet->nom = $request->input('nom');
        $cadet->adresse_mail = $request->input('adresse_mail');
        $cadet->num_telephone = $request->input('num_telephone');
        $cadet->save();
        $message = "Formulaire remplis avec succès. Nous vous mettrons en relation avec votre jumeau ou jumelle d'ici peux via l'email renseigné .";

        //return view('index', compact('message'));
        //return redirect()->route('index');
        return "infos enregistree avec succes";
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
        //
    }
}
