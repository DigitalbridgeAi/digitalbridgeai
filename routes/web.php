<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name('site.index');
Route::get('/overview', [\App\Http\Controllers\SiteController::class, 'about'])->name('site.about');
// business
Route::get('/business/index', [\App\Http\Controllers\SiteController::class, 'business'])->name('site.business');
Route::get('/business/digital-equity', [\App\Http\Controllers\SiteController::class, 'businessDigitalEquity'])->name('site.business.digital-equity');
Route::get('/business/digital-credit', [\App\Http\Controllers\SiteController::class, 'businessDigitalCredit'])->name('site.business.digital-credit');
Route::get('/business/liquid-strategies', [\App\Http\Controllers\SiteController::class, 'businessLiquidStrategies'])->name('site.business.liquid-strategies');

Route::get('/responsibility', [\App\Http\Controllers\SiteController::class, 'responsibility'])->name('site.responsibility');
Route::get('/news1', [\App\Http\Controllers\SiteController::class, 'news'])->name('site.news1');
Route::get('/contact', [\App\Http\Controllers\SiteController::class, 'contact'])->name('site.contact');
// privacy and terms of use
Route::get('/privacy-policy', [\App\Http\Controllers\SiteController::class, 'privacy'])->name('site.privacy');
Route::get('/terms-of-use', [\App\Http\Controllers\SiteController::class, 'termsOfUse'])->name('site.terms-of-use');




