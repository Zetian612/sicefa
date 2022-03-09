<?php

namespace Modules\BOLMETEOR\Entities;

use Illuminate\Database\Eloquent\Model;


class Sensor extends Model
{
  

    use SoftDeletes;
    protected $fillable = [];
    protected $dates = ['deleted_at'];
    protected $hidden = ['created_at','update_at'];
}
