<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $table = 'coupons'; // aapka table name

    protected $fillable = [
        'code',
        'discount_type',
        'discount_value',
        'status',
    ];
}
