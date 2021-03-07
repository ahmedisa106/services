<?php

namespace Modules\AdminModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;

class AdminModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function dashboard()
    {
        $title = 'الرئيسيه';
        return view('adminmodule::dashboard', compact('title'));
    }


}
