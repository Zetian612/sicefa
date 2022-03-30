<?php

namespace Modules\SICA\Entities;

use Illuminate\Database\Eloquent\Model;

class KindOfPurchase extends Model
{
   

    protected $fillable = [];
    
    public function elements(){
        return $this->hasMany(Element::class);
    }
}
