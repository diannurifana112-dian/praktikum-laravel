@extends('layouts.app')

@section('title', 'Edit Surat Keluar')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">

    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Edit Surat Keluar</h1>
        <p class="mt-1 text-gray-500">Perbarui informasi surat keluar.</p>
    </div>

    <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
        <form action="{{ route('surat-keluar.update', $surat->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-5">
                <label class="mb-2 block font-semibold text-gray-700">Nomor Surat</label>
                <input type="text" name="nomer_surat"
                       value="{{ old('nomer_surat', $surat->nomer_surat) }}"
                       class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-100">
                @error('nomer_surat')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="mb-2 block font-semibold text-gray-700">Tanggal</label>
                <input type="date" name="tanggal"
                       value="{{ old('tanggal', $surat->tanggal) }}"
                       class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-100">
                @error('tanggal')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="mb-2 block font-semibold text-gray-700">Pengirim</label>
                <input type="text" name="pengirim"
                       value="{{ old('pengirim', $surat->pengirim) }}"
                       class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-100">
                @error('pengirim')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="mb-2 block font-semibold text-gray-700">Perihal</label>
                <input type="text" name="perihal"
                       value="{{ old('perihal', $surat->perihal) }}"
                       class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-100">
                @error('perihal')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="mb-2 block font-semibold text-gray-700">Keterangan</label>
                <textarea name="keterangan" rows="3"
                          class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-100">{{ old('keterangan', $surat->keterangan) }}</textarea>
                @error('keterangan')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-wrap gap-3">
                <button type="submit"
                        class="rounded-lg bg-purple-700 px-6 py-3 font-semibold text-white hover:bg-purple-800 transition">
                    Simpan Perubahan
                </button>

                <a href="{{ route('surat-keluar.index') }}"
                   class="rounded-lg bg-gray-200 px-6 py-3 font-semibold text-gray-700 hover:bg-gray-300 transition">
                    Batal
                </a>
            </div>
        </form>
    </div>

</div>
@endsection