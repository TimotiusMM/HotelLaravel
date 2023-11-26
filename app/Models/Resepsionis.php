<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resepsionis extends Model
{
    use HasFactory;

    // Resepsionis.php (model)
    protected $table = 'resepsionis';

    protected $fillable = [
        'nama_pemesan',
        'email',
        'notelp',
        'nama_tamu',
        'tipe_kamar',
        'cekIn',
        'cekOut',
        'jumlah_kamar'
    ];
}
