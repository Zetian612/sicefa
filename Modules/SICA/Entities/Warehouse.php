<?php

namespace Modules\SICA\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\SICA\Entities\Inventory;

class Warehouse extends Model
{
   
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['name', 'description', 'app_id'];

    public function inventories(){
        
        return $this->hasMany(Inventory::class);
    }

    
}
