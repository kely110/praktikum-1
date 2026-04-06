<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function getData()
    {
        // Simulasi data siswa (nanti diganti query database)
        return [
            ['nis' => '2024001', 'nama' => 'Ahmad Fauzi', 'kelas' => 'X-RPL 1'],
            ['nis' => '2024002', 'nama' => 'Siti Nurhaliza', 'kelas' => 'X-RPL 1'],
            ['nis' => '2024003', 'nama' => 'Budi Santoso', 'kelas' => 'X-RPL 2'],
        ];
    }

    public function tampilkan()
    {
        $data = $this->getData();
        return view('admin.siswa.index', ['data' => $data]);
    }
}
