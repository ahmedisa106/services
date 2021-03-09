<?php

namespace Modules\StoresModule\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategory extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return [
            'name' => 'required|unique:categories,name,' . $this->id,
            'description' => 'required',
            'photo' => 'sometimes|nullable|image|mimes:png,jpg,jpeg',
            'cover' => 'sometimes|nullable|image|mimes:png,jpg,jpeg',
            'parent_id' => 'sometimes|nullable'
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
            'name.required' => 'الإسم مطلوب',
            'name.unique' => 'الاسم موجود بالفعل',
            'description.required' => 'الوصف  مطلوب',
            'photo.image' => 'الصوره يجب أن يكون صوره',
            'cover.image' => 'الغلاف يجب أن يكون صوره',
            'photo.mimes' => 'امتداد الصوره يجب ان يكون من بين [png , jpg , jpeg]',
            'cover.mimes' => 'امتداد الغلاف يجب ان يكون من بين [png , jpg , jpeg]',
        ];

    }//end function

}
