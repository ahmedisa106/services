<?php

namespace Modules\StoresModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\CommonModule\Helper\upload;
use Modules\StoresModule\Helper\CategoryRepo;
use Modules\StoresModule\Http\Requests\Category;
use Modules\StoresModule\Http\Requests\UpdateCategory;
use Yajra\DataTables\Facades\DataTables;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    use upload;

    private $category;

    public function __construct(CategoryRepo $category)
    {
        $this->category = $category;
    }

    public function index()
    {


        $type = 0;
        if (request()->has('type')) {


            $type = request('type');

        }

        $title = 'الأقسام';
        return view('storesmodule::categories.index', compact('title', 'type'));
    }

    public function dataTable()
    {
        $categories = $this->category->getALl();
        if (\request('type') && \request('type') != null) {
            $categories = \Modules\StoresModule\Entities\Category::where('parent_id', '!=', null)->get();

        }


        return DataTables::of($categories)
            ->addColumn('check', function ($row) {
                return '<input type="checkbox" class="item_checkbox" name="item[]" value="' . $row->id . '" id="input-15">';
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


                $edit = ' <a class=" text-center btn-sm btn btn-outline-warning float-left" href="' . route('categories.edit', $row->id) . '" ><i class="la la-edit"></i></a>';
                $delete = '  <form  class=" text-center deleteForm " action=' . route('categories.destroy', $row->id) . ' method="post">
                 ' . csrf_field() . method_field('delete') . '
                 <input type="hidden" class="model_id" name="id" value="' . $row->id . '">
                <button    type="submit"  class="btn btn-sm btn-outline-danger deleteBtn float-left ml-1 "><i class="la la-trash"></i></button>
              </form>';
                return $edit . ' ' . $delete;
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
        $title = 'إضافه قسم جديد';
        $categories = $this->category->getParentCategories();
        return view('storesmodule::categories.create', compact('categories', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Category $request)
    {
        $this->category->create($request);
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
        $title = 'تعديل القسم';
        $categories = $this->category->getParentCategories();
        $cat = $this->category->find($id);
        return view('storesmodule::categories.edit', compact('cat', 'categories', 'title'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateCategory $request, $id)
    {
        $this->category->update($request, $id);
        return response()->json(['success' => 'تم حفط البيانات بنجاح'], 200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Request $request)
    {
        $this->category->delete($request);

        return response()->json(['success' => 'تم حذف البيانات بنجاح'], 200);
    }

    public function deleteAll(Request $request)
    {
        $this->category->destroy($request->item);
        return response()->json(['success' => 'تم حذف البيانات بنجاح'], 200);

    }//end function

}
