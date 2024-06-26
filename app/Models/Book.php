<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        // required:
        'name',
        'author',
        
        // optional:
        'published_date',
        'photo',
        'description',
        'isbn',
        'genre',
        'publisher',
        'pages',
        'language'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'published_date' => 'datetime'
    ];

    public function scopeByAuthor($query, $author){
        return $query->where('author', $author);
    }

    public function scopePublishedInYear($query, $year){
        return $query->whereYear('published_date', $year);
    }
}
