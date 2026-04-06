<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuruDataController extends Controller
{
    public function getData()
    {
        return [
            ['nip' => '198501001', 'nama' => 'Drs. Suryanto', 'mapel' => 'Matematika'],
            ['nip' => '198501002', 'nama' => 'Rina Wulandari, S.Pd', 'mapel' => 'Bahasa Indonesia'],
            ['nip' => '198501003', 'nama' => 'Agus Prasetyo, M.Kom', 'mapel' => 'Pemrograman Web'],
        ];
    }

    public function tampilkan()
    {
        $data = $this->getData();
        return view('admin.guru.index', ['data' => $data]);
    }
}
