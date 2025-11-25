<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders'; // aapka table name

    protected $fillable = [
        'name',
        'total_amount',
        'payment_method',
        'payment_status',
        'order_status',
        'shipping_address',
        'city',
        'tracking_number',
    ];
}
