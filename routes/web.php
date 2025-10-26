<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function() {
    return view('navbar');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration', [App\Http\Controllers\appuser::class, 'registration'])->name('registration');
Route::get('/welcome', [App\Http\Controllers\appuser::class, 'Welcome'])->name('Welcome');
Route::post('/login', [App\Http\Controllers\appuser::class, 'login'])->name('login');
Route::post('/registration', [App\Http\Controllers\appuser::class, 'register'])->name('register');
Route::get('/create', [App\Http\Controllers\appuser::class, 'Create'])->name('create');
Route::post('/addvoter', [App\Http\Controllers\appuser::class, 'addvoter'])->name('addvoter');
Route::get('/view', [App\Http\Controllers\appuser::class, 'View'])->name('view');
Route::get('/delete/{id}', [App\Http\Controllers\appuser::class, 'Delete'])->name('delete');
Route::get('/edit/{id}', [App\Http\Controllers\appuser::class, 'Edit'])->name('edit');
?>
