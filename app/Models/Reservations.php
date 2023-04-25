<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservations extends Model
{
    use HasFactory;
    protected $table = 'reservations';

    protected $fillable = [
        'screen_time_id',
        'user_id'
    ];

    // A reservation model belongs to a screen time model & to a user model
    public function screenTime(): BelongsTo
    {
        return $this->belongsTo(ScreenTimes::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}