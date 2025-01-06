<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class InstitutionFormRequest extends FormRequest
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
        $rules = [
            'code' => [
                'required',
                'string',
                'max:200'
            ],
            'name' => [
                'required',
                'string',
                'max:200'
            ],
            'type' => [
                'required',
                'string',
                'max:200'
            ],
            'address' => [
                'required',
                'string',
                'max:200'
            ],
        ];

        return $rules;
    }
}
