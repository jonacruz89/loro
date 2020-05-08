<?php

use Illuminate\Support\Facades\Route;

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
    $winner = App\Participant::where('winner', '1')->first();
    return view('welcome', ['winner'=> $winner]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/landing', 'LandingController@store')->name('landing.store');
