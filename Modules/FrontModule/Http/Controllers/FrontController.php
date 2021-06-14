<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\AreaModule\Entities\Government;
use Modules\StoresModule\Entities\Store;
use Modules\StoresModule\Helper\CategoryRepo;
use Modules\StoresModule\Helper\StoreRepo;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public $categories;
    public $governments;
    public $stores;

    public function __construct(CategoryRepo $categories, StoreRepo $stores)
    {
        $this->categories = $categories;
        $this->stores = $stores;
    }

    public function index()
    {

        $stores = $this->stores->getALl();
        $governments = Government::all();
        return view('frontmodule::index', compact('stores', 'governments'));
    }

    public function categories()
    {
        return view('frontmodule::pages.categories.categories');
    }//end function

    public function show_category($id)
    {
        $category = $this->categories->find($id);
        return view('frontmodule::pages.categories.show', compact('category'));


    }//end function

    public function show_store($id)
    {
        $store = $this->stores->find($id);

        return view('frontmodule::pages.stores.show', compact('store'));

    }//end function


    public function addStore()
    {
        return view('frontmodule::pages.stores.add_new_store');

    }//end function


    public function search(Request $request)
    {


        $data = $request->except('_token');

        $stores = Store::with('category')->where(function ($q) use ($data) {
            if (isset($data['category_id']) && $data['category_id']) {
                $q->whereHas('category', function ($q) use ($data) {
                    $q->where('category_id', $data['category_id']);
                });
            }
            if (isset($data['search_text']) && $data['search_text']) {
                $q->where('name', 'like', '%' . $data['search_text'] . '%');
            }

            if (isset($data['government']) && $data['government']) {
                $q->where('government_id', $data['government']);
            }
        })->paginate(30);

        return view('frontmodule::pages.search', compact('stores'));


    }//end function

}
