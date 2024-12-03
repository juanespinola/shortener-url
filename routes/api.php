<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get("/up", function () {
    return "API ON";
});

// No es necesario el uso de idiomas
Route::get("/docs", function () {
    return view('docs');
})->name('docs');

Route::post('/shorten', [LinkController::class, 'store']);
Route::post('/trackLink', [LinkController::class, 'trackLink']);

Route::post('login', [AuthenticatedSessionController::class, 'login']);

Route::get('/user', function (Request $request) { return $request->user(); })->middleware('auth:sanctum');

Route::get('/getUserLinks', [UserController::class, 'getUserLinks'])->middleware('auth:sanctum');
Route::post('/getUserLinkTrackingByCode', [UserController::class, 'getUserLinkTrackingByCode'])->middleware('auth:sanctum');
Route::post('/getUserLinkTracking', [UserController::class, 'getUserLinkTracking'])->middleware('auth:sanctum');


