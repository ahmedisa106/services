<?php

namespace Modules\StoresModule\Helper;

use Modules\CommonModule\Helper\upload;
use Modules\StoresModule\Entities\Category;

class CategoryRepo implements CategoryInterface
{
    private $model;
    use upload;

    public function __construct(Category $category)
    {
        $this->model = $category;

    }

    public function getALl()
    {
        return $this->model->get();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function getParentCategories()
    {
        return $this->model->getParents()->pluck('name', 'id');
    }

    public function create($request)
    {
        $data = $request->except('_token');

        if ($data['parent_id'] == 0) {

            $data['parent_id'] = null;

        }
        if ($request->hasFile('photo')) {
            $name = $this->upload($data['photo'], 'categories');
            $data['photo'] = $name;
        }
        if ($request->hasFile('cover')) {
            $name = $this->upload($data['cover'], 'categories');
            $data['cover'] = $name;
        }

        $this->model->create($data);

    }

    public function update($request, $id)
    {
        $data = $request->except('_token', '_method');

        $cat = $this->model->find($id);
        if ($request->hasFile('photo')) {
            $this->deleteOldPhoto($cat->photo);
            $name = $this->upload($request->photo, 'categories');
            $data['photo'] = $name;
        }
        if ($request->hasFile('cover')) {
            $this->deleteOldPhoto($cat->cover);
            $name = $this->upload($request->cover, 'categories');
            $data['cover'] = $name;
        }
        if ($request['parent_id'] == 0) {
            $data['parent_id'] = null;
        }

        $cat->update($data);

    }//end function

    public function delete($data)
    {
        $cat = $this->model->find($data->id);
        $this->deleteOldPhoto($cat->photo);
        $this->deleteOldPhoto($cat->cover);
        $cat->delete();
    }
}
