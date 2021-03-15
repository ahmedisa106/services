<?php

namespace Modules\CommonModule\Helper;

trait upload
{
    public function upload($request_photo, $model_name, $folder = null)
    {
        $name = uniqid() . '.' . $request_photo->getClientOriginalName();
        $request_photo->move(public_path('images/' . $model_name . '/' . $folder), $name);
        return $name;

    }//end function

    public function uploadAlbums($model, $id)
    {
        $model = $model::find($id);
        return $model;

    }//end function

    public function removeAlbumPhotos($albumModel, $plural_model_name, $folder, $photo_id)
    {
        $photo = $albumModel::findOrFail($photo_id);
        \Illuminate\Support\Facades\File::delete(public_path('images/' . $plural_model_name . '/' . $folder . '/' . $photo->photo));
        $photo->delete();

    }//end function


    public function deleteOldPhoto($request_photo)
    {
        $photo = str_replace('http://localhost/services/', '', $request_photo);

        \Illuminate\Support\Facades\File::delete(public_path($photo));

    }//end function


}
