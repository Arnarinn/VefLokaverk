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

Route::get('/', function()
{
	return View::make('index');
});

Route::group(['prefix' => 'api'], function(){

	Route::get('/anime', function(){

		$data = Anime::get();
		return $data;

	});
	Route::get('/anime/{anime}/{episode}', function($animeslug, $episodeslug){
		$anime = Anime::where('slug', $animeslug)->first();
		$episode = Episode::where('slug', $episodeslug)->where('anime_id', $anime->id)->first();
		return $episode;
	});

	Route::get('/anime/{slug}', function($slug){
		//$data = Anime::where('slug', $slug)->first();
		$data = Anime::with('episodes')->where('slug', $slug)->first();
		return $data;
	});

});