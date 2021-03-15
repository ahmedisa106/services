<?php

namespace Modules\StoresModule\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:stores,name,' . $this->id,
            'description' => 'required',
            'category_id' => 'array|min:1|required',
            'government_id' => 'required',
            'zone_id' => 'required',
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
            'name.required' => 'الاسم مطلوب',
            'name.unique' => 'الإسم موجود بالفعل',
            'description.required' => 'الوصف مطلوب',
            'category_id.required' => 'القسم مطلوب',
            'government_id.required' => 'المحافظه مطلوبه',
            'zone_id.required' => 'المنطقه مطلوبه',
        ];

    }//end function
}
