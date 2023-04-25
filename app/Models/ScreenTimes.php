<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ScreenTimes extends Model
{
    use HasFactory;

    protected $table = "screen_times";

    protected $fillable = [
        'movie_id',
        'date',
        'seats',
        'price',
        'presentation_type'
    ];

    // A screen time model belongs to a movie
    public function movie():BelongsTo
    {
        return $this->belongsTo(Movie::class);
    }

    // A screen time model has many reservations
    public function reservations(): HasMany
    {
        return $this->hasMany(Reservations::class, 'screen_time_id');
    }
}
