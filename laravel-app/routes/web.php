use App\Http\Controllers\PortfolioController;

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Portfolio route
use App\Http\Controllers\PortfolioController;
Route::get('/portfolio', [PortfolioController::class, 'index']);
