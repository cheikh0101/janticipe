<?php

namespace App\Http\Controllers;

use App\Mail\AuthMailLgi1;
use App\Models\authLgi1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthLgi1Controller extends Controller
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
        $request->validate(
            [
                'email' => 'required',
            ]
        );
        $auth = new authLgi1();
        $auth->email = $request->input('email');
        // Les résultats seront des chaînes de 10 caractères contenant uniquement des chiffres et des lettres minuscules
        $auth->password = bin2hex(openssl_random_pseudo_bytes(5));
        $auth->save();
        //static $tab = array();
        //$tab[] = $auth;
        //Envoi de mails
        $details = [
            'email' => $auth->email,
            'password' => $auth->password
        ];

        Mail::to($auth->email)->send(new AuthMailLgi1($details));
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\authLgi1  $authLgi1
     * @return \Illuminate\Http\Response
     */
    public function show(authLgi1 $authLgi1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\authLgi1  $authLgi1
     * @return \Illuminate\Http\Response
     */
    public function edit(authLgi1 $authLgi1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\authLgi1  $authLgi1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, authLgi1 $authLgi1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\authLgi1  $authLgi1
     * @return \Illuminate\Http\Response
     */
    public function destroy(authLgi1 $authLgi1)
    {
        //
    }
}
