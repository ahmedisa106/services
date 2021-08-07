<?php

namespace Modules\StoresModule\Helper;

use Illuminate\Support\Str;
use Modules\CommonModule\Helper\upload;
use Modules\StoresModule\Entities\AlbumStore;
use Modules\StoresModule\Entities\Store;

class StoreRepo implements StoreInterface
{
    private $model;
    use upload;

    public function __construct(Store $store)
    {
        $this->model = $store;

    }

    public function getALl()
    {
        return $this->model->with('category')->get();
    }

    public function getALlApproval()
    {
        return $this->model->with('category', 'workingDates')->where('approval', 1)->get();
    }

    public function find($id)
    {
        return $this->model->with('album', 'category', 'workingDates')->find($id);
    }


    public function create($data)
    {

        if (isset($data['photo'])) {

            $name = $this->upload($data['photo'], 'stores');
            $data['photo'] = $name;
        }
        if (isset($data['cover'])) {

            $name = $this->upload($data['cover'], 'stores');
            $data['cover'] = $name;
        }
        if (!isset($data['status'])) {

            $data['status'] = 'close';
        }
        if (!isset($data['approval'])) {

            $data['approval'] = 0;
        }

        $store = $this->model->create($data);
        $store->category()->sync($data['category_id']);
        return $store;
    }

    public function update($data, $id)
    {

        $store = $this->model->find($id);
        if (isset($data['photo'])) {

            $this->deleteOldPhoto($store->photo);
            $name = $this->upload($data['photo'], 'stores');
            $data['photo'] = $name;

        }
        if (isset($data['cover'])) {

            $this->deleteOldPhoto($store->cover);
            $name = $this->upload($data['cover'], 'stores');
            $data['cover'] = $name;
        }


        if (!isset($data['status'])) {
            $data['status'] = 'close';
        }
        if (!isset($data['approval'])) {
            $data['approval'] = 0;
        }

        $store->update($data);
        $store->category()->sync($data['category_id']);


    }//end function

    public function albumUpload($model, $files, $folder)
    {
        $plural_model = Str::plural(lcfirst(class_basename($model))); /*to get the plural name of model like stores*/
        $model_id = lcfirst(class_basename($model)); /*to get model column like store_id*/


        foreach ($files as $file) {
            $name = $this->upload($file, $plural_model, $folder);
            $model->album()->create([
                $model_id . '_id' => $model['id'],
                'photo' => $name,
                'size' => 10,
                'mime_type' => $file->getClientOriginalextension(),
                'name' => $file->getClientOriginalName(),
            ]);

        }


    }//end function


    public function delete($data)
    {
        $store = $this->model->with('album')->find($data->id);
        $this->deleteOldPhoto($store->photo);
        $this->deleteOldPhoto($store->cover);
        /*delete Album*/
        $album = AlbumStore::where('store_id', $store->id)->get();
        foreach ($album as $photo) {
            $this->removeAlbumPhotos(AlbumStore::class, 'stores', 'album', $photo->id);
        }

        $store->delete();
    }

    public function destroy($data)
    {

        foreach ($data as $item) {

            $store = $this->model->find($item);
            $this->deleteOldPhoto($store->photo);
            $this->deleteOldPhoto($store->cover);
            $album = AlbumStore::where('store_id', $item)->get();
            foreach ($album as $photo) {
                $this->removeAlbumPhotos(AlbumStore::class, 'stores', 'album', $photo->id);
            }
        }

        $this->model->destroy($data);

    }//end function

}
