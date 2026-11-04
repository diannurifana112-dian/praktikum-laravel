@extends('layouts.app')
@section('title', 'Tambah Surat Keluar')
@section('content')

<h1>Tambah Surat Keluar</h1>
<form action="{{ route('surat-keluar.store') }}" method="POST">
    @csrf
    <p> Nomer Surat:<br>
        <input name="nomer_surat" value="{{old('nomer_surat')}}">
        @error('nomer_surat') <span style="color:red">{{ $message }}</span> @enderror
    </p>
    <p> Tanggal:<br>
        <input type="date" name="tanggal" value="{{old('tanggal')}}">
        @error('tanggal') <span style="color:red">{{ $message }}</span> @enderror
    </p>
    <p> Pengirim:<br>
        <input name="pengirim" name="pengirim" value="{{old('pengirim')}}">
        @error('pengirim') <span style="color:red">{{ $message }}</span> @enderror
    </p>
    <p> perihal:<br>
        <input name="perihal" name="perihal" value="{{old('perihal')}}">
        @error('perihal') <span style="color:red">{{ $message }}</span> @enderror
    </p>
    <p> Keterangan:<br>
        <input name="keterangan" name="keterangan" value="{{old('keterangan')}}">
        @error('keterangan') <span style="color:red">{{ $message }}</span> @enderror
    </p>
    <button type="submit">Simpan</button>
    <a href="{{route('surat-keluar.index')}}">Batal</a>
</form>
@endsection