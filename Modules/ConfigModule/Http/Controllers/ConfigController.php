<?php

namespace Modules\ConfigModule\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;
use Modules\CommonModule\Helper\upload;
use Modules\ConfigModule\Entities\Setting;
use Modules\ConfigModule\Http\Requests\Settings;

class ConfigController extends Controller
{
    use upload;

    public function edit()
    {
        $title = 'الإعدادات';
        return view('configmodule::settings.edit', compact('title'));

    }//end function

    public function save(Settings $request)
    {

        $data = $request->except('_token');
        $setting = Setting::orderBy('id', 'desc')->first();
        if ($request->hasFile('logo')) {
            $setting ? File::delete(public_path('images/logo/' . $setting->logo)) : '';
            $path = $this->upload($request->logo, 'logo');
            $data['logo'] = $path;
        }
        if ($request->hasFile('icon')) {
            $setting ? File::delete(public_path('images/icon/' . $setting->icon)) : '';
            $path = $this->upload($request->icon, 'icon');
            $data['icon'] = $path;
        }

        $setting ? $setting->update($data) : $setting->create($data);

        return response()->json(['success' => 'تم حفط البيانات بنجاح'], 200);


    }//end function


}
