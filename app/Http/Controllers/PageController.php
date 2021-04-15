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

    public function contact()
    {
        return view('halaman_hubungi');
    }

    public function contactPost(Request $request)
    {
        $data = $request->all();

        return $data;
    }
}
