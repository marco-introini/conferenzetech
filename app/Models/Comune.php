<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comune extends Model
{
    use HasFactory;

    public function province(): BelongsTo
    {
        return $this->belongsTo(Provincia::class, 'province_id');
    }
}
