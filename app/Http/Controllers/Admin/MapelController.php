<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function getData()
    {
        return [
            ['kode' => 'MAT001', 'nama' => 'Matematika', 'jam' => 4],
            ['kode' => 'BIN001', 'nama' => 'Bahasa Indonesia', 'jam' => 3],
            ['kode' => 'TIK001', 'nama' => 'Pemrograman Web', 'jam' => 5],
        ];
    }

    public function tampilkan()
    {
        $data = $this->getData();
        return view('admin.mapel.index', ['data' => $data]);
    }
}
