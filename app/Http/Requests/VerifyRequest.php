<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VerifyRequest extends FormRequest
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
        return [
            //
            'verified' => 'required|boolean',
            
        ];
    }
    public function messages()
    {
        return [
            'verified.required' => 'Verify is required',
            'verified.boolean' => 'Verify must be 0 or 1', 
        ];
    }

}
