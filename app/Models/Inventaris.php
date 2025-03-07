<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;

    protected $table = 'inventaris';

    protected $fillable = [
        'namaBarang',
        'merek',
        'tipe',
        'jumlah',
        'tahunPengadaan',
        'penyedia',
        'nomorKontrak',
        'keterangan',
        'lokasi',
        'tersedia',
        'terpinjam',
        'rusak',
    ];
}
