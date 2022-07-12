<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = ['inc_id','from_country','to_country',];
    public function getFromCountry()
            {
                return $this->belongsTo(Country::class, 'from_country');
            }
    public function getToCountry()
            {
                return $this->belongsTo(Country::class, 'to_country');
            }
}
