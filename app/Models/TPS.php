<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TPS extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alamat',
        'kandidat_id',
    ];

    public function kandidat(): BelongsTo
    {
        return $this->belongsTo(Kandidat::class);
    }
}
