<?php

namespace Modules\StoresModule\Helper;

use Illuminate\Support\Facades\File;
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

    public function find($id)
    {
        return $this->model->with('album')->find($id);
    }


    public function create($data)
    {

        if (!isset($data['status'])) {
            $data['status'] = 'close';
        }
        $store = $this->model->create($data);

        return $store;

    }

    public function update($data, $id)
    {

        $store = $this->model->find($id);
        if (!isset($data['status'])) {
            $data['status'] = 'close';
        }

        $store->update($data);


    }//end function

    public function delete($data)
    {
        $store = $this->model->with('album')->find($data->id);
        /*delete Album*/
        $album = AlbumStore::where('store_id', $store->id)->get();
        foreach ($album as $photo) {

            \Illuminate\Support\Facades\File::delete(public_path('images/stores/album/' . $photo->photo));
        }

        $store->delete();
    }

    public function destroy($data)
    {

        foreach ($data as $item) {


            $album = AlbumStore::where('store_id', $item)->get();
            foreach ($album as $photo) {
                File::delete(public_path('images/stores/album/' . $photo->photo));
            }
        }

        $this->model->destroy($data);

    }//end function

}
