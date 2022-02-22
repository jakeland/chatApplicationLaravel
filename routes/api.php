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

//

Route::post('send_message', [\App\Http\Controllers\ChatController::class, 'sendMessage']);

Route::post('view_messages', [\App\Http\Controllers\ChatController::class, 'viewMessages']);
// preemptivly setting up these routes 

Route::post('login', [\App\Http\Controllers\UserController::class, 'login']);

Route::post('register', [\App\Http\Controllers\UserController::class, 'register']);




// probably going to use this, seems interesting, but need to do more reading
// TODO look into sanctum and enable authentication

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });