<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TchatController;
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

//*************Elite 1

//Acceuil
Route::get('/', [App\Http\Controllers\AcceuilController::class, 'index_acceuil_one'])->name('acceuil_one');

//Joueur
Route::get('/elite1/joueur_one', [App\Http\Controllers\Web\JoueurController::class, 'index_joueur_one'])->name('joueur_elite_one');
Route::get('/elite1/joueur_by_club_one', [App\Http\Controllers\Web\JoueurController::class, 'joueur_by_club_one'])->name('joueur_by_club_one');
Route::get('/elite1/detail_joueur_one/{saison_id}/{joueur_id}', [App\Http\Controllers\Web\DetailJoueurController::class, 'index_elite_one'])->name('detail_joueur_elite_one');
Route::get('/elite1/joueur_domiciliation_one', [App\Http\Controllers\Web\DetailJoueurController::class, 'joueur_domiciliation_one'])->name('joueur_domiciliation_one');

//Club
Route::get('/elite1/club_one', [App\Http\Controllers\Web\ClubController::class, 'index_club_one'])->name('club_elite_one');
Route::get('/elite1/club_journee_one', [App\Http\Controllers\Web\ClubController::class, 'club_by_journee_one'])->name('club_journee_elite_one');
Route::get('/elite1/detail_club_one/{club_id}', [App\Http\Controllers\Web\DetailClubController::class, 'index_elite_one'])->name('detail_club_elite_one');

//Arbitre
Route::get('/elite1/arbitre_one', [App\Http\Controllers\Web\ArbitreController::class, 'index_arbitre_one'])->name('arbitre_elite_one');

//Calendrier et Resultat
Route::get('/elite1/calend_result', [App\Http\Controllers\Web\CalendResultController::class, 'index_calend_result_one'])->name('calend_result_one');

//*************Elite 2

//Acceuil
Route::get('/elite2', [App\Http\Controllers\AcceuilController::class, 'index_acceuil_two'])->name('acceuil_two');

//Joueur
Route::get('/elite2/joueur_two', [App\Http\Controllers\Web\JoueurController::class, 'index_joueur_two'])->name('joueur_elite_two');
Route::get('/elite2/joueur_by_club_two', [App\Http\Controllers\Web\JoueurController::class, 'joueur_by_club_two'])->name('joueur_by_club_two');
Route::get('/elite2/detail_joueur_two/{saison_id}/{joueur_id}', [App\Http\Controllers\Web\DetailJoueurController::class, 'index_elite_two'])->name('detail_joueur_elite_two');
Route::get('/elite2/joueur_domiciliation_two', [App\Http\Controllers\Web\DetailJoueurController::class, 'joueur_domiciliation_two'])->name('joueur_domiciliation_two');

//Club
Route::get('/elite2/club_two', [App\Http\Controllers\Web\ClubController::class, 'index_club_two'])->name('club_elite_two');
Route::get('/elite2/club_journee_two', [App\Http\Controllers\Web\ClubController::class, 'club_by_journee_two'])->name('club_journee_elite_two');
Route::get('/elite2/detail_club_two/{club_id}', [App\Http\Controllers\Web\DetailClubController::class, 'index_elite_two'])->name('detail_club_elite_two');

//Arbitre
Route::get('/elite2/arbitre_two', [App\Http\Controllers\Web\ArbitreController::class, 'index_arbitre_two'])->name('arbitre_elite_two');

//Calendrier et Resultat
Route::get('/elite2/calend_result_two', [App\Http\Controllers\Web\CalendResultController::class, 'index_calend_result_two'])->name('calend_result_two');

//************Guinness

//Acceuil
Route::get('/guinness', [App\Http\Controllers\AcceuilController::class, 'index_acceuil_guinness'])->name('acceuil_guinness');

//Joueur
Route::get('/guinness/joueur_guinness', [App\Http\Controllers\Web\JoueurController::class, 'index_joueur_guinness'])->name('joueur_elite_guinness');
Route::get('/guinness/joueur_by_club_guinness', [App\Http\Controllers\Web\JoueurController::class, 'joueur_by_club_guinness'])->name('joueur_by_club_guinness');
Route::get('/guinness/detail_joueur_guinness/{saison_id}/{joueur_id}', [App\Http\Controllers\Web\DetailJoueurController::class, 'index_elite_guinness'])->name('detail_joueur_elite_guinness');
Route::get('/guinness/joueur_domiciliation_guinness', [App\Http\Controllers\Web\DetailJoueurController::class, 'joueur_domiciliation_guinness'])->name('joueur_domiciliation_guinness');

//Club
Route::get('/guinness/club_guinness', [App\Http\Controllers\Web\ClubController::class, 'index_club_guinness'])->name('club_elite_guinness');
Route::get('/guinness/club_journee_guinness', [App\Http\Controllers\Web\ClubController::class, 'club_by_journee_guinness'])->name('club_journee_elite_guinness');
Route::get('/guinness/detail_club_guinness/{club_id}', [App\Http\Controllers\Web\DetailClubController::class, 'index_elite_guinness'])->name('detail_club_elite_guinness');

//Arbitre
Route::get('/guinness/arbitre_guinness', [App\Http\Controllers\Web\ArbitreController::class, 'index_arbitre_guinness'])->name('arbitre_elite_guinness');

//Calendrier et Resultat
Route::get('/elite1/calend_result_guinness', [App\Http\Controllers\Web\CalendResultController::class, 'index_calend_result_guinness'])->name('calend_result_guinness');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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