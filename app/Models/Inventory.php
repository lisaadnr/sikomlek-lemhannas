<?php

namespace App\Models;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    use HasFactory, SoftDeletes;
    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }

    public function location(): BelongsTo {
        return $this->belongsTo(Location::class);
    }
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }
}
