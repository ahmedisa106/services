<?php

namespace Modules\StoresModule\Helper;
interface StoreInterface
{
    public function getALl();

    public function find($id);


    public function create($data);

    public function update($data, $id);

    public function delete($data);

    public function destroy($data);


}
