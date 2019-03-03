<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

// Top page
Route::get('/', 'page.index');

// blog
Route::get('/blog', function(){
  return view('blog');
});

// game
Route::prefix('game')->group(function(){
  Route::get('game', 'page.game');
});

// service
Route::prefix('service')->group(function(){
    Route::get('coin', 'CoinController@index');
});


