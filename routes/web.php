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

/**
 *  @Top
 */
Route::get('/', 'showBlogController@index');


/**
 *  @Programing
 */
Route::prefix('programing')->group(function(){

  /**
   *  @ProgramingTop
   */
  Route::get('/', function(){
    return view('page.programing.top');
  });
  /**
   *  @laravel
   */
  Route::prefix('laravel')->group(function(){
    /**
     * @top
     */
    Route::get('/', function(){
      return view('page.programing.laravel.top');
    });
    /**
     *  @Article
     */
    Route::get('/{article}','showBlogController@showArticle');

  });
});



/**
 *  @Contact
 */
Route::prefix('contact')->group(function(){

  /**
   *  @Top
   */
  Route::prefix('/')->group(function(){
    return view('page.contact.top');
  });

});


/**
 *  @Game
 */
Route::prefix('game')->group(function(){


  /**
   *  @Top
   */
  Route::get('/', function(){
    return view('page.game.top');
  });


});



/**
 *  @Service
 */
Route::prefix('service')->group(function(){

  /**
   *  @Coin
   */
  Route::prefix('coin')->group(function(){
    // 初期画面
    Route::get('/',function(){
      return view('page.service.coinInit');
    });
    // 検索ボタンを押した時用
    Route::post('/','CoinController@index');
    // 簡易入力用
    Route::get('/{name?}','CoinController@index');

  });
});

