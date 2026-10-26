<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingLetterSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('outgoing_letters')->insert([
            [
                'nomer_surat' => '001/FT/X/2026',
                'tanggal' => '2026-10-01',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'Undangan Rapat',
                'keterangan' => 'Undangan Rapat Koordinasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nomer_surat' => '002/FT/X/2026',
                'tanggal' => '2026-10-02',
                'pengirim' => 'BAA',
                'perihal' => 'Pemberitahuan Akademik',
                'keterangan' => 'Informasi Kegiatan Akademik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nomer_surat' => '003/FT/X/2026',
                'tanggal' => '2026-10-03',
                'pengirim' => 'LPMM',
                'perihal' => 'Undangan Sosialisasi',
                'keterangan' => 'Undangan Sosialisasi LPPM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
