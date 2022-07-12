<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParcelDetail extends Model
{
    use HasFactory;

    protected $fillable = ['ship_id','parcel_name','weight','height','width','category',];
}
