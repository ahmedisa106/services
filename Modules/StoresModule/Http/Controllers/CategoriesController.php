<?php

namespace Modules\StoresModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\upload;
use Modules\StoresModule\Entities\Category;
use Modules\StoresModule\Http\Requests\UpdateCategory;
use Yajra\DataTables\Facades\DataTables;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    use upload;

    public function index()
    {
        $title = 'الأقسام';
        return view('storesmodule::categories.index', compact('title'));
    }

    public function dataTable()
    {

        $categories = Category::all();
        return DataTables::of($categories)
            ->addColumn('check', function () {
                return '<input type="checkbox" class="item_checkbox" name="item[]" id="input-15">';
            })
            ->addColumn('name', function ($row) {
                return $row->name;
            })
            ->addColumn('parent_id', function ($row) {

                if (isset($row->parent)) {
                    return '<a href="' . route('categories.edit', $row->parent->id) . '">' . $row->parent->name . '</a>';
                } else {
                    return "Parent Category";
                }
            })
            ->addColumn('operations', function ($row) {
                $edit = '';
                $delete = '

                ';
                return '
          <div class="dropdown">
            <button class="btn  dropdown-toggle round " id="dropdownBreadcrumbButton"
            type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-gear"></i></button>
            <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton">
              <a class="dropdown-item text-center btn btn-outline-warning   " href="' . route('categories.edit', $row->id) . '" ><i class="la la-edit"></i>تعديل</a>
              <form class=" delete_row text-center" action=' . route('categories.destroy', $row->id) . ' method="post">
                                ' . csrf_field() . method_field('delete') . '
                                 <button onclick="return confirm(\'Are You Sure !!\')" type="submit" class="btn btn-outline-danger dropdown-item form-control"><i class="la la-trash"></i>حذف</button>
                        </form>
            </div>
          </div>
        ';

            })
            ->addColumn('photo', function ($row) {

                if ($row->photo != null) {
                    return ' <img  style="width:100px; height:100px;" src="' . $row->photo . '">';
                } else {
                    return ' <img  style="width:100px; height:100px;" src="' . asset('images/logo.png') . '">';
                }


            })
            ->rawColumns(['operations' => 'operations', 'photo' => 'photo', 'parent_id' => 'parent_id', 'check' => 'check'])
            ->make(true);

    }//end function


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $categories = Category::Parents()->pluck('name', 'id');


        return view('storesmodule::categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(\Modules\StoresModule\Http\Requests\Category $request)
    {
        $data = $request->except('_token');
        if ($request->parent_id == 0) {

            $data['parent_id'] = null;

        }
        if ($request->hasFile('photo')) {
            $name = $this->upload($request->photo, 'categories');
            $data['photo'] = $name;
        }
        if ($request->hasFile('cover')) {
            $name = $this->upload($request->cover, 'categories');
            $data['cover'] = $name;
        }


        Category::create($data);

        return response()->json(['success' => 'تم حفط البيانات بنجاح'], 200);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('storesmodule::categories.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $categories = Category::Parents()->pluck('name', 'id');
        $cat = Category::findOrFail($id);
        return view('storesmodule::categories.edit', compact('cat', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateCategory $request, $id)
    {
        $cat = Category::findOrFail($id);


        $data = $request->except('_token', '_method');


        if ($request->parent_id == 0) {

            $data['parent_id'] = null;

        }
        if ($request->hasFile('photo')) {
            \Illuminate\Support\Facades\File::delete(public_path('images/categories/' . $cat->photo));
            $name = $this->upload($request->photo, 'categories');
            $data['photo'] = $name;
        }
        if ($request->hasFile('cover')) {
            \Illuminate\Support\Facades\File::delete(public_path('images/categories/' . $cat->cover));
            $name = $this->upload($request->cover, 'categories');
            $data['cover'] = $name;
        }


        $cat->update($data);

        return response()->json(['success' => 'تم حفط البيانات بنجاح'], 200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
