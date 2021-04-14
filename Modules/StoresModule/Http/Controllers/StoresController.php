<?php

namespace Modules\StoresModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\AreaModule\Entities\Government;
use Modules\CommonModule\Helper\upload;
use Modules\StoresModule\Entities\AlbumStore;
use Modules\StoresModule\Entities\Store;
use Modules\StoresModule\Helper\CategoryRepo;
use Modules\StoresModule\Helper\StoreRepo;
use Modules\StoresModule\Helper\StoreService;
use Modules\StoresModule\Http\Requests\StoreRequest;
use Modules\StoresModule\Http\Requests\UpdateStoreRequest;
use Yajra\DataTables\Facades\DataTables;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */

    use upload;

    private $category;
    private $store;
    private $service;

    public function __construct(CategoryRepo $category, StoreRepo $store, StoreService $service)
    {
        $this->category = $category;
        $this->store = $store;
        $this->service = $service;
    }

    public function index()
    {

        return view('storesmodule::stores.index');
    }

    public function dataTable()
    {
        $stores = $this->store->getALl();
        return DataTables::of($stores)
            ->addColumn('check', function ($row) {
                return '<input type="checkbox" class="item_checkbox" name="item[]" value="' . $row->id . '" id="input-15">';
            })
            ->addColumn('name', function ($row) {
                return $row->name;
            })
            ->addColumn('category', function ($row) {

                if (isset($row->category)) {


                    foreach ($row->category->pluck('name') as $cat) {
                        $array[] = ' ' . $cat . ' ';

                    }
                    return $array;


                } else {
                    return "Category";
                }
            })
//            ->addColumn('status', function ($row) {
//                $checked = "checked";
//                return '<input type="checkbox" value="open" name="status" class="switchBootstrap form-control "  checked id="switchBootstrap18"  data-on-color="success" data-off-color="danger"/></div>';
//            })
            ->addColumn('operations', function ($row) {


                $edit = ' <a class=" text-center btn-sm btn btn-outline-warning float-left" href="' . route('stores.edit', $row->id) . '" ><i class="la la-edit"></i></a>';
                $delete = '  <form  class=" text-center deleteForm " action=' . route('stores.destroy', $row->id) . ' method="post">
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
            ->rawColumns(['operations' => 'operations', 'photo' => 'photo', 'category' => 'category', 'check' => 'check', 'status' => 'status'])
            ->make(true);

    }//end function

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $title = 'المحلات';
        $governments = Government::all();
        return view('storesmodule::stores.create', compact('title', 'governments'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreRequest $request)
    {

        $data = $request->except('_token', 'store_id');
        $store = $this->store->create($data);
        $store_id = $store->id;
        return response()->json(['store_id' => $store_id], 200);
    }

    public function uploadAlbum(Request $request)
    {
        $model = $this->uploadAlbums(Store::class, $request->store_id);
        $this->store->albumUpload($model, $request->file, 'album');
    }//end function

    public function removeAlbumPhoto(Request $request)
    {
        $this->removeAlbumPhotos(AlbumStore::class, 'stores', 'album', $request->id);
    }//end function


    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */

    public function getZone(Request $request)
    {
        $gov = Government::with('zones')->findOrFail($request->id);
        return response()->json(['zones' => $gov->zones], 200);

    }//end function

    public function show($id)
    {
        return view('storesmodule::stores.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $title = 'المحلات';
        $store = $this->store->find($id);
        $governments = Government::all();

        return view('storesmodule::stores.edit', compact('title', 'store', 'governments'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateStoreRequest $request, $id)
    {
        $data = $request->except('_token', '_method', 'store_id');
        $this->store->update($data, $id);
        return response()->json(['store_id' => $id], 200);

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Request $request)
    {
        $this->store->delete($request);
        return response()->json(['success' => 'تم حذف البيانات بنجاح'], 200);
    }

    public function deleteAll(Request $request)
    {
        $this->store->destroy($request->item);
        return response()->json(['success' => 'تم حذف البيانات بنجاح'], 200);

    }//end function
}
