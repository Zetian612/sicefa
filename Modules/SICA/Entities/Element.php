<?php

namespace Modules\SICA\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\SICA\Entities\Inventory;
class Element extends Model
{   

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['name','measurement_unit_id','description','kind_of_purchase_id','categorie_id','UNSPSC_code'];
    
    public function measurement_unit(){
        return $this->belongsTo(MeasurementUnit::class);
    }

    public function kind_of_purchase(){
        return $this->belongsTo(KindOfPurchase::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function inventories(){
        return $this->hasMany(Inventory::class);  
      }
}
