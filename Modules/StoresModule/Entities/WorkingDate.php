<?php

namespace Modules\StoresModule\Entities;

use Illuminate\Database\Eloquent\Model;

class WorkingDate extends Model
{

    protected $guarded = [];

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');

    }

}
