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
Route::get('/elite1/joueur', [App\Http\Controllers\Web\Elite1\JoueurController::class, 'index'])->name('joueur_one');
Route::get('/elite1/joueur_by_club', [App\Http\Controllers\Web\Elite1\JoueurController::class, 'joueur_by_club'])->name('joueur_by_club_one');
Route::get('/elite1/detail_joueur/{saison_id}/{joueur_id}', [App\Http\Controllers\Web\Elite1\DetailJoueurController::class, 'index'])->name('detail_joueur_one');
Route::get('/elite1/joueur_by_domiciliation', [App\Http\Controllers\Web\Elite1\DetailJoueurController::class, 'joueur_by_domiciliation'])->name('joueur_by_domiciliation_one');

//Club
Route::get('/elite1/club', [App\Http\Controllers\Web\Elite1\ClubController::class, 'index'])->name('club_one');
Route::get('/elite1/detail_club/{club_id}', [App\Http\Controllers\Web\Elite1\DetailClubController::class, 'index'])->name('detail_club_one');
Route::get('/elite1/club_by_phase', [App\Http\Controllers\Web\Elite1\ClubController::class, 'club_by_phase'])->name('club_by_phase_one');

//Arbitre
Route::get('/elite1/arbitre', [App\Http\Controllers\Web\Elite1\ArbitreController::class, 'index'])->name('arbitre_one');

//Calendrier et Resultat
Route::get('/elite1/calend_result', [App\Http\Controllers\Web\Elite1\CalendResultController::class, 'index'])->name('calend_result_one');
Route::get('/elite1/detail_calend_result/{match_id}', [App\Http\Controllers\Web\Elite1\DetailCalendResultController::class, 'index'])->name('detail_calend_result_one');
Route::get('/elite1/calend_result_by_journee_and_phase', [App\Http\Controllers\Web\Elite1\CalendResultController::class, 'calend_result_by_journee_and_phase'])->name('calend_result_by_journee_and_phase_one');

//Classement
Route::get('/elite1/classement', [App\Http\Controllers\Web\Elite1\ClassementController::class, 'index'])->name('classement_one');
Route::get('/elite1/get_journee_et_phase_by_saison_ajax', [App\Http\Controllers\Web\Elite1\ClassementController::class, 'get_journee_et_phase_by_saison_ajax'])->name('get_journee_et_phase_by_saison_ajax');



//*************Elite 2

//Acceuil
Route::get('/elite2/acceuil', [App\Http\Controllers\Web\Elite2\AcceuilController::class, 'index'])->name('acceuil_two');

//Joueur
Route::get('/elite2/joueur', [App\Http\Controllers\Web\Elite2\JoueurController::class, 'index'])->name('joueur_two');
Route::get('/elite2/joueur_by_club', [App\Http\Controllers\Web\Elite2\JoueurController::class, 'joueur_by_club'])->name('joueur_by_club_two');
Route::get('/elite2/detail_joueur/{saison_id}/{joueur_id}', [App\Http\Controllers\Web\Elite2\DetailJoueurController::class, 'index'])->name('detail_joueur_two');
Route::get('/elite2/joueur_by_domiciliation', [App\Http\Controllers\Web\Elite2\DetailJoueurController::class, 'joueur_by_domiciliation'])->name('joueur_by_domiciliation_two');

//Club
Route::get('/elite2/club', [App\Http\Controllers\Web\Elite2\ClubController::class, 'index'])->name('club_two');
Route::get('/elite2/detail_club/{club_id}', [App\Http\Controllers\Web\Elite2\DetailClubController::class, 'index'])->name('detail_club_two');
Route::get('/elite2/club_by_phase', [App\Http\Controllers\Web\Elite2\ClubController::class, 'club_by_phase'])->name('club_by_phase_two');

//Arbitre
Route::get('/elite2/arbitre', [App\Http\Controllers\Web\Elite2\ArbitreController::class, 'index'])->name('arbitre_two');

//Calendrier et Resultat
Route::get('/elite2/calend_result', [App\Http\Controllers\Web\Elite2\CalendResultController::class, 'index'])->name('calend_result_two');
Route::get('/elite2/detail_calend_result/{match_id}', [App\Http\Controllers\Web\Elite2\DetailCalendResultController::class, 'index'])->name('detail_calend_result_two');
Route::get('/elite2/calend_result_by_journee_and_phase', [App\Http\Controllers\Web\Elite2\CalendResultController::class, 'calend_result_by_journee_and_phase'])->name('calend_result_by_journee_and_phase_two');

//Classement
//Route::get('/elite2/classement', [App\Http\Controllers\Web\Elite2\ClassementController::class, 'index'])->name('classement_two');



//*************Guinness

//Acceuil
Route::get('/guinness/acceuil', [App\Http\Controllers\Web\Guinness\AcceuilController::class, 'index'])->name('acceuil_guinness');

//Joueur
Route::get('/guinness/joueur', [App\Http\Controllers\Web\Guinness\JoueurController::class, 'index'])->name('joueur_guinness');
Route::get('/guinness/joueur_by_club', [App\Http\Controllers\Web\Guinness\JoueurController::class, 'joueur_by_club'])->name('joueur_by_club_guinness');
Route::get('/guinness/detail_joueur/{saison_id}/{joueur_id}', [App\Http\Controllers\Web\Guinness\DetailJoueurController::class, 'index'])->name('detail_joueur_guinness');
Route::get('/guinness/joueur_by_domiciliation', [App\Http\Controllers\Web\Guinness\DetailJoueurController::class, 'joueur_by_domiciliation'])->name('joueur_by_domiciliation_guinness');

//Club
Route::get('/guinness/club', [App\Http\Controllers\Web\Guinness\ClubController::class, 'index'])->name('club_guinness');
Route::get('/guinness/detail_club/{club_id}', [App\Http\Controllers\Web\Guinness\DetailClubController::class, 'index'])->name('detail_club_guinness');
Route::get('/guinness/club_by_phase', [App\Http\Controllers\Web\Guinness\ClubController::class, 'club_by_phase'])->name('club_by_phase_guinness');

//Arbitre
Route::get('/guinness/arbitre', [App\Http\Controllers\Web\Guinness\ArbitreController::class, 'index'])->name('arbitre_guinness');

//Calendrier et Resultat
Route::get('/guinness/calend_result', [App\Http\Controllers\Web\Guinness\CalendResultController::class, 'index'])->name('calend_result_guinness');
Route::get('/guinness/detail_calend_result/{match_id}', [App\Http\Controllers\Web\Guinness\DetailCalendResultController::class, 'index'])->name('detail_calend_result_guinness');
Route::get('/guinness/calend_result_by_journee_and_phase', [App\Http\Controllers\Web\Guinness\CalendResultController::class, 'calend_result_by_journee_and_phase'])->name('calend_result_by_journee_and_phase_guinness');

//Classement
//Route::get('/guinness/classement', [App\Http\Controllers\Web\Guinness\ClassementController::class, 'index'])->name('classement_guinness');



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