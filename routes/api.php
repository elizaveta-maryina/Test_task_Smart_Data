<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['prefix' => 'v1'], function () {
    Route::apiResources([
    'author' => AuthorController::class,
    'book' => BookController::class,
    // 'user' => UserController::class
    // 'posts' => PostController::class,
]);
});

// Route::namespace('Api')->prefix('v1')->group(function () {
//     Route::get('books/list','BookController@list');
//     Route::get('books/by-id/{id}','BookController@byId');
//     Route::put('books/update','BookController@update');
//     Route::delete('books/{id}','BookController@destroy');
// });