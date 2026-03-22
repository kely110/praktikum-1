<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function name($id, $nama){
        return view('dashboard_admin', ['id' => $id, 'nama' => $nama]);
    }
}
