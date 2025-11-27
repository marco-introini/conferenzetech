<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'province';

    /**
     * @return HasMany<Comune, $this>
     */
    public function comuni(): HasMany
    {
        return $this->hasMany(Comune::class, 'province_id');
    }
}
