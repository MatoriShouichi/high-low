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

Route::get('/admin', 'Admin\AdminController@add')->middleware('auth');

Route::get('/', 'GameController@title_add');

Route::get('/howto', 'GameController@howto_add');

Route::get('/highscore', 'GameController@hiscore_add');

Route::get('/myscore', 'GameController@myscore_add');

Route::get('/game', 'GameController@game_add');

Route::post('/game/judge', 'GameController@judge');

Route::get('/game/gameover', 'GameController@gameover_add')->name('gameover');

Route::get('/game/gameover/entry', 'GameController@entry_add')->name('entry');

Route::post('/game/gameover/entry/entry_end', 'GameController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


