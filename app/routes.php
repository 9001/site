<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

# Index.
Route::get('/', 'Home@showHome');

# News - aggregate + single
Route::get('/news', 'News@showNews');
Route::get('/news/{id}', 'News@showSingleNews')
	->where('id', '[0-9]+');

# Stats
Route::get('/stats', 'Stats@showGraphs');
Route::get('/stats.json', 'Stats@getGraphsAjax');

# IRC
Route::get('/irc', 'IRC@show');

# Search
Route::any('/search/{search?}', 'Search@showResults');


# Admin controller; adds extra auth + security
Route::controller('/admin', 'Admin');
