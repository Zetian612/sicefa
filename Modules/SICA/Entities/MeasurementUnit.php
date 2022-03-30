<?php

namespace Modules\SICA\Entities;

use Illuminate\Database\Eloquent\Model;


class MeasurementUnit extends Model
{
   

    protected $fillable = [];
    
    public function elements(){
        return $this->hasMany(Elements::class);
    }
}
