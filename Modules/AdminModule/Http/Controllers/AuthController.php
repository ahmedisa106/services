<?php

namespace Modules\AdminModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('adminmodule::auth.login');

    }//end function

    public function doLogin(Request $request)
    {
        parse_str($request->form, $data);

        $validate = Validator::make($data, [
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'البريد مطلوب',
            'password.required' => 'كلمه المرور مطلوبه',
        ]);
        if ($validate->fails()) {


            return response()->json(['error' => $validate->errors()->all()], 404);
        }

        if (auth()->guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {


            return response()->json(['success' => 'تم تسجيل الدخول بنجاح'], 200);
        } else {
            return response()->json(['errors' => 'البريد أو كلمه  المرور خاطئه'], 402);
        }

    }//end function

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('admin-panel');

    }//end function

}
