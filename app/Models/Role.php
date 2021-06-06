<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public static function getRoleId($roleName) {
        $row = Role::where('name', $roleName)->get();
        return $row[0]->id;
    }

}
