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

/* Route::get('/', function () {
    return view('menu');
}); */

Route::get('/', [App\Http\Controllers\AccueilController::class, 'index']);

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});

//elite 1
Route::get('elite1/classement', function () {
    return view('elite1.classement');
});
Route::get('elite1/club', function () {
    return view('elite1.club');
});


//elite 2
Route::get('elite2/classement', function () {
    return view('elite2.classement');
});
Route::get('elite2/club', function () {
    return view('elite2.club');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/elite1/calendrier', function () {
    return view('front.elite1.calendrier');
});



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

     //competition
     Route::get('/administration/competition','CompetitionController@index')->name('administration.competition');
     Route::post('/administration/competition','CompetitionController@store');
     Route::get('/administration/competition/add','CompetitionController@Add')->name('administration.competition-add');
     Route::get('/administration/competition/edit/{id}','CompetitionController@edit')->name('administration.competition.edit');
     Route::post('/administration/competition/edit/{id}','CompetitionController@update');
     Route::get('/administration/competition/destroy/{id}','CompetitionController@destroy')->name('administration.competition.delete');

     //competition
     Route::get('/administration/saison','SaisonController@index')->name('administration.saison');
     Route::post('/administration/saison','SaisonController@store');
     Route::get('/administration/saison/add','SaisonController@Add')->name('administration.saison-add');
     Route::get('/administration/saison/edit/{id}','SaisonController@edit')->name('administration.saison.edit');
     Route::post('/administration/saison/edit/{id}','SaisonController@update');
     Route::get('/administration/saison/destroy/{id}','SaisonController@destroy')->name('administration.saison.delete');
});