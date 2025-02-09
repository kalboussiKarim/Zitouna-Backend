<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\WorkerController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // Admin only routes
    Route::middleware('admin')->group(function () {
        Route::post('/worker', [WorkerController::class, 'store']); 
    });
    
    // Worker only routes
    Route::middleware('worker')->group(function () {
        Route::apiResource('commands', CommandController::class)->except(['destroy']);
    });
    
    // Client only routes
    Route::middleware('client')->group(function () {
        Route::get('/my-commands', [ClientController::class, 'myCommands']);
    });
});
