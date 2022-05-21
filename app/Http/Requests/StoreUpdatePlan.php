<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePlan extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $url = $this->segment(3);
        return [
            'name' => "required|min:3|max:255|unique:plans,name,${url},url",
            'description' => 'nullable|min:3|max:2000',
            'price' => "required|regex:/^\d+(\.\d{1,2})?$/",

        ];
    }
    public function messages()
    {
        return [
            'required' => 'Este campo é obrigatório.',
            'min' => 'Este campo deve conter no mínimo 3 caracters.',
            'name.max' => 'Este campo deve ter no máximo 255 caracteres.',
            'description.max' => 'Este campo deve ter no máximo 2000 caracteres.',

        ];
    }
}
