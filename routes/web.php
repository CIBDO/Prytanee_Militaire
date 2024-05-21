<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

 Route::get('/', function () {
    return view('frontend.pages.accueil');
})->name('accueil'); 

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');