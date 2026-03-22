<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    
    function nama($id, $namaGuru) {
        return view('dashboard_guru', ['id' => $id, 'namaGuru' => $namaGuru]);
    }
}
