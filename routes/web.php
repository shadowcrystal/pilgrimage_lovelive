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
Route::get('/pilgrimage/site/{id}','HomeController@site')->name('home.site');

Route::get('/pilgrimage/{name}','GroupController@index')->name('group.index');
Route::get('/pilgrimage/{name}/site/{id}','GroupController@site')->name('group.site');

Route::get('/pilgrimage/{name}/episode','EpisodeController@index')->name('episode.index');
Route::get('/pilgrimage/{name}/episode/{eid}','EpisodeController@select')->name('episode.select');
Route::get('/pilgrimage/{name}/episode/{eid}/site/{id}','EpisodeController@site')->name('episode.site');

Route::get('/pilgrimage/{name}/character','CharacterController@index')->name('character.index');
Route::get('/pilgrimage/{name}/character/{id}','CharacterController@select')->name('character.select');
Route::get('/pilgrimage/{name}/character/{id}/site/{id}','CharacterController@site')->name('character.site');
