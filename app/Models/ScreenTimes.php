<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScreenTimes extends Model
{
    use HasFactory;

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
}
