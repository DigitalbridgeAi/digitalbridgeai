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

// shareholders
Route::get('/shareholders/overview', [\App\Http\Controllers\SiteController::class, 'shareholders'])->name('site.shareholders');
Route::get('/stock-information/stock-quote', [\App\Http\Controllers\SiteController::class, 'stockInfoQuote'])->name('site.stock.information.annual-quote');
Route::get('/stock-information/dividends', [\App\Http\Controllers\SiteController::class, 'stockInfoDividends'])->name('site.stock.information.dividends');
Route::get('/stock-information/dgrb-tax', [\App\Http\Controllers\SiteController::class, 'stockDgrbTax'])->name('site.stock.information.dgrb-tax');
Route::get('/stock-information/clnr-historic-tax', [\App\Http\Controllers\SiteController::class, 'stockClnrTax'])->name('site.stock.information.clnr-historic-tax');
Route::get('/stock-information/NRF-historic-tax', [\App\Http\Controllers\SiteController::class, 'stockNrfTax'])->name('site.stock.information.NRF-historic-tax');
Route::get('/stock-information/distribution-reinvestment-program', [\App\Http\Controllers\SiteController::class, 'stockDistributionProgram'])->name('site.stock.information.distribution-reinvestment-program');
Route::get('/financials-information/quaterly-reports', [\App\Http\Controllers\SiteController::class, 'financialsQuaterlyQuote'])->name('site.financials.information.quaterly-reports');
Route::get('/financials-information/annual-reports', [\App\Http\Controllers\SiteController::class, 'financialsAnnualQuote'])->name('site.financials.information.annual-reports');
Route::get('/financials-information/supplements', [\App\Http\Controllers\SiteController::class, 'financialsSupplements'])->name('site.financials.information.supplements');
Route::get('/sec-fillings', [\App\Http\Controllers\SiteController::class, 'secFilings'])->name('site.sec-fillings');
Route::get('/news-reports', [\App\Http\Controllers\SiteController::class, 'newsReport'])->name('site.news.report');
Route::get('/events', [\App\Http\Controllers\SiteController::class, 'events'])->name('site.events');
Route::get('/contact-us', [\App\Http\Controllers\SiteController::class, 'contactUs'])->name('site.contact.us');
Route::get('/copoerate-goverance/highlights', [\App\Http\Controllers\SiteController::class, 'coperateGovernaceHighlights'])->name('site.coperate-governance.highlights');



Route::get('/currency/{id}', [\App\Http\Controllers\SiteController::class, 'currency'])->name('site.currency');
Route::get('/language/{id}', [\App\Http\Controllers\SiteController::class, 'language'])->name('site.language');