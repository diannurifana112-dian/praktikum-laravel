@extends('layouts.app')

@section('title', 'Detail Surat Masuk')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">

    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Detail Surat Masuk</h1>
        <p class="mt-1 text-gray-500">Informasi lengkap surat masuk.</p>
    </div>

    <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">

        @if ($surat)
            <div class="mb-6 rounded-lg bg-purple-700 p-5 text-white">
                <p class="text-sm text-purple-100">Nomor Surat</p>
                <h2 class="mt-1 text-xl font-bold">
                    {{ $surat->nomer_surat }}
                </h2>
            </div>

            <div class="divide-y divide-gray-100">
                <div class="py-4">
                    <p class="text-sm text-gray-500">Tanggal</p>
                    <p class="mt-1 font-semibold text-gray-800">{{ $surat->tanggal }}</p>
                </div>

                <div class="py-4">
                    <p class="text-sm text-gray-500">Pengirim</p>
                    <p class="mt-1 font-semibold text-gray-800">{{ $surat->pengirim }}</p>
                </div>

                <div class="py-4">
                    <p class="text-sm text-gray-500">Perihal</p>
                    <p class="mt-1 font-semibold text-gray-800">{{ $surat->perihal }}</p>
                </div>

                <div class="py-4">
                    <p class="text-sm text-gray-500">Keterangan</p>
                    <p class="mt-1 font-semibold text-gray-800">{{ $surat->keterangan ?: '-' }}</p>
                </div>
            </div>

            <div class="mt-6 flex flex-wrap gap-3">
                <a href="{{ route('surat-masuk.edit', $surat->id) }}"
                   class="rounded-lg bg-yellow-500 px-5 py-3 font-semibold text-white hover:bg-yellow-600 transition">
                    Edit Surat
                </a>

                <a href="{{ route('surat-masuk.index') }}"
                   class="rounded-lg bg-purple-700 px-5 py-3 font-semibold text-white hover:bg-purple-800 transition">
                    Kembali
                </a>
            </div>
        @else
            <p class="text-gray-600">Surat tidak ditemukan.</p>
            <a href="{{ route('surat-masuk.index') }}"
               class="mt-4 inline-block rounded-lg bg-purple-700 px-5 py-3 text-white hover:bg-purple-800">
                Kembali
            </a>
        @endif

    </div>
</div>
@endsection
