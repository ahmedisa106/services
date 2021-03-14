<?php

namespace Modules\AreaModule\Entities;

use Illuminate\Database\Eloquent\Model;

class Government extends Model
{
    protected $guarded = [];

    public function zones()
    {
        return $this->hasMany(Zone::class, 'government_id');
    }//end function

}
