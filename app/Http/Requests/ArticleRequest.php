<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'en.content' => 'required|string',
            'en.keywords' => 'nullable|string',

            'ar.title' => 'required_with:ar.description,ar.content|nullable|string',
            'ar.description' => 'required_with:ar.title,ar.content|nullable|string',
            'ar.content' => 'required_with:ar.title,ar.description|nullable|string',
            'ar.keywords' => 'nullable|string',

            'category_id' => 'required|exists:categories,id',
            'image' => $this->_method?'nullable|image|mimes:jpeg,jpg,png':'required|image|mimes:jpeg,jpg,png'
        ];
    }
}
