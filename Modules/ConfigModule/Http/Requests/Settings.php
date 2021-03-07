<?php

namespace Modules\ConfigModule\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Settings extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'description' => 'required',
            'email' => 'required',
            'address' => 'required',
            'logo' => 'sometimes|nullable|image|mimes:png,jpg,jpeg',
            'icon' => 'sometimes|nullable|image|mimes:png,jpg,jpeg',
        ];

    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'name.required' => 'اسم الموقع مطلوب',
            'email.required' => 'البريد مطلوب',
            'description.required' => 'وصف الموقع مطلوب',
            'address.required' => 'العنوان مطلوب',
            'name.min' => 'اسم الموقع لابد ان يكون اكبر من 5 حروف',
            'logo.image' => 'اللوجو يجب أن يكون صوره',
            'icon.image' => 'الأيكون يجب أن يكون صوره',
            'logo.mimes' => 'امتداد اللوجو يجب ان يكون من بين [png , jpg , jpeg]',
            'icon.mimes' => 'امتداد الإيكون يجب ان يكون من بين [png , jpg , jpeg]',

        ];

    }//end function

}
