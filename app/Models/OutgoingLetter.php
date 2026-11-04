<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OutgoingLetter extends Model
{
      protected $fillable = [
        'nomer_surat',
        'tanggal',
        'pengirim',
        'perihal',
        'keterangan',
    ];
}
