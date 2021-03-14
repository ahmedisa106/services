<?php

namespace Modules\CommonModule\Helper;

use Illuminate\Support\Str;

trait upload
{
    public function upload($request_photo, $model_name, $folder = null)
    {
        $name = uniqid() . '.' . $request_photo->getClientOriginalName();
        $request_photo->move('images/' . $model_name . '/' . $folder, $name);
        return $name;

    }//end function

    public function uploadAlbums($albumModel, $model, $id, $files, $folder)
    {

        $model = $model::find($id);
        $plural_model = Str::plural(lcfirst(class_basename($model))); /*to get the plural name of model like stores*/
        $model_id = lcfirst(class_basename($model)); /*to get model column like store_id*/
        $albumModel::where($model_id . '_id', $id)->get();
        /*delete old Album*/
        foreach ($files as $file) {

            $name = $this->upload($file, $plural_model, $folder);
            $model->album()->create([
                $model_id . '_id' => $model['id'],
                'photo' => $name,
                'size' => $file->getSize(),
                'mime_type' => $file->getClientOriginalextension(),
                'name' => $file->getClientOriginalName(),
            ]);

        }

    }//end function

    public function removeAlbumPhotos($albumModel, $plural_model_name, $folder, $photo_id)
    {
        $photo = $albumModel::findOrFail($photo_id);
        \Illuminate\Support\Facades\File::delete(public_path('images/' . $plural_model_name . '/' . $folder . '/' . $photo->photo));
        $photo->delete();

    }//end function


    public function deleteOldPhoto($request_photo)
    {
        $photo = str_replace('http://localhost/services/public/', '', $request_photo);
        \Illuminate\Support\Facades\File::delete(public_path($photo));

    }//end function


}
