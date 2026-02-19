<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('dashboard', function () {
    $hospitals = App\Models\Hospital::all();
    return view('dashboard', compact('hospitals'));
})->name('dashboard');
Route::view('recive', 'books.recive')->name('recive');
Route::view('login1', 'login1')->name('login1');
Route::view('register1', 'register1')->name('register1');

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('departments', App\Http\Controllers\DepartmentController::class);

Route::resource('hospitals', App\Http\Controllers\HospitalController::class);
Route::resource('users', App\Http\Controllers\UserController::class);
