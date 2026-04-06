<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function tampilkan($id = 'ADM001', $nama = 'Admin TU'){
        return view('admin.dashboard_admin', ['id' => $id, 'nama' => $nama]);
    }
}
