<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    if(session()->has(key: 'user'))
    {
        return redirect(to: '/dashboard');
    }
    return view('login');
});

Route::get(uri: '/login', action: [AuthController::class, 'showLogin'])->name(name: 'login');
Route::get(uri: '/login', action: [AuthController::class, 'login'])->name(name: 'login.submit');

Route::get(uri: '/dashboard', action: [AuthController::class, 'dashboard'])->name(name: 'dashboard');

Route::get(uri: '/logout', action: [AuthController::class, 'logout'])->name(name: 'logout');