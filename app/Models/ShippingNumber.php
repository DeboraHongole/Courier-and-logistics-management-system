<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingNumber extends Model
{
    use HasFactory;

    protected $fillable = ['inc_id','shipping_id','inc_shipping_id',];
}
