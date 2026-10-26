<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomingLetter;

class SuratMasukController extends Controller
{
    public function index()
    {
        $suratMasuk = IncomingLetter::all();
        return view('surat-masuk.index', compact('suratMasuk'));
    }

 public function show(int $id)
    {
        $surat = IncomingLetter::findOrFail($id);

        return view('surat-masuk.show', compact('surat'));
    }
}

//ROUTE ->TAMPIL
//ROUTE -> CONTROLLER