<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'en.title' => 'required|string',
            'en.description' => 'required|string',
            'en.keywords' => 'nullable|string',

            'ar.title' => 'required_with:ar.description|nullable|string',
            'ar.description' => 'required_with:ar.title|nullable|string',
            'ar.keywords' => 'nullable|string',

            'color' => 'required|string',
            'background' => 'required|string',
        ];
    }
}
