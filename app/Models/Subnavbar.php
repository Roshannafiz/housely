<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subnavbar extends Model
{
    use HasFactory;

    protected $fillable = [
        'navbar_id',
        'sub_navbar_name',
        'sub_navbar_link',
    ];
}
