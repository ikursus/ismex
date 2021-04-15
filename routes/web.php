<?php

use Illuminate\Support\Facades\Route;
// Perlu panggil use XXXXController dalam Laravel 8
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

// Route controller Laravel 8 dan keatas
Route::get('/', [PageController::class, 'welcome']);
Route::get('/home', [PageController::class, 'home'])->middleware(['auth'])->name('home');

// Paparkan borang contact
Route::get('contact-us', [PageController::class, 'contact'])->name('halaman.hubungi');
// Terima data daripada borang contact yang sama
Route::post('contact-us', [PageController::class, 'contactPost'])->name('hubungi.post');
// Route controller Laravel 7 dan kebawah
// Route::get('/', 'PageController@welcome');

//Route::get($uri, $action);
//$action = [Controller, method]

Route::get('users/datatables', [UserController::class, 'datatables']);
Route::resource('users', UserController::class);

// Route::get('users', [UserController::class, 'index'])->name('users.index');
// Route::get('users/create', [UserController::class, 'create'])->name('users.create');
// Route::post('users/create', [UserController::class, 'store'])->name('users.store');
// Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
// Route::patch('users/{id}/edit', [UserController::class, 'update'])->name('users.update');
// Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
