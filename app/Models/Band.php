<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'logo_url',
        'image_url',
        'created_year',
        'broke_year',
        'albums_released',
        'nationality_id',
        'members_number',
        'user_posted',
        'genre_id',
        'rating'
    ];
}
