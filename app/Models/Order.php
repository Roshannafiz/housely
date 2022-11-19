<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_id',
        'payer_id',
        'payer_email',
        'amount',
        'currency',
        'payment_status',
        // User Request Filed Info ...
        'user_id',
        'house_id',
        'total_amount',
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'state',
        'locality',
        'post_code',
        'status',
    ];
}
