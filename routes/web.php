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
 *  @Policy
 */
Route::get('/about', function(){
    return view('page.about.about');
});
Route::get('/privacy', function(){
    return view('page.privacy.privacy');
});
Route::get('/terms', function(){
    return view('page.terms.terms');
});

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
    Route::get('/{article}','showBlogController@showLaravelArticle');

  });
});



/**
 *  @Contact
 */
Route::prefix('contact')->group(function(){

  /**
   *  @Top - @Category
   */
  Route::prefix('/')->group(function(){
    return view('page.contact.top');
  });

    /**
     *  @Article
     */
    Route::get('/{article}','showBlogController@showLaravelArticle');

});


/**
 *  @Enlglish
 */
Route::prefix('english')->group(function(){

  /**
   *  @Top
   */
  Route::get('/', function(){
    return view('page.english.top');
  });

    /**
     *  @Article
     */
  Route::get('/{article}', function($article){
    $url = "page.english.".$article;
    return view ($url);
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

