<?php

use Illuminate\Support\Facades\Route;
// Perlu panggil use XXXXController dalam Laravel 8
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

// Route controller Laravel 8 dan keatas
Route::get('/', [PageController::class, 'welcome']);
Route::get('/home', [PageController::class, 'home'])->middleware(['auth']);

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

