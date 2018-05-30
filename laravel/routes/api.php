<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('admin', 'AdminController@store');
Route::get('list1','PageController@getlistTopic1');
Route::get('list2','PageController@getlistTopic2');
Route::get('list3','PageController@getlistTopic3');
Route::get('vocatopic/{id}','PageController@getVocabularyBaseOnTopic');
Route::get('topiclist','PageController@getAllTopic');
Route::get('onetopic/{id}','PageController@getOneTopic');



