<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusnessContactFrom extends Model
{
    use HasFactory;
    protected $fillable = ['inc_dest_id','dest_id','full_name','company','from_email','country_id','region_id','state','address','phone_type','code','phone',];
}
