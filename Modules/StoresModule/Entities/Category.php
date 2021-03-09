<?php

namespace Modules\StoresModule\Entities;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Category extends Model

{

    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');

    }//end function

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');

    }//end function

    public function getPhotoAttribute($value)
    {

        if ($value != null) {
            return asset('images/categories/' . $value);
        }


    }//end function

    public function getCoverAttribute($value)
    {

        if ($value != null) {
            return asset('images/categories/' . $value);
        }


    }//end function

    public function scopeGetParents(Builder $builder)
    {
        return $builder->where('parent_id', null);

    }//end function


}
