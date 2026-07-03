<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [\App\Http\Controllers\APILoginController::class, 'login']);
Route::post('/register', [\App\Http\Controllers\APIRegisterController::class, 'register']);

Route::get('/blogs', [\App\Http\Controllers\APIBlogController::class, 'index']) ->middleware('auth:sanctum');
Route::get('/blogs/{blog}', [\App\Http\Controllers\APIBlogController::class, 'show']) ->middleware('auth:sanctum');
Route::get('/blogs/{blog}/delete', [\App\Http\Controllers\APIBlogController::class, 'delete']) ->middleware('auth:sanctum');
Route::post('/blogs/create', [\App\Http\Controllers\APIBlogController::class, 'store'])->middleware('auth:sanctum');
Route::post('/blogs/{blog}/edit', [\App\Http\Controllers\APIBlogController::class, 'update'])->middleware('auth:sanctum');

Route::get('/visitors', [\App\Http\Controllers\APIVisitorController::class, 'index']) ->middleware('auth:sanctum');
Route::get('/visitors/{visitor}', [\App\Http\Controllers\APIVisitorController::class, 'show']) ->middleware('auth:sanctum');
Route::get('/visitors/{visitor}/delete', [\App\Http\Controllers\APIVisitorController::class, 'delete']) ->middleware('auth:sanctum');
Route::post('/visitors/create', [\App\Http\Controllers\APIVisitorController::class, 'store']);
Route::post('/visitors/{visitor}/edit', [\App\Http\Controllers\APIVisitorController::class, 'update'])->middleware('auth:sanctum');