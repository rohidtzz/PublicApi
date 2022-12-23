<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BorrowController;

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

    Route::put('/books/borrow', [BorrowController::class,'store']);


    Route::middleware(['isAdmin'])->group(function () {

        Route::post('/books/store', [BooksController::class,'store']);

        Route::post('/books/update', [BooksController::class,'update']);

        Route::delete('/books', [BooksController::class,'destroy']);
    });



});
