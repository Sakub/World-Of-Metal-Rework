<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_url',
        'release_year',
        'band_id',
        'rating'
    ];

    public function getPathAttribute() {
        return 'albums.show';
    }

    public static function getALbumsLength() {
        return Album::all()->count();
    }
}
