<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $suratKeluar =
        [
            [
                'id'            => 1,
                'nomer_surat'   => '001/FT/X/2026',
                'tanggal'       => '01-10-2026',
                'pengirim'      => 'Fakultas Teknik',
                'perihal'       => 'Undangan Rapat'

            ],
            [
                'id'            => 2,
                'nomer_surat'   => '002/FT/X/2026',
                'tanggal'       => '02-10-2026',
                'pengirim'      => 'BAA',
                'perihal'       => 'Pemberitahuan Akademik'
            ],
            [
                'id'            => 3,
                'nomer_surat'   => '003/FT/X/2026',
                'tanggal'       => '03-10-2026',
                'pengirim'      => 'LPMM',
                'perihal'       => 'Undangan Sosialisasi'
            ]
        ];
        return view('surat-keluar.index', compact('suratKeluar'));
    }

    public function show(int $id)
    {
        //return 'Detail Surat Keluar dengan ID:' .$id;
        $surat = [
            1 =>[
                    'id'            => 1,
                    'nomer_surat'   => '001/FT/X/2026',
                    'tanggal'       => '01-10-2026',
                    'pengirim'      => 'Fakultas Teknik',
                    'perihal'       => 'Undangan Rapat'

            ],
            2 =>[
                    'id'            => 2,
                    'nomer_surat'   => '002/FT/X/2026',
                    'tanggal'       => '02-10-2026',
                    'pengirim'      => 'BAA',
                    'perihal'       => 'Pemberitahuan Akademik'
            ],
            3 =>[
                    'id'            => 3,
                    'nomer_surat'   => '003/FT/X/2026',
                    'tanggal'       => '03-10-2026',
                    'pengirim'      => 'LPMM',
                    'perihal'       => 'Undangan Sosialisasi'
            ]
        ];
        //Ambil surat berdasarkan ID
        $surat = $surat[$id] ?? null;
        return view('surat-keluar.show', compact('surat'));
    }
}

//ROUTE ->TAMPIL
//ROUTE -> CONTROLLER