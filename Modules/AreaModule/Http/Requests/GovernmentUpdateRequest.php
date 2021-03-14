<?php

namespace Modules\AreaModule\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GovernmentUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:governments,name,' . $this->id,
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
            'name.unique' => 'الإسم موجود بالفعل',
        ];

    }
}
