<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralAdminRequest extends FormRequest
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
            'name' => 'max:255',
            'image' => 'image|mimes:jpg,jpeg,png,gif|max:500000',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name is required.',
            'name.max' => 'Name is too long.', 
            'image.mimes' => 'File is not an image.',
            'image.max' => 'Image is too large.',
            'image.required' => 'Image is required.'
        ];
    }

}
