<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthController;

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

Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);
Route::get('/logout', [AuthController::class,'logout']);

Route::get('/book', [BooksController::class,'free']);

Route::middleware(['CheckToken'])->group(function () {

    Route::get('/books', [BooksController::class,'index']);

    Route::get('/books/{code}', [BooksController::class,'show']);


    Route::middleware(['isAdmin'])->group(function () {

        Route::put('/books', [BooksController::class,'store']);

        Route::patch('/books', [BooksController::class,'update']);

        Route::delete('/books', [BooksController::class,'destroy']);
    });



});
