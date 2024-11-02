@extends('layouts.app')

@section('content')
    <div class="container mx-auto bg-white mb-10 pb-10 shadow-md rounded-lg ml-64">
        <!-- Judul halaman -->
        <h1 class="text-3xl font-bold text-black mb-2 mt-10 pl-10 pt-10 text-center">Hasil Pendaftaran Beasiswa</h1>

        <!-- Alert untuk pesan sukses -->
        @if (session('success'))
            <div class="max-w-full bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mx-10" role="alert">
                <p class="font-bold">Sukses!</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <!-- Kondisi ketika tidak ada data pendaftaran -->
        @if ($beasiswa->isEmpty())
            <div class="max-w-full bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mx-10" role="alert">
                <p class="font-bold">Tidak Ada Pendaftaran</p>
                <p>Belum ada data pendaftaran beasiswa yang tersimpan.</p>
            </div>
        @else
            <div class="overflow-x-auto">
                <div class="p-10">
                    <table class="min-w-full bg-white mx-auto">
                        <thead>
                            <tr class="border-b-2">
                                <th class="py-2 px-4 text-left">Nama</th>
                                <th class="py-2 px-4 text-left">NIM</th>
                                <th class="py-2 px-4 text-left">Email</th>
                                <th class="py-2 px-4 text-left">No. HP</th>
                                <th class="py-2 px-4 text-left">Semester</th>
                                <th class="py-2 px-4 text-left">IPK</th>
                                <th class="py-2 px-4 text-left">Jenis Beasiswa</th>
                                <th class="py-2 px-4 text-left">Berkas yang Diupload</th>
                                <th class="py-2 px-4 text-left">Status Ajuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($beasiswa as $bea)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-2 px-4">{{ $bea->nama }}</td>
                                    <td class="py-2 px-4">{{ $bea->nim }}</td>
                                    <td class="py-2 px-4">{{ $bea->email }}</td>
                                    <td class="py-2 px-4">{{ $bea->no_hp }}</td>
                                    <td class="py-2 px-4">{{ $bea->semester }}</td>
                                    <td class="py-2 px-4">{{ $bea->ipk }}</td>
                                    <td class="py-2 px-4">{{ ucfirst($bea->jenis_beasiswa) }}</td>
                                    <td class="py-2 px-4">
                                        @if (file_exists(storage_path('app/public/' . $bea->berkas)))
                                            <a href="{{ asset('storage/' . $bea->berkas) }}"
                                                class="text-blue-500 hover:underline" target="_blank">Lihat Berkas</a>
                                        @else
                                            <span class="text-red-500">Berkas tidak ditemukan</span>
                                        @endif
                                    </td>
                                    <td class="py-2 px-4">
                                        <span class="text-yellow-600">{{ $bea->status }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
