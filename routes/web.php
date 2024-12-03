<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


require __DIR__.'/auth.php';

Route::get('/{locale?}/dashboard', function (string $locale = "es") {
    if (!in_array($locale, ['es', 'en', 'fr', 'it'])) {
        abort(400);
    }
    App::setLocale($locale);
    return view('dashboard');
})
->middleware(['auth', 'verified'])
->name('dashboard');

Route::get('/tracklink', function (string $locale = "es") {
    if (!in_array($locale, ['es', 'en', 'fr', 'it'])) {
        abort(400);
    }
    App::setLocale($locale);
    return view('tracklink');
})
->name('tracklink');

Route::get('/{locale?}/information', function (string $locale = "es") {
    if (!in_array($locale, ['es', 'en', 'fr', 'it'])) {
        abort(400);
    }
    App::setLocale($locale);
    return view('information');
})
->name('information');

Route::get('/{locale?}/howuse', function (string $locale = "es") {
    if (!in_array($locale, ['es', 'en', 'fr', 'it'])) {
        abort(400);
    }
    App::setLocale($locale);
    return view('howUse');
})
    ->name('howuse');

Route::get('contact', function () {
    return view('contact');
})
    ->name('contact');


Route::get('/{locale?}', function (string $locale = "es") {
    if (!in_array($locale, ['es', 'en', 'fr', 'it'])) {
        abort(400);
    }
    App::setLocale($locale);
    return view('landingPage');
})
    ->where('locale', 'es|en|fr|it')
    ->name('home');

Route::post('/{locale}/shorten', [LinkController::class, 'store'])
    ->name('cut')
    ->where('locale', 'es|en|fr|it');

Route::get('/{code}', [LinkController::class, 'redirect'])
    ->name('redirect')
    ->where(['code' => '[a-zA-Z0-9]+']);


Route::get('/privacy_policy', [LinkController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/terms_of_use', [LinkController::class, 'terms_of_use'])->name('terms_of_use');
Route::get('/faq_page', [LinkController::class, 'faq'])->name('faq');

Route::get('/contact_us', [LinkController::class, 'contact_us'])->name('contact_us');
Route::post('contact_us/sendmail', [LinkController::class, 'sendContactMail'])->name('sendContactMail');

Route::post('{locale}/sendmail', [LinkController::class, 'sendQrCodeInMail'])
    ->name('sendQrCodeInMail')
    ->where('locale', 'es|en|fr|it');

Route::get('/{locale?}/api', function (string $locale = "es") {
    if (!in_array($locale, ['es', 'en', 'fr', 'it'])) {
        abort(400);
    }
    App::setLocale($locale);
    return view('api');
})
    ->name('api');


