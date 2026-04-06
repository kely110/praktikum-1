@extends('layouts.admin', [
    'title' => 'Data Guru',
    'pageTitle' => 'Data Guru',
    'breadcrumb' => 'Kelola data guru mata pelajaran',
    'userName' => 'Admin TU'
])

@section('content')
<div class="space-y-6">
    <!-- Header - Flowbite -->
    <div class="p-4 bg-white rounded-lg border border-gray-200 shadow-sm">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="text-lg font-semibold text-gray-900">Manajemen Data Guru</h2>
                <p class="text-sm text-gray-500 mt-1">Total {{ count($data ?? []) }} guru terdaftar</p>
            </div>
            <div class="flex items-center gap-3">
                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Cari</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2" placeholder="Cari guru..." required>
                    </div>
                </form>
                <button type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 py-2 flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Tambah Guru
                </button>
            </div>
        </div>
    </div>

    <!-- Table - Flowbite -->
    <div class="p-4 bg-white rounded-lg border border-gray-200 shadow-sm">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-5 py-3">No</th>
                        <th scope="col" class="px-5 py-3">Guru</th>
                        <th scope="col" class="px-5 py-3">NIP</th>
                        <th scope="col" class="px-5 py-3">Mata Pelajaran</th>
                        <th scope="col" class="px-5 py-3">Status</th>
                        <th scope="col" class="px-5 py-3 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse($data ?? [] as $guru)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-5 py-3">{{ $no++ }}</td>
                        <td class="px-5 py-3">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-full bg-purple-600 flex items-center justify-center text-white text-xs font-semibold">
                                    {{ strtoupper(substr($guru['nama'] ?? 'G', 0, 1)) }}
                                </div>
                                <span class="text-sm font-medium text-gray-900">{{ $guru['nama'] ?? '-' }}</span>
                            </div>
                        </td>
                        <td class="px-5 py-3 font-mono">{{ $guru['nip'] ?? '-' }}</td>
                        <td class="px-5 py-3">
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ $guru['mapel'] ?? '-' }}</span>
                        </td>
                        <td class="px-5 py-3">
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Aktif</span>
                        </td>
                        <td class="px-5 py-3">
                            <div class="flex items-center justify-end gap-2">
                                <button type="button" class="text-gray-500 hover:text-blue-700 p-1.5 rounded-lg hover:bg-blue-50 transition-colors" title="Detail">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </button>
                                <button type="button" class="text-gray-500 hover:text-amber-600 p-1.5 rounded-lg hover:bg-amber-50 transition-colors" title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                </button>
                                <button type="button" class="text-gray-500 hover:text-red-600 p-1.5 rounded-lg hover:bg-red-50 transition-colors" title="Hapus">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr class="bg-white">
                        <td colspan="6" class="px-5 py-12 text-center text-gray-500">Belum ada data guru</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
