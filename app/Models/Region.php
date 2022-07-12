<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = ['inc_id','name','country_id',];

            public function getCountry()
            {
                return $this->belongsTo(Country::class, 'country_id');
            }
}
