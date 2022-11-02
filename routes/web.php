<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TchatController;
use Gloudemans\Shoppingcart\Facades\Cart;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/elite1/calendrier', function () {
    return view('front.elite1.calendrier');
});



Route::namespace('App\Http\Controllers\Admin')->group(function ()
{
    //login
    Route::get('/administration', function (){
        return redirect('/administration/login');
    });
    Route::get('/administration/login','Auth\LoginController@showLoginForm')->name('administration.login');
    Route::post('/administration/login', 'Auth\LoginController@login');
    Route::get('/administration/home','AdminController@index')->name('administration.home');
    //logout
    Route::post('/administration/logout', 'Auth\LoginController@logout')->name('administration.logout');
    //register
    Route::get('/administration/register', 'Auth\RegisterController@showRegistrationForm')->name('administration.register');
    Route::post('/administration/register', 'Auth\RegisterController@register');

});



