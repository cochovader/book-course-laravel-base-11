<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class PutRequest extends FormRequest
{
        public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title' => 'required',
            'slug' => 'required|min:3|max:500|unique:categories,slug'.$this->route('category')->id,
            
        ];
    }
}
