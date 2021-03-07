<?php

namespace Modules\ConfigModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Modules\CommonModule\Helper\upload;
use Modules\ConfigModule\Entities\Setting;

class ConfigController extends Controller
{
    use upload;

    public function edit()
    {
        $title = 'الإعدادات';
        return view('configmodule::settings.edit', compact('title'));

    }//end function

    public function save(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'name' => 'required|min:5',
            'description' => 'required',
            'email' => 'required',
            'address' => 'required',
        ], [
            'name.required' => 'اسم الموقع مطلوب',
            'email.required' => 'البريد مطلوب',
            'description.required' => 'وصف الموقع مطلوب',
            'address.required' => 'العنوان مطلوب',
            'name.min' => 'اسم الموقع لابد ان يكون اكبر من 5 حروف',

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 404);

        }
        $data = $request->except('_token');
        $setting = Setting::orderBy('id', 'desc')->first();
        if ($request->hasFile('logo')) {

            if ($setting) {
                File::delete(public_path('images/logo/' . $setting->logo));
            }

            $path = $this->upload($request->logo, 'logo');
            $data['logo'] = $path;
        }
        if ($request->hasFile('icon')) {

            if ($setting) {
                File::delete(public_path('images/icon/' . $setting->icon));
            }
            $path = $this->upload($request->icon, 'icon');
            $data['icon'] = $path;
        }

        if ($setting) {
            $setting->update($data);
        } else {
            $setting = Setting::create($data);

        }
        return response()->json(['success' => 'تم حفط البيانات بنجاح'], 200);


    }//end function


}
