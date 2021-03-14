<?php

namespace Modules\AreaModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\AreaModule\Entities\Government;
use Modules\AreaModule\Http\Requests\GovernmentStoreRequest;
use Modules\AreaModule\Http\Requests\GovernmentUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class GovernmentController extends Controller

{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('areamodule::governments.index');
    }

    public function dataTable()
    {
        $governments = Government::all();

        return DataTables::of($governments)
            ->addColumn('check', function ($row) {
                return '<input type="checkbox" class="item_checkbox" name="item[]" value="' . $row->id . '" id="input-15">';
            })
            ->addColumn('name', function ($row) {
                return $row->name;
            })
            ->addColumn('operations', function ($row) {


                $edit = ' <a class=" text-center btn-sm btn btn-outline-warning float-left" href="' . route('governments.edit', $row->id) . '" ><i class="la la-edit"></i></a>';
                $delete = '  <form  class=" text-center deleteForm " action=' . route('governments.destroy', $row->id) . ' method="post">
                 ' . csrf_field() . method_field('delete') . '
                 <input type="hidden" class="model_id" name="id" value="' . $row->id . '">
                <button    type="submit"  class="btn btn-sm btn-outline-danger deleteBtn float-left ml-1 "><i class="la la-trash"></i></button>
              </form>';
                return $edit . ' ' . $delete;
            })
            ->rawColumns(['operations' => 'operations', 'check' => 'check'])
            ->make(true);

    }//end function


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('areamodule::governments.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(GovernmentStoreRequest $request)
    {

        $data = $request->except('_token');
        Government::create($data);

        return response()->json(['success' => 'تم حفظ البيانات بنجاح'], 200);

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('areamodule::governments.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $government = Government::findOrFail($id);
        return view('areamodule::governments.edit', compact('government'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(GovernmentUpdateRequest $request, $id)
    {
        $gov = Government::findOrFail($id);
        $data = $request->only('name');
        $gov->update($data);

        return response()->json(['success' => 'تم تعديل البيانات بنجاح'], 200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Request $request)
    {

        $gov = Government::findOrFail($request->id);
        $gov->delete();

        return response()->json(['success' => 'تم حذف البيانات بنجاح'], 200);
    }

    public function deleteAll(Request $request)
    {
        Government::destroy($request->item);
        return response()->json(['success' => 'تم حذف البيانات بنجاح'], 200);

    }//end function
}
