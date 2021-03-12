<?php

namespace Modules\StoresModule\Entities;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

    protected $guarded = [];


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');

    }//end function


    public function album()
    {
        return $this->hasMany(AlbumStore::class, 'store_id');

    }//end function


//    public function setWorkFromAttribute($val)
//    {
//        return $this->attributes['work_from'] = Carbon::createFromFormat('H:i', $val)->format('H:i');
//
//    }//end function
//
//    public function setWorkToAttribute($val)
//    {
//        return $this->attributes['work_to'] = Carbon::createFromFormat('H:i', $val)->format('H:i');
//
//    }//end function

    public function getStatusAttribute($val)
    {

        return ($val == 'open') ? 'مفتوح' : 'مغلق';


    }//end function


}
