<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $fillable = [
        'title',
        'year',
        'cast',
        'director',
        'length',
        'genre',
        'cover',
        'cover_big',
        'trailer',
        'description'
    ];
    
    public function scopeFilter($query, array $filters) {
        if($filters['kategoria'] ?? false) {
            $query->where('genre', 'like', '%' . request('kategoria') . '%');
        }

        if($filters['kereses'] ?? false) {
            $query->where('title', 'like', '%' . request('kereses') . '%')
                ->orWhere('description', 'like', '%' . request('kereses') . '%');
        }
    }
}
