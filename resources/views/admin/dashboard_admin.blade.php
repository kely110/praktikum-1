@extends('layouts.admin', [
    'title' => 'Dashboard',
    'pageTitle' => 'Dashboard',
    'breadcrumb' => 'Selamat datang, ' . ($nama ?? 'Admin') . ' di sistem pengolahan rapor siswa',
    'userName' => $nama ?? 'Admin TU'
])

@section('content')
<div class="space-y-6">
    <!-- Welcome Banner - Flowbite -->
    <div class="p-4 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg shadow-sm">
        <div class="relative z-10">
            <h2 class="text-2xl font-bold text-white mb-2">Selamat Datang, {{ $nama ?? 'Admin' }}! 👋</h2>
            <p class="text-white/80 text-sm">Kelola data siswa, guru, mata pelajaran, dan kelas dengan mudah.</p>
            <div class="flex items-center gap-2 mt-3 text-xs text-white/70">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                <span>ID Admin: {{ $id ?? 'N/A' }}</span>
            </div>
        </div>
    </div>

    <!-- Stats Cards - Flowbite -->
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
        <!-- Total Siswa -->
        <div class="p-4 bg-white rounded-lg border border-gray-200 shadow-sm">
            <dl>
                <dt class="text-sm font-medium text-gray-500 truncate">Total Siswa</dt>
                <dd class="flex items-center gap-2 mt-2">
                    <span class="text-2xl font-bold text-gray-900">150</span>
                    <span class="flex items-center text-xs font-medium text-green-600 bg-green-100 px-2 py-0.5 rounded-full">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                        +12%
                    </span>
                </dd>
            </dl>
            <div class="mt-3 flex items-center justify-center w-10 h-10 bg-blue-100 rounded-lg">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                </svg>
            </div>
        </div>

        <!-- Total Guru -->
        <div class="p-4 bg-white rounded-lg border border-gray-200 shadow-sm">
            <dl>
                <dt class="text-sm font-medium text-gray-500 truncate">Total Guru</dt>
                <dd class="flex items-center gap-2 mt-2">
                    <span class="text-2xl font-bold text-gray-900">25</span>
                    <span class="flex items-center text-xs font-medium text-green-600 bg-green-100 px-2 py-0.5 rounded-full">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                        +3%
                    </span>
                </dd>
            </dl>
            <div class="mt-3 flex items-center justify-center w-10 h-10 bg-purple-100 rounded-lg">
                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 00-3 3 3 3 0 003 3zm6 3a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
            </div>
        </div>

        <!-- Total Mapel -->
        <div class="p-4 bg-white rounded-lg border border-gray-200 shadow-sm">
            <dl>
                <dt class="text-sm font-medium text-gray-500 truncate">Mata Pelajaran</dt>
                <dd class="flex items-center gap-2 mt-2">
                    <span class="text-2xl font-bold text-gray-900">12</span>
                    <span class="flex items-center text-xs font-medium text-gray-600 bg-gray-100 px-2 py-0.5 rounded-full">Stabil</span>
                </dd>
            </dl>
            <div class="mt-3 flex items-center justify-center w-10 h-10 bg-amber-100 rounded-lg">
                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
            </div>
        </div>

        <!-- Total Kelas -->
        <div class="p-4 bg-white rounded-lg border border-gray-200 shadow-sm">
            <dl>
                <dt class="text-sm font-medium text-gray-500 truncate">Total Kelas</dt>
                <dd class="flex items-center gap-2 mt-2">
                    <span class="text-2xl font-bold text-gray-900">8</span>
                    <span class="flex items-center text-xs font-medium text-green-600 bg-green-100 px-2 py-0.5 rounded-full">
                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                        +2
                    </span>
                </dd>
            </dl>
            <div class="mt-3 flex items-center justify-center w-10 h-10 bg-emerald-100 rounded-lg">
                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
            </div>
        </div>
    </div>

    <!-- Charts & Quick Stats -->
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-4">
        <!-- Bar Chart Placeholder -->
        <div class="xl:col-span-2 p-4 bg-white rounded-lg border border-gray-200 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-base font-semibold text-gray-900">Distribusi Nilai Siswa</h3>
                <select class="text-xs border border-gray-300 rounded-lg px-3 py-1.5 text-gray-600 bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                    <option>Semua Kelas</option>
                    <option>X-A</option>
                    <option>X-B</option>
                    <option>XI-A</option>
                </select>
            </div>
            <div class="flex items-end gap-3 h-48 px-4">
                <div class="flex-1 flex flex-col items-center gap-1">
                    <div class="w-full bg-blue-500 rounded-t-lg" style="height: 65%"></div>
                    <span class="text-xs text-gray-500">X-A</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-1">
                    <div class="w-full bg-purple-500 rounded-t-lg" style="height: 80%"></div>
                    <span class="text-xs text-gray-500">X-B</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-1">
                    <div class="w-full bg-pink-500 rounded-t-lg" style="height: 55%"></div>
                    <span class="text-xs text-gray-500">XI-A</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-1">
                    <div class="w-full bg-amber-500 rounded-t-lg" style="height: 90%"></div>
                    <span class="text-xs text-gray-500">XI-B</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-1">
                    <div class="w-full bg-emerald-500 rounded-t-lg" style="height: 70%"></div>
                    <span class="text-xs text-gray-500">XII-A</span>
                </div>
                <div class="flex-1 flex flex-col items-center gap-1">
                    <div class="w-full bg-cyan-500 rounded-t-lg" style="height: 45%"></div>
                    <span class="text-xs text-gray-500">XII-B</span>
                </div>
            </div>
        </div>

        <!-- Quick Stats - Flowbite -->
        <div class="p-4 bg-white rounded-lg border border-gray-200 shadow-sm">
            <h3 class="text-base font-semibold text-gray-900 mb-4">Statistik Cepat</h3>
            <div class="space-y-4">
                <div>
                    <div class="flex items-center justify-between mb-1">
                        <span class="text-sm text-gray-600">Lulus</span>
                        <span class="text-sm font-semibold text-gray-900">142</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-green-500 h-2 rounded-full" style="width: 95%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between mb-1">
                        <span class="text-sm text-gray-600">Remedial</span>
                        <span class="text-sm font-semibold text-gray-900">6</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-amber-500 h-2 rounded-full" style="width: 4%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between mb-1">
                        <span class="text-sm text-gray-600">Tidak Lulus</span>
                        <span class="text-sm font-semibold text-gray-900">2</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-red-500 h-2 rounded-full" style="width: 1%"></div>
                    </div>
                </div>
            </div>
            <div class="mt-6 pt-4 border-t border-gray-200">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-500">Rata-rata Sekolah</span>
                    <span class="font-bold text-gray-900">84.5</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Students Table - Flowbite -->
    <div class="p-4 bg-white rounded-lg border border-gray-200 shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-base font-semibold text-gray-900">Siswa Terbaru</h3>
            <a href="/admin/siswa" class="text-sm text-blue-600 hover:underline font-medium flex items-center gap-1">
                Lihat Semua
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-5 py-3">Nama Siswa</th>
                        <th scope="col" class="px-5 py-3">NIS</th>
                        <th scope="col" class="px-5 py-3">Kelas</th>
                        <th scope="col" class="px-5 py-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-5 py-3">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-indigo-500 flex items-center justify-center text-white text-xs font-semibold">AR</div>
                                <span class="text-sm font-medium text-gray-900">Adi Ramadhan</span>
                            </div>
                        </td>
                        <td class="px-5 py-3">2024001</td>
                        <td class="px-5 py-3">X-A</td>
                        <td class="px-5 py-3"><span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Aktif</span></td>
                    </tr>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-5 py-3">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-pink-500 flex items-center justify-center text-white text-xs font-semibold">KS</div>
                                <span class="text-sm font-medium text-gray-900">Kelysa Sibuea</span>
                            </div>
                        </td>
                        <td class="px-5 py-3">2024002</td>
                        <td class="px-5 py-3">X-A</td>
                        <td class="px-5 py-3"><span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Aktif</span></td>
                    </tr>
                    <tr class="bg-white hover:bg-gray-50">
                        <td class="px-5 py-3">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-amber-500 flex items-center justify-center text-white text-xs font-semibold">AF</div>
                                <span class="text-sm font-medium text-gray-900">Andini Fantuzzia</span>
                            </div>
                        </td>
                        <td class="px-5 py-3">2024003</td>
                        <td class="px-5 py-3">X-B</td>
                        <td class="px-5 py-3"><span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Aktif</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
