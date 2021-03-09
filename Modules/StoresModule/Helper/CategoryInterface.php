<?php

namespace Modules\StoresModule\Helper;
interface CategoryInterface
{
    public function getALl();

    public function find($id);

    public function getParentCategories();

    public function create($data);

    public function update($data, $id);

    public function delete($data);

    public function destroy($data);


}
