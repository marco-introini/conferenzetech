<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comune extends Model
{
    use HasFactory;

    protected $table = 'comuni';

    /**
     * @return BelongsTo<Provincia, $this>
     */
    public function province(): BelongsTo
    {
        return $this->belongsTo(Provincia::class, 'province_id');
    }

    /**
     * @return HasMany<Conference, $this>
     */
    public function conferences(): HasMany
    {
        return $this->hasMany(Conference::class);
    }
}
