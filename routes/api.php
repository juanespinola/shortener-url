<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get("/up", function () {
    return response()->json(["message" => "Welcome to API"]);
});

// No es necesario el uso de idiomas

//Route::middleware('guest:sanctum')->group(function () {

    Route::get("/docs", function () {
        return view('docs');
    })->name('docs');

    Route::post('/shorten', [LinkController::class, 'store']);
    Route::post('/trackLink', [LinkController::class, 'trackLink']);
    Route::post('login', [AuthenticatedSessionController::class, 'login']);
//});

Route::middleware('auth:sanctum')->group(callback: function () {

    Route::get('/user', function (Request $request) { return $request->user(); });
//    Route::post('/shorten', [LinkController::class, 'store']);
    Route::get('/getUserLinks', [UserController::class, 'getUserLinks']);
    Route::post('/getUserLinkTrackingByCode', [UserController::class, 'getUserLinkTrackingByCode']);
    Route::post('/getUserLinkTracking', [UserController::class, 'getUserLinkTracking']);

});

