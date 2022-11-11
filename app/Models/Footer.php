<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'short_description',
        'address',
        'email',
        'phone',
        'develop_by',
        'status',
    ];
}
