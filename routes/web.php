<?php

use App\Models\authLgi1;
use App\Models\AuthLgi2;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DompdfController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');
//Route des cours
Route::get('/cours/s1', function () {
    return view('cours/semestre1');
});
Route::get('/cours/s2', function () {
    return view('cours/semestre2');
});
Route::get('/cours/s3', function () {
    return view('cours/semestre3');
});
Route::get('/cours/s4', function () {
    return view('cours/semestre4');
});
Route::get('/cours/s5', function () {
    return view('cours/semestre5');
});
Route::get('/cours/s6', function () {
    return view('cours/semestre6');
});
//fin route cours

//Route des td
Route::get('/td/s1', function () {
    return view('td/semestre1');
});
Route::get('/td/s2', function () {
    return view('td/semestre2');
});
Route::get('/td/s3', function () {
    return view('td/semestre3');
});
Route::get('/td/s4', function () {
    return view('td/semestre4');
});
//fin route td

//Route des suggestions
Route::get('/suggestions/s1', function () {
    return view('suggestions/semestre1');
});
Route::get('/suggestions/s2', function () {
    return view('suggestions/semestre2');
});
Route::get('/suggestions/s3', function () {
    return view('suggestions/semestre3');
});
Route::get('/suggestions/s4', function () {
    return view('suggestions/semestre4');
});
//fin route suggestions

Route::get('/projets', function () {
    session(
        [
            "header" => true
        ]
    );
    return view('projets/projets');
});

Route::get('/jumelage', function () {
    session(
        [
            "jumelage" => true
        ]
    );
    return view('jumelage/login');
});

Route::post('/jumelage', function (Request $request) {
    $authLgi1 = authLgi1::whereEmail($request->email)->wherePassword($request->password)->first();
    $authLgi2 = AuthLgi2::whereEmail($request->email)->wherePassword($request->password)->first();

    if ($authLgi1 == null && $authLgi2 == null) {
        return view('jumelage/login')->with(['message' => 'Adresse mail incorrecte, mot de passe incorrecte ou vous essayez de s\'inscrire plus d\'une fois ce qui est impossible']);
    } elseif ($authLgi1 != null && $authLgi2 == null) {
        //recuperation de tt les infos concernant l'utilisateur authentifie
        $id = authLgi1::where('email', '=', $request->email)->get();
        //supprimer les infos dans la bdd
        authLgi1::destroy($id);
        $tmp = 1;
        session([
            'login' => true,
            'mailCadet' => $request->email
        ]);
        return view('jumelage/indexJumelage', compact('tmp'));
    } else {
        $id = AuthLgi2::where('email', '=', $request->email)->get();
        AuthLgi2::destroy($id);
        $tmp = 2;
        session([
            'login' => true,
            'mailAine' => $request->email
        ]);
        return view('jumelage/indexJumelage', compact('tmp'));
    }
})->name('jumelageLogin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jumele', [App\Http\Controllers\HomeController::class, 'jumelage'])->name('jumelage');

Route::resource('aine', 'App\Http\Controllers\AineController');

Route::resource('cadet', 'App\Http\Controllers\CadetController');

Route::resource('authlgi1', 'App\Http\Controllers\AuthLgi1Controller');

Route::resource('authlgi2', 'App\Http\Controllers\AuthLgi2Controller');

Auth::routes();

//pdf
Route::get('/pdf-generate', 'App\Http\Controllers\DompdfController@generatePDF');

Route::get('/pdf-generateAines', 'App\Http\Controllers\DompdfController@genereatePdfAines');

Route::get('/pdf-generateCadet', 'App\Http\Controllers\DompdfController@genereatePdfCadet');
