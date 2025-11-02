<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conference extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comune(): BelongsTo
    {
        return $this->belongsTo(Comune::class);
    }

    public function registrations(): HasMany
    {
        return $this->hasMany(Registration::class, 'conference_id');
    }



}
