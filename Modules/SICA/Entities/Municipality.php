<?php

namespace Modules\SICA\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\SICA\Entities\Department;

class Municipality extends Model
{
    use SoftDeletes;
    protected $fillable = [];
    protected $dates = ['deleted_at'];
    protected $hidden = ['created_at','updated_at'];

    public function department(){
        return $this->belongsTo(Department::class);
    }

}
