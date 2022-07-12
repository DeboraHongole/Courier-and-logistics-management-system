<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusnessContactTo extends Model
{
    use HasFactory;
    protected $fillable = ['country_id','region_id','full_name','company','to_email','state','address','phone_type','code','phone','vat',];
}

