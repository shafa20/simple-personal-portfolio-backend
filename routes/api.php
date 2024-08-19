<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/contents', [ContentController::class, 'index']);
Route::get('/contents/{id}', [ContentController::class, 'show']);
Route::post('/contents', [ContentController::class, 'store']);
Route::put('/contents/{id}', [ContentController::class, 'update']);
Route::delete('/contents/{id}', [ContentController::class, 'destroy']);
Route::get('/contents/blog/{title}', [ContentController::class, 'showByTitle']);

