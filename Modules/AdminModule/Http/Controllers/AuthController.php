<?php

namespace Modules\AdminModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('adminmodule::auth.login');

    }//end function

    public function doLogin(Request $request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended('/admin-panel');
        } else {
            return redirect()->back();
        }

    }//end function

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('admin-panel');

    }//end function

}
