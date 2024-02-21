<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// User Registration route

Route::post('/register', [AuthController:: class,'register']);
Route::post('/login', [AuthController:: class,'login']);


Route::middleware(['auth:api'])->group(function () {
     // Logout route
    Route::post('/logout', [AuthController::class, 'logout']);
   
    // Fetch all users
    Route::get('/users', [UserController::class, 'index']);

    // Fetch a particular user
    Route::get('/user/{id}', [UserController::class, 'show']);

    // Update user
    Route::put('/user/{id}', [UserController::class, 'update']);

    // Admin-only delete route
    Route::delete('/user/{id}', [UserController::class, 'delete'])->middleware('admin');
});
