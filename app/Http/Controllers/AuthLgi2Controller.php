<?php

namespace App\Http\Controllers;

use App\Models\AuthLgi2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AuthMailLgi1;

class AuthLgi2Controller extends Controller
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
        $auth = new AuthLgi2();
        $auth->email = $request->input('email');
        // Les résultats seront des chaînes de 10 caractères contenant uniquement des chiffres et des lettres minuscules
        $auth->password = bin2hex(openssl_random_pseudo_bytes(5));
        $auth->save();
        //Envoi de mails
        $details = [
            'email' => $auth->email,
            'password' => $auth->password
        ];
        //Mail::to($auth->email)->send(new AuthMailLgi1($details));
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuthLgi2  $authLgi2
     * @return \Illuminate\Http\Response
     */
    public function show(AuthLgi2 $authLgi2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuthLgi2  $authLgi2
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthLgi2 $authLgi2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuthLgi2  $authLgi2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthLgi2 $authLgi2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuthLgi2  $authLgi2
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthLgi2 $authLgi2)
    {
        //
    }
}
