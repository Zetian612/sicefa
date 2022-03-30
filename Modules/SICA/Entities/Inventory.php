<?php

namespace Modules\SICA\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\SICA\Entities\Element;

class Inventory extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $hidden = ['created_at','updated_at'];
    protected $fillable = ['people_id','warehouse_id','element_id','description',
                            'value','amount','stock','production_date','lot_number','expiration_date',
                            'state','mark','inventoryCode'];
    

    public function people(){
        return $this->belongsTo(Person::class);
    }

    public function warehouse(){
        return $this->belongsTo(Warehouse::class);
    }

    public function element(){
      return $this->belongsTo(Element::class);  
    }
}
