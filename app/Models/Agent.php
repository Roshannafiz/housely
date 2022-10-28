<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'speciality',
        'facebook_link',
        'linkedin_link',
        'instagram_link',
        'image',
        'status',
    ];
}
