<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalikelasController extends Controller
{
    function nama ($id, $nama) {
        return view('dashboard_walikelas', ['id' => $id, 'nama' => $nama]);
    }
}
