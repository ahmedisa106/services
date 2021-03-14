<?php

namespace Modules\AreaModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\AreaModule\Entities\Government;
use Modules\AreaModule\Entities\Zone;
use Modules\AreaModule\Http\Requests\ZoneStoreRequest;
use Modules\AreaModule\Http\Requests\ZoneUpdateRequest;
use Yajra\DataTables\Facades\DataTables;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('areamodule::zones.index');
    }

    public function dataTAble()
    {
        $zones = Zone::with('government')->get();

        return DataTables::of($zones)
            ->addColumn('check', function ($row) {
                return '<input type="checkbox" class="item_checkbox" name="item[]" value="' . $row->id . '" id="input-15">';
            })
            ->addColumn('name', function ($row) {
                return $row->name;
            })
            ->addColumn('government', function ($row) {
                return $row->government->name;
            })
            ->addColumn('operations', function ($row) {


                $edit = ' <a class=" text-center btn-sm btn btn-outline-warning float-left" href="' . route('zones.edit', $row->id) . '" ><i class="la la-edit"></i></a>';
                $delete = '  <form  class=" text-center deleteForm " action=' . route('zones.destroy', $row->id) . ' method="post">
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
        $governments = Government::all();
        return view('areamodule::zones.create', compact('governments'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(ZoneStoreRequest $request)
    {
        $data = $request->except('_token');
        Zone::create($data);

        return response()->json(['success' => 'تم حفظ البيانات بنجاح'], 200);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('areamodule::zones.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $governments = Government::all();
        $zone = Zone::findOrFail($id);
        return view('areamodule::zones.edit', compact('zone', 'governments'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(ZoneUpdateRequest $request, $id)
    {
        $zone = Zone::findOrFail($id);
        $data = $request->except('_token', '_method', 'id');
        $zone->update($data);
        return response()->json(['success' => 'تم تعديل البيانات بنجاح'], 200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Request $request)
    {

        $zone = Zone::findOrFail($request->id);
        $zone->delete();

        return response()->json(['success' => 'تم حذف البيانات بنجاح'], 200);
    }

    public function deleteAll(Request $request)
    {
        Zone::destroy($request->item);
        return response()->json(['success' => 'تم حذف البيانات بنجاح'], 200);

    }//end function
}
