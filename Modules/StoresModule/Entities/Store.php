<?php

namespace Modules\StoresModule\Entities;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

    protected $fillable = ['government_id', 'zone_id', 'work_from', 'work_to', 'name', 'description', 'address', 'email', 'photo', 'cover', 'mobile', 'whatsapp', 'facebook', 'twitter', 'instagram', 'youtube', 'video', 'status', ''];


    public function category()
    {
        return $this->belongsToMany(Category::class, 'category_stores', 'store_id', 'category_id');
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

        if ($val == 'close') {
            return 'مغلق';
        } else {
            return 'مفتوح';
        }


    }//end function


    public function getPhotoAttribute($val)
    {
        if ($val != null) {
            return asset('images/stores/' . $val);
        }

    }//end function

    public function getCoverAttribute($val)
    {
        if ($val != null) {
            return asset('images/stores/' . $val);
        }

    }//end function


}
