<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    protected $fillable = [
        'peminjaman_id',
        'tanggal_dikembalikan',
        'status',
    ];

    public function peminjamaan(){
        return $this->belongsTo(Peminjaman::class);
    }

}
