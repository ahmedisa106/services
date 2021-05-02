<?php

namespace Modules\AdminModule\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{

    protected $table = 'admins';


    public function getNameAttribute($value) // accessor
    {
        return ucfirst($value);

    }//end function


}
