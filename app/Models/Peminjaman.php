<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'inventaris_id',
        'nama_peminjam',
        'nip',
        'unit_kerja',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
        'jumlah_unit',
    ];

    public function inventaris(){
        return $this->belongsTo(Inventaris::class);
    }

}
