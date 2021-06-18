<?php

use Illuminate\Support\Facades\Auth;
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

    return view('frontend.home');

});
Route::get('/mylogin', function () {

    return view('frontend.auth.register');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','as'=>'admin.','namespace'=>'Admin','middleware'=>['auth','admin']], function(){
    Route::get('dashboard','dashboardController@index')->name('dashboard');
    Route::resource('user','UserController');
});

Route::group(['prefix'=>'user','as'=>'user.','namespace'=>'User','middleware'=>['auth','user']], function(){
    Route::get('dashboard','dashboardController@index')->name('dashboard');
});
