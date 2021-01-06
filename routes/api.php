<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::prefix('api')->group(function(){
    Route::apiResource('/autocomplete', 'SearchController');
//         ->only(['show','update','store']);
// });

//Route::get('/search', 'SearchController@search');