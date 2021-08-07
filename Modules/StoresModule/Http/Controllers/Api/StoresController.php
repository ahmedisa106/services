<?php

namespace Modules\StoresModule\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\StoresModule\Entities\Store;

class StoresController extends Controller
{
    public function index()
    {
        $stores = Store::get();
        return response()->json($stores, 200);


    }

    public function store(Request $request)
    {
        dd('asdsa');
        dd($request->all());

    }
}
