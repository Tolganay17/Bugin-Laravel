<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'en.title' => 'required',
            'en.content' => 'required',
            'en.slug' => 'required',
            'author'=>'required',
            'image'=>'required|file',
            'category_id'=>'required',
            
        ];

       
        foreach (config('translatable.locales') as $locale) {
            $rules[$locale . '.title'] = 'string';
            $rules[$locale . '.slug'] = 'string';
            $rules[$locale . '.content'] = 'string';
            
        }

        return $rules;
    }
}
