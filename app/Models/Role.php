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

    public static function getAdminRoleId() {
        $row = Role::where('name', 'admin')->get();
        return $row[0]->id;
    }
}
