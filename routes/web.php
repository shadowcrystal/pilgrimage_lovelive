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

Route::get('/','HomeController@home')->name('home');

Route::get('/pilgrimage','HomeController@index')->name('home.index');
Route::get('/pilgrimage/site/{id}','HomeController@site')->name('home.site'); //これだけで済む気がする

Route::get('/pilgrimage/{group_id}','GroupController@index')->name('group.index');

<<<<<<< HEAD
Route::get('/pilgrimage/{name}/episode','EpisodeController@index')->name('episode.index');
Route::get('/pilgrimage/{name}/episode/{eid}','EpisodeController@select')->name('episode.select');
Route::get('/pilgrimage/{name}/episode/{eid}/site/{id}','EpisodeController@site')->name('episode.site');
=======
Route::get('/pilgrimage/{group_id}/episode','EpisodeController@index')->name('episode.index');
<<<<<<< HEAD
Route::get('/pilgrimage/{group_id}/episode/{id}','EpisodeController@select')->name('episode.select');
Route::get('/pilgrimage/{group_id}/episode/{id}/site/{id}','EpisodeController@site')->name('episode.site');
>>>>>>> 79006d3c32431ceb91af35a88ace87458a25e509
=======
Route::get('/pilgrimage/{group_id}/episode/{episode_id}','EpisodeController@select')->name('episode.select');
//Route::get('/pilgrimage/{group_id}/episode/{episode_id}/site/{id}','EpisodeController@site')->name('episode.site');
>>>>>>> 447a6e4670997e320f58e52373559da774fb203a

//Route::get('/pilgrimage/{group_id}/character','CharacterController@index')->name('character.index');
Route::get('/pilgrimage/{group_id}/character/{character_id}','CharacterController@select')->name('character.select');
//Route::get('/pilgrimage/{group_id}/character/{character_id}/site/{id}','HomeController@site')->name('character.site');

Route::get('/root','RootController@index')->name('root.index');
