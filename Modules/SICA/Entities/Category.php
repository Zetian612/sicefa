<?php

namespace Modules\SICA\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [];   

    public function elements(){
        return $this->hasMany(Eloquent::class);
    }
}
