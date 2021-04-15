<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Kod menguruskan halaman utama
    public function welcome()
    {
        $numbers = [
            ['id' => 1],
            ['id' => 2],
            ['id' => 3]
        ];
    
        $field = '<input type="text" name="nama">';
    
        return view('welcome', compact('numbers', 'field'));
    }
}
