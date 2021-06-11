<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\RendezVous;

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
});

Route::get('/projets', function () {
    return view('projets');
});

Route::get('/lgi1', function () {
    return view('indexlgi1');
});

Route::get('/lgi2', function () {
    return view('indexlgi2');
});
Route::get('/lgi3', function () {
    return view('indexlgi3');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('forum', 'App\Http\Controllers\ForumController');

Route::resource('ForumStatistique', 'App\Http\Controllers\StatistiqueController');

Route::resource('rv', 'App\Http\Controllers\RendezVousController');

Route::get('/rendez-vous', function () {
    return view('rv');
});

Route::post('/rendez-vous', function (Request $request) {
    $request->validate(
        [
            'password' => 'required|min:5|max:5'
        ]
    );
    $x = $request->input('password');
    if ($x === "11111") {
        $infos = RendezVous::all();
        return view('rv', compact('infos'));
    } else {
        return view('rv');
    }
});

Auth::routes();
