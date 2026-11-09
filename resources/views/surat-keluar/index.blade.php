@extends('layouts.app')

@section('title', 'Surat Keluar')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">

    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Daftar Surat Keluar</h1>
            <p class="text-gray-500 mt-1">Kelola seluruh data surat keluar.</p>
        </div>

        <a href="{{ route('surat-keluar.create') }}"
           class="rounded-lg bg-purple-700 px-5 py-3 text-white font-semibold hover:bg-purple-800 transition">
            + Tambah Surat Keluar
        </a>
    </div>

    @if (session('success'))
        <div class="mb-5 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto rounded-xl border border-gray-200 bg-white shadow-sm">
        <table class="w-full text-sm text-left text-gray-700">
            <thead class="bg-purple-100 text-purple-900 uppercase text-xs">
                <tr>
                    <th class="px-4 py-4">No</th>
                    <th class="px-4 py-4">Nomor Surat</th>
                    <th class="px-4 py-4">Tanggal</th>
                    <th class="px-4 py-4">Pengirim</th>
                    <th class="px-4 py-4">Perihal</th>
                    <th class="px-4 py-4">Keterangan</th>
                    <th class="px-4 py-4 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100">
                @forelse ($suratKeluar as $surat)
                    <tr class="hover:bg-purple-50 transition">
                        <td class="px-4 py-4">{{ $loop->iteration }}</td>
                        <td class="px-4 py-4 font-medium">{{ $surat->nomer_surat }}</td>
                        <td class="px-4 py-4">{{ $surat->tanggal }}</td>
                        <td class="px-4 py-4">{{ $surat->pengirim }}</td>
                        <td class="px-4 py-4">{{ $surat->perihal }}</td>
                        <td class="px-4 py-4">{{ $surat->keterangan }}</td>

                        <td class="px-4 py-4">
                            <div class="flex flex-wrap justify-center gap-2">

                                <a href="{{ route('surat-keluar.show', $surat->id) }}"
                                   class="rounded-md bg-blue-100 px-3 py-2 text-blue-700 hover:bg-blue-200">
                                    Detail
                                </a>

                                <a href="{{ route('surat-keluar.edit', $surat->id) }}"
                                   class="rounded-md bg-yellow-100 px-3 py-2 text-yellow-700 hover:bg-yellow-200">
                                    Edit
                                </a>

                                <form action="{{ route('surat-keluar.destroy', $surat->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Apakah kamu yakin ingin menghapus surat ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="rounded-md bg-red-100 px-3 py-2 text-red-700 hover:bg-red-200">
                                        Hapus
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-10 text-center text-gray-500">
                            Belum ada data surat keluar.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
