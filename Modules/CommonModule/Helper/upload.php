<?php

namespace Modules\CommonModule\Helper;

trait upload
{
    public function upload($request_photo, $folder)
    {
        $name = time() . '.' . $request_photo->getClientOriginalName();
        $path = $request_photo->move('images/' . $folder, $name);
        return $name;

    }//end function


}
