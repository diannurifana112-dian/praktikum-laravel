
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="min-h-screen p-8">

    <div class="max-w-6xl mx-auto">

        <div class="bg-gradient-to-r from-purple-700 to-indigo-600 rounded-2xl p-8 text-white shadow-lg">
            <h1 class="text-3xl font-bold mb-3">
                Dashboard
            </h1>

            <p class="text-purple-100 text-lg">
                Selamat Datang di Sistem Informasi Surat.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">

            <div class="bg-white p-7 rounded-xl shadow-md border-l-4 border-purple-500">
                <h2 class="text-xl font-semibold text-gray-700">
                    Surat Masuk
                </h2>

                <p class="text-gray-500 mt-3">
                    Kelola data surat masuk.
                </p>

                <a href="{{ route('surat-masuk.index') }}"
                   class="inline-block mt-5 bg-purple-600 text-white px-5 py-2 rounded-lg hover:bg-purple-700">
                    Lihat Surat
                </a>
            </div>

            <div class="bg-white p-7 rounded-xl shadow-md border-l-4 border-indigo-500">
                <h2 class="text-xl font-semibold text-gray-700">
                    Surat Keluar
                </h2>

                <p class="text-gray-500 mt-3">
                    Kelola data surat keluar.
                </p>

                <a href="{{ route('surat-keluar.index') }}"
                   class="inline-block mt-5 bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700">
                    Lihat Surat
                </a>
            </div>

        </div>

    </div>

</div>

@endsection
