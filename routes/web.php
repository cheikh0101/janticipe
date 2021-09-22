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

Auth::routes();
