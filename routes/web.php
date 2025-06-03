<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;

// Главная страница
Route::get('/', [HomeController::class, 'index'])->name('home');

// Форма обратной связи
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Страницы услуг
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('index');
    Route::get('/development', [ServiceController::class, 'development'])->name('development');
    Route::get('/landing', [ServiceController::class, 'landing'])->name('landing');
    Route::get('/redesign', [ServiceController::class, 'redesign'])->name('redesign');
    Route::get('/ecommerce', [ServiceController::class, 'ecommerce'])->name('ecommerce');
    Route::get('/corporate', [ServiceController::class, 'corporate'])->name('corporate');
});
