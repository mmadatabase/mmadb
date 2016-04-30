<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| 
*/

Route::get('/', function () {
    return view('welcome', ['redditurl' => "https://www.reddit.com/api/v1/authorize?client_id=" . env('REDDIT_CLIENT_ID') . "&response_type=code&state=login&redirect_uri=" . urlencode(env('REDDIT_URL')) . "&duration=permanent&scope=identity"]);
});

Route::get('/login/reddit', function () {
   $redditAuthURL = "https://www.reddit.com/api/v1/authorize?client_id=" . env('REDDIT_CLIENT_ID') . "&response_type=code&state=login&redirect_uri=" . urlencode(env('REDDIT_URL')) . "&duration=permanent&scope=identity";
    return Redirect::away($redditAuthURL);
});

Route::get('/login/reddit/redirect', 'mmadb\auth\Reddit@receiveRedirect');

Route::group(['prefix' => 'api/v1'], function () {
   Route::get('promotions/{id}', 'mmadb\api\PromotionController@getByID');

   Route::get('promotions/{id}/events', 'mmadb\api\EventController@getByPromotionID');
   
   Route::get('events/{id}', 'mmadb\api\EventController@getByID');
   
   Route::get('events/{id}/fights', 'mmadb\api\FightController@getByEventID');

   Route::get('fights/{id}', 'mmadb\api\FightController@getByID');
});