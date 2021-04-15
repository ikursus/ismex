<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $numbers = [
        ['id' => 1],
        ['id' => 2],
        ['id' => 3]
    ];

    $field = '<input type="text" name="nama">';

    return view('welcome', compact('numbers', 'field'));
});

Route::get('contact-us', function() {

    return view('halaman_hubungi');

})->name('halaman.hubungi');

Route::get('{slug}', function ($slug) {
    return 'Ini adalah route parameter';
});

// Route::get('profile/{username}', function ($username) {

//     return 'Ini adalah profile bagi: ' . $username;

// });

Route::get('profile/{username?}', function ($username = null) {

    if (is_null($username))
    {
        return redirect()->route('halaman.hubungi');
    }

    return 'Ini adalah profile bagi: ' . $username;
    
})->where('username', '[A-Za-z0-9]+');

