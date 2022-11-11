<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'status',
    ];

    // One Navbar Item Have Many Sub-Navbar
    public function sub_navbars()
    {
        return $this->hasMany(\App\Models\Subnavbar::class);
    }
}
