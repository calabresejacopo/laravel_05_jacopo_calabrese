<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MenuController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/menu', [MenuController::class, 'menu'])->name('menu');
Route::get('/dettaglio/{id}', [MenuController::class, 'detail'])->name('dettaglio');
Route::get('/contattaci', [PublicController::class, 'contact'])->name('contattaci');
Route::post('/contattaci/submit', [PublicController::class, 'submit'])->name('contact.submit');
Route::get('/thank-you', [PublicController::class, 'thankYou'])->name('thankyou.page');