<?php

namespace Modules\StoresModule\Entities;

use Illuminate\Database\Eloquent\Model;

class AlbumStore extends Model
{
    protected $fillable = ['store_id', 'photo', 'size', 'name', 'mime_type'];

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');

    }//end function


}
