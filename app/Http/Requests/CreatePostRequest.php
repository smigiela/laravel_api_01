<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => 'required|min:5|max:50',
            'slug' => 'min:5|max:180|unique:posts',
            'keywords' => 'min:5|max:180',
            'meta_content' => 'min:5|max:180',
            'category_id' => 'integer',
            'user_id' => 'integer',
            'status' => 'required',
            'image' => 'sometimes|image',
            'alt_tag' => 'min:5|max:100'
        ];
    }
}
