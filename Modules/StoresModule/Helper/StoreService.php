<?php

namespace Modules\StoresModule\Helper;

use Modules\StoresModule\Entities\AlbumStore;

class StoreService
{
    public function uploadAlbum($store, $files)
    {

        $album = AlbumStore::where('store_id', $store->id)->get();


        /*delete old Album*/
        foreach ($files as $file) {
            $name = uniqid() . '.' . $file->getClientOriginalName();
            $path = $file->move('images/stores/album', $name);


            $store->album()->create([
                'store_id' => $store['id'],
                'photo' => $name,
                'size' => $file->getSize(),
                'mime_type' => $file->getClientOriginalextension(),
                'name' => $file->getClientOriginalName(),
            ]);

        }

    }//end function

}
