<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

protected $fillable = ['inc_id','country_name',];

    public function getRegion()
		{
         //return $this->hasMany(Region::class,'country_id');
         return $this->hasMany(Region::class,'country_id');
		}

   public function getDestination(){
      return $this->hasMany(Destination::class);
    }

    
}
