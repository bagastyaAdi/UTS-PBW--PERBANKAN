<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class NasabahController extends Controller{
//     public function index(){
//         return view('daftar_nasabah');
//     }
// }

// <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NasabahController extends Controller
{
    public function index()
    {
        return view('daftar_nasabah'); // Mengarahkan ke file resources/views/nasabah.blade.php
    }
}


// Route::get('/nasabah', function () {
//     return view('nasabah'); // Mengarahkan ke file resources/views/nasabah.blade.php
// })->name('nasabah'); // Memberikan nama 'nasabah' pada route
