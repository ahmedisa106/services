<?php

namespace Modules\AreaModule\Entities;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $guarded = [];

    public function government()
    {
        return $this->belongsTo(Government::class, 'government_id');

    }//end function


}
