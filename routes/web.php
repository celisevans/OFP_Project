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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'LandingPageController@index');

Route::get('/mission', 'LandingPageController@mission');

Route::get('/vision', 'LandingPageController@vision');

Route::get('/strategy', 'LandingPageController@strategy');

Route::get('/ourcompany', 'LandingPageController@ourcompany');

Route::get('/ourstrengths', 'LandingPageController@ourstrengths');

Route::get('/oursproducts', 'LandingPageController@oursproducts');
