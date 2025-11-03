<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Conference extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Storage::disk('conferences')->url($this->cover_image),
        );
    }

    protected function casts(): array
    {
        return [
            'start_date' => 'datetime',
            'end_date' => 'datetime',
        ];
    }

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
