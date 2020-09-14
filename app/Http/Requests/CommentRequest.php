<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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



        $is_required = auth()->user()?"nullable":'required';
        return [
            'name' => "$is_required|string|max:100",
            'email' => "$is_required|string|max:100",
            'content' => "required|string",
            'article_id' => "required|exists:articles,id"
            ];
    }
}
