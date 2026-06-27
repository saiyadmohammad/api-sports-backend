<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/page', [PageController::class, 'index']);
Route::get('/page/{slug}', [PageController::class, 'getPage']);

Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blogs/{slug}', [BlogController::class, 'getBlog']);




// Auth Routes -------------- /
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/loginwithgoogle', [AuthController::class, 'loginWithGoogle']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function(Request $request) {return $request->user();});
    Route::post('/logout', [AuthController::class,'logout']);
});



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
