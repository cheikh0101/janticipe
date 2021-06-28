<?php

namespace App\Http\Controllers;

use App\Models\Cadet;
use Illuminate\Http\Request;

class CadetController extends Controller
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
        return view('cadet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'prenom' => 'required',
                'nom' => 'required',
                'num_telephone' => 'required',
                'adresse_mail' => 'required',
            ]
        );
        $cadet = new Cadet();
        $cadet->prenom = $request->input('prenom');
        $cadet->nom = $request->input('nom');
        $cadet->adresse_mail = $request->input('adresse_mail');
        $cadet->num_telephone = $request->input('num_telephone');
        $cadet->save();
        $message = "Formulaire remplis avec succès. Nous vous mettrons en relation avec votre jumeau ou jumelle d'ici peux via l'email renseigné .";
        //return view('jumelage/jumelage', compact('message'));
        return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cadet  $cadet
     * @return \Illuminate\Http\Response
     */
    public function show(Cadet $cadet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cadet  $cadet
     * @return \Illuminate\Http\Response
     */
    public function edit(Cadet $cadet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cadet  $cadet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cadet $cadet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cadet  $cadet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cadet $cadet)
    {
        //
    }
}
