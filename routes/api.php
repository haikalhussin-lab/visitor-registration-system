<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/blogs', [\App\Http\Controllers\APIBlogController::class, 'index']);
Route::get('/blogs/{blog}', [\App\Http\Controllers\APIBlogController::class, 'show']);
Route::get('/blogs/{blog}/delete', [\App\Http\Controllers\APIBlogController::class, 'delete']);

Route::get('/visitors', [\App\Http\Controllers\APIVisitorController::class, 'index']);
Route::get('/visitors/{visitor}', [\App\Http\Controllers\APIVisitorController::class, 'show']);
Route::get('/visitors/{visitor}/delete', [\App\Http\Controllers\APIVisitorController::class, 'delete']);