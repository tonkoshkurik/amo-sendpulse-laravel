<?php

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::group(['prefix' => 'v1', 'middleware' => ['apiauth:ZHIRKILLER_ADMIN']], function () {
//  // not using because of client landing legacy
//});




// webhook for confirmed leads
Route::post('webhook', 'SendPulse@confirm');

Route::group(['prefix' => 'leads' ], function(){
  //@todo add route for testing webhooks and after make a e-mail scheduling
  Route::post('add', 'LeadController@add')->middleware('cors');
  Route::post('update', 'LeadController@update')->middleware('cors');
});
