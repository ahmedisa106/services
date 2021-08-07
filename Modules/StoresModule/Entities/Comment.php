<?php

namespace Modules\StoresModule\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function store()
    {
        return $this->hasMany(Store::class, 'store_id');

    }

    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');

    }

    public function child()
    {
        return $this->hasMany(Comment::class, 'parent_id');

    }
}
