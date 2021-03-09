<?php

namespace Modules\CommonModule\Helper;

trait upload
{
    public function upload($request_photo, $folder)
    {
        $name = uniqid() . '.' . $request_photo->getClientOriginalName();
        $path = $request_photo->move('images/' . $folder, $name);
        return $name;

    }//end function

    public function deleteOldPhoto($request_photo)
    {

        $photo = str_replace('http://localhost/services/public/', '', $request_photo);

        \Illuminate\Support\Facades\File::delete(public_path($photo));


    }//end function


}
