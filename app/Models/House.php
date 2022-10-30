<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'house_title',
        'house_price',
        'house_description',
        'image',
        'gallery_image',
        'house_sqf',
        'house_bed',
        'house_bath',
        'day_on_house',
        'status',
        'it_feature',
    ];
}
