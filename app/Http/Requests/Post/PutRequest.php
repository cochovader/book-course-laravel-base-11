<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'slug' => 'required|min:3|max:500|unique:posts,slug'.$this->route('post')->id,
            'numero' => 'required||min:1',
            'adress' => 'required|min:5',
            'category_id' => 'required',
            'description' => 'required|min:5',
            'content' => 'required|min:3',
            'image' => 'mimes:jpeg,png,jpg | max:10240',
            'posted' => 'required | in:yes,not',
        ];
    }
}
