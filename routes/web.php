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
Route::get('/', 'showBlogController@index');


// blog
Route::get('/blog', function(){
  return view('page.blog.top');
});

// Contact
Route::get('/contact', function(){
  return view('page.contact');
});

// game
Route::prefix('game')->group(function(){
  Route::get('game', function(){
    return view('page.game');
  });
});

// service
Route::prefix('service')->group(function(){
  Route::get('coin',function(){
    return view('page.service.coinInit');
  });
  Route::post('coin','CoinController@index');
  Route::get('coin/{name?}','CoinController@index');
});



