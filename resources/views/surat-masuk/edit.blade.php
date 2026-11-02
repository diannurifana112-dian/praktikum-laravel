@extends('layouts.app')
@section('title', 'Edit Surat Masuk')
@section('content')

<h1>Edit Surat Masuk</h1>
<form action="{{ route('surat-masuk.update', $surat->id) }}" method="POST">
    @csrf
    @method('PUT')
    <p> Nomer Surat:<br>
        <input name="nomer_surat" value="{{old('nomer_surat', $surat->nomer_surat)}}">
        @error('nomer_surat') <span style="color:red">{{ $message }}</span> @enderror
    </p>
    <p> Tanggal:<br>
        <input type="date" name="tanggal" value="{{old('tanggal', $surat->tanggal)}}">
        @error('tanggal') <span style="color:red">{{ $message }}</span> @enderror
    </p>
    <p> Pengirim:<br>
        <input name="pengirim" name="pengirim" value="{{old('pengirim', $surat->pengirim)}}">
        @error('pengirim') <span style="color:red">{{ $message }}</span> @enderror
    </p>
    <p> perihal:<br>
        <input name="perihal" name="perihal" value="{{old('perihal', $surat->perihal)}}">
        @error('perihal') <span style="color:red">{{ $message }}</span> @enderror
    </p>
    <p> Keterangan:<br>
        <input name="keterangan" name="keterangan" value="{{old('keterangan', $surat->keterangan)}}">
        @error('keterangan') <span style="color:red">{{ $message }}</span> @enderror
    </p>
    <button type="submit">Simpan</button>
    <a href="{{route('surat-masuk.index')}}">Batal</a>
</form>
@endsection