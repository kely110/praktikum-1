<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function getData()
    {
        return [
            ['kode' => 'RPL-10', 'nama' => 'X-RPL 1', 'wali' => 'Drs. Suryanto'],
            ['kode' => 'RPL-11', 'nama' => 'X-RPL 2', 'wali' => 'Rina Wulandari, S.Pd'],
            ['kode' => 'TKJ-10', 'nama' => 'X-TKJ 1', 'wali' => 'Agus Prasetyo, M.Kom'],
        ];
    }

    public function tampilkan()
    {
        $data = $this->getData();
        return view('admin.kelas.index', ['data' => $data]);
    }
}
