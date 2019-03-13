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
Route::get('/', function(){
  return  view('page.index');
});


// blog
Route::get('/blog', function(){
  return view('page.index');
});

// game
Route::prefix('game')->group(function(){
  Route::get('game', function(){
    return view('page.index');
  });
});

// service
Route::prefix('service')->group(function(){
  Route::get('coin','CoinController@index');
});

