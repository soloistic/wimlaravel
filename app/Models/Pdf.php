<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static \Illuminate\Database\Eloquent\Builder|static create(array $attributes = [])
 */
class Pdf extends Model
{
    use HasFactory;

    // Add the fields you want to be mass assignable
    protected $fillable = [
        'title',
        'pdf_url',
        'thumbnail_url',
        'published_at',
    ];

    // Cast attributes to appropriate types
    protected $casts = [
        'published_at' => 'date',
    ];
}
