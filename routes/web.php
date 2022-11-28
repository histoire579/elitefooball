<?php

use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

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
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});

Auth::routes();

//*************Elite 1

//Acceuil
Route::get('/', [App\Http\Controllers\Web\Elite1\AcceuilController::class, 'index'])->name('acceuil_one');

//Joueur
Route::get('/joueur_one', [App\Http\Controllers\Web\Elite1\JoueurController::class, 'index'])->name('joueur_one');
Route::get('/joueur_by_club_one', [App\Http\Controllers\Web\Elite1\JoueurController::class, 'index'])->name('joueur_by_club_one');
Route::get('/detail_joueur_one/{saison_id}/{joueur_id}', [App\Http\Controllers\Web\Elite1\DetailJoueurController::class, 'index'])->name('detail_joueur_one');
Route::get('/joueur_by_domiciliation_one', [App\Http\Controllers\Web\Elite1\DetailJoueurController::class, 'index'])->name('joueur_by_domiciliation_one');

//Club
Route::get('/club_one', [App\Http\Controllers\Web\Elite1\ClubController::class, 'index'])->name('club_one');
Route::get('/detail_club_one/{club_id}', [App\Http\Controllers\Web\Elite1\DetailClubController::class, 'index'])->name('detail_club_one');
Route::get('/club_by_phase_one', [App\Http\Controllers\Web\Elite1\DetailClubController::class, 'index'])->name('club_by_phase_one');

//Arbitre
Route::get('/arbitre_one', [App\Http\Controllers\Web\Elite1\ArbitreController::class, 'index'])->name('arbitre_one');

//Calendrier et Resultat
Route::get('/calend_result_one', [App\Http\Controllers\Web\Elite1\CalendResultController::class, 'index'])->name('calend_result_one');

//Classement



//*************Elite 2

//Acceuil
Route::get('/acceuil_two', [App\Http\Controllers\Web\Elite2\AcceuilController::class, 'index'])->name('acceuil_two');

//Joueur
Route::get('/joueur_two', [App\Http\Controllers\Web\Elite2\JoueurController::class, 'index'])->name('joueur_two');
Route::get('/joueur_by_club_two', [App\Http\Controllers\Web\Elite2\JoueurController::class, 'index'])->name('joueur_by_club_two');
Route::get('/detail_joueur_two/{saison_id}/{joueur_id}', [App\Http\Controllers\Web\Elite2\DetailJoueurController::class, 'index'])->name('detail_joueur_two');
Route::get('/joueur_by_domiciliation_two', [App\Http\Controllers\Web\Elite2\DetailJoueurController::class, 'index'])->name('joueur_by_domiciliation_two');

//Club
Route::get('/club_two', [App\Http\Controllers\Web\Elite2\ClubController::class, 'index'])->name('club_two');
Route::get('/detail_joueur_two/{club_id}', [App\Http\Controllers\Web\Elite2\DetailClubController::class, 'index'])->name('detail_club_two');
Route::get('/club_by_phase_two', [App\Http\Controllers\Web\Elite2\DetailClubController::class, 'index'])->name('club_by_phase_two');

//Arbitre
Route::get('/arbitre_two', [App\Http\Controllers\Web\Elite2\ArbitreController::class, 'index'])->name('arbitre_two');

//Calendrier et Resultat
Route::get('/calend_result_two', [App\Http\Controllers\Web\Elite2\CalendResultController::class, 'index'])->name('calend_result_two');

//Classement



//*************Guinness

//Acceuil
Route::get('/acceuil_guinness', [App\Http\Controllers\Web\Guinness\AcceuilController::class, 'index'])->name('acceuil_guinness');

//Joueur
Route::get('/joueur_guinness', [App\Http\Controllers\Web\Guinness\JoueurController::class, 'index'])->name('joueur_guinness');
Route::get('/joueur_by_club_guinness', [App\Http\Controllers\Web\Guinness\JoueurController::class, 'index'])->name('joueur_by_club_guinness');
Route::get('/detail_joueur_guinness/{saison_id}/{joueur_id}', [App\Http\Controllers\Web\Guinness\DetailJoueurController::class, 'index'])->name('detail_joueur_guinness');
Route::get('/joueur_by_domiciliation_guinness', [App\Http\Controllers\Web\Guinness\DetailJoueurController::class, 'index'])->name('joueur_by_domiciliation_guinness');

//Club
Route::get('/club_guinness', [App\Http\Controllers\Web\Guinness\ClubController::class, 'index'])->name('club_guinness');
Route::get('/detail_joueur_guinness/{club_id}', [App\Http\Controllers\Web\Guinness\DetailClubController::class, 'index'])->name('detail_club_guinness');
Route::get('/club_by_phase_guinness', [App\Http\Controllers\Web\Guinness\DetailClubController::class, 'index'])->name('club_by_phase_guinness');

//Arbitre
Route::get('/arbitre_guinness', [App\Http\Controllers\Web\Guinness\ArbitreController::class, 'index'])->name('arbitre_guinness');

//Calendrier et Resultat
Route::get('/calend_result_guinness', [App\Http\Controllers\Web\Guinness\CalendResultController::class, 'index'])->name('calend_result_guinness');

//Classement



//*************Administration
Route::namespace('App\Http\Controllers\Admin')->group(function () {
    //login
    Route::get('/administration', function () {
        return redirect('/administration/login');
    });
    Route::get('/administration/login', 'Auth\LoginController@showLoginForm')->name('administration.login');
    Route::post('/administration/login', 'Auth\LoginController@login');
    Route::get('/administration/home', 'AdminController@index')->name('administration.home');
    //logout
    Route::post('/administration/logout', 'Auth\LoginController@logout')->name('administration.logout');
    //register
    Route::get('/administration/register', 'Auth\RegisterController@showRegistrationForm')->name('administration.register');
    Route::post('/administration/register', 'Auth\RegisterController@register');
});