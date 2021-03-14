<?php

namespace Modules\AreaModule\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ZoneUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:zones,name,' . $this->id,
            'government_id' => 'required',
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
            'government_id.required' => 'المحافظه مطلوبه',
        ];
    }
}
