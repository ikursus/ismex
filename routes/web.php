<?php

use Illuminate\Support\Facades\Route;
// Perlu panggil use XXXXController dalam Laravel 8
use App\Http\Controllers\PageController;

// Route controller Laravel 8 dan keatas
Route::get('/', [PageController::class, 'welcome']);
// Route controller Laravel 7 dan kebawah
// Route::get('/', 'PageController@welcome');

Route::get('contact-us', function() {

    return view('halaman_hubungi');

})->name('halaman.hubungi');

// Contoh Route dengan parameters (optional)
Route::get('profile/{username?}', function ($username = null) {

    if (is_null($username))
    {
        return redirect()->route('halaman.hubungi');
    }

    return 'Ini adalah profile bagi: ' . $username;
    
})->where('username', '[A-Za-z0-9]+');

